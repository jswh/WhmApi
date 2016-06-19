<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class ServerInformation extends ApiBase {
     /**
     * @param  string  $key
     * @param array $params //[module]
     * @return string
     */
    public function get_tweaksetting($key, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('key') + $params);
    }

    /**
     * @return string
     */
    public function getdiskusage()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function gethostname()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function loadavg()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function systemloadavg()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}