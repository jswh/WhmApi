<?php
namespace WhmApi\Core;
require_once __DIR__ . '/../Lib/simple_html_dom.php';
use Guzzle\Http\Client;
class ApiGenerator
{
    const _FUNCTION = "    /**\n%s     */\n    public function %s(%s)\n    {\n        return \$this->processor->process(strtolower(__FUNCTION__)%s);\n    }\n\n";
    const _CLASS = "<?php\nnamespace %s;\nuse WhmApi\\Core\\ApiBase;\nclass %s extends ApiBase {\n %s\n}";

    private $client;
    public $baseUrl = 'https://documentation.cpanel.net';
    public $beginUrl = 'https://documentation.cpanel.net/display/SDK/Guide+to+WHM+API+1';

    public function __construct($outputDir = '../Api', $namespace = 'WhmApi\Api')
    {
        $this->client = new Client();
        if (strpos('/', $outputDir) === 0) {
            $this->outputDir = $outputDir;
        } else {
            $this->outputDir = __DIR__.'/'.$outputDir;
        }
        $this->outputDir = rtrim($this->outputDir, '/');
        $this->namespace = $namespace;
    }

    public function createApiFile() {
        $functionContent = [];
        $current = '';
        foreach ($this->getApiDetail() as $data) {
            list($fileName, $functionName, $params) = $data;
            $className = ucfirst($fileName);
            if (!$current) $current = $className;
            if (!isset($functionContent[$className])) {
                $functionContent[$className] = '';
            }
            $functionContent[$className] = $functionContent[$className].$this->makeFunction($functionName, $params);
            if ($current != $className) {
                print '                                                                                    creating '.$current."\n";
                $path = $this->outputDir."/$current.php";
                file_put_contents($path, $this->makeClass($className, $functionContent[$current]));
                $current = $className;
            }
        }
        foreach ($functionContent as $className => $content) {
            print 'creating '.$className."\n";
            $path = $this->outputDir."/$className.php";
            file_put_contents($path, $this->makeClass($className, $content));
        }
    }

    public function getApiDetail() {
        foreach ($this->getApiSets() as $setName => $apis) {
            $setName = str_replace(';', '', str_replace('&', '', $setName));
            print $setName . "\n";
            foreach ($apis as $api) {
                $parts = explode('+', $api);
                if (count($parts) < 2) {
                    continue;
                }
                $apiName       = end($parts);
                $detailContent = $this->client->get($this->baseUrl . $api)->send()->getBody(true);
                $html          = str_get_html($detailContent);
                $table         = $this->getParamsTable($html);
                if ($table === false) {
                    print '  ' . $apiName . "\n";
                    yield [$setName, $apiName, []];
                } else {
                    $paramLines = $table->find('tr');
                    $apiParams  = [];
                    print '  ' . $apiName . "\n";
                    foreach ($paramLines as $line) {
                        $parts = $line->find('td');
                        if (empty($parts)) {
                            continue;
                        }
                        $name = str_replace('*', '', str_replace('<br/>', '', $parts[0]->children[0]->text()));
                        if (strpos($name, '>') > 0) {
                            preg_match('#>.*<#', $name, $match);
                            $name = ltrim(rtrim(current($match), '<'), '>');
                        }
                        $name = trim($name);
                        print '    ' . $name . "\n";
                        $type        = $parts[1]->text();
                        $isRequired  = strpos($parts[2]->text(), 'Required') !== false;
                        $apiParams[] = compact('name', 'type', 'isRequired');
                    }
                    yield [$setName, $apiName, $apiParams];
                }
            }
        }
    }

    public function getApiSets()
    {
        $res = $this->client->get('https://documentation.cpanel.net/display/SDK/Guide+to+WHM+API+1')->send();
        $content = $res->getBody(true);
        $html = str_get_html($content);
        $apiSets = $html->find('div[class=expand-container conf-macro output-block]');
        $setData = [];
        foreach ($apiSets as $set) {
            $setName = current(current($set->find('div[class=expand-control]'))->find('span[class=expand-control-text]'))->text();
            if ($setName == str_replace('...', '', $setName)) {
                $as = current($set->find('div[class=expand-content expand-hidden]'))->find('a');
                $setName = str_replace('-', '_', str_replace(' ', '', $setName));
                $setData[$setName] = [];
                foreach ($as as $a) {
                    $setData[$setName][] = $a->href;
                }
            }
        }
        return $setData;
    }

    private function getParamsTable($html) {
        $tableWraps = $html->find('div[class=table-wrap]');
        $table = false;
        if ($tableWraps) {
            foreach ($tableWraps as $w) {
                $maybeTable      = $w->children(0);
                $columnsCount = count($maybeTable->find('th'));
                $firstColumnName = $maybeTable->children(0)->children(0)->children(0)->text();
                if ($columnsCount ==5 && $firstColumnName == 'Parameter') {
                    $table = $maybeTable;
                    break;
                }
            }
        }
        return $table;
    }

    private function makeFunction($functionName, $params)
    {
        $doc = $this->makeDocString($params);
        list($paramStr, $compactStr) = $this->makeParamString($params);
        return sprintf(self::_FUNCTION, $doc, $functionName, $paramStr, $compactStr);
    }

    private function makeParamString($params)
    {
        $requiredParams = [];
        $requiredNames = [];
        $notRequiredParams = [];

        if (empty($params)) {
            return ['', ''];
        }

        foreach ($params as $def) {
            $name = '$'.$def['name'];
            if ($def['isRequired']) {
                $requiredNames[] = "'".$def['name']."'";
                $requiredParams[$name] = $def['type'];
            } else {
                $notRequiredParams[$name] = $def['type'];
            }
        }

        $compactStr = ', compact('.implode(', ', $requiredNames).')';
        if (!empty($notRequiredParams)) {
            $requiredParams['array $params = []'] = 'true';
            $compactStr = rtrim($compactStr, ')').') + $params';
        }
        $paramStr = implode(', ', array_keys($requiredParams));

        return [$paramStr, $compactStr];
    }

    private function makeDocString($params)
    {
        $doc = '';
        $notRequired = [];
        foreach ($params as $def) {
            if ($def['isRequired']) {
                $doc = $doc.'     * @param '.$def['type'].' $'.$def['name']."\n";
            } else {
                $notRequired[] = $def['name'];
            }
        }
        if ($notRequired) {
            $doc = $doc.'     * @param array $params //['.implode(', ', $notRequired)."]\n";
        }
        $doc = $doc."     * @return string\n";

        return $doc;
    }

    private function makeClass($className, $content) {
        return sprintf(self::_CLASS, $this->namespace, $className, $content);
    }

    public function test() {
        $res = $this->client->get('https://documentation.cpanel.net/pages/viewpage.action?pageId=1512956')->send();
        var_dump($res->getStatusCode());
    }
}
