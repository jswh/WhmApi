<?php
namespace WhmApi\Core;
use Guzzle\Http\Client;

class Processor
{
    private $apiAddress;
    private $authHeader;
    private $httpClient;
    public function __construct($domain, $user, $accessHash, $https = true)
    {
        $this->setApiAddress($domain, $https);
        $this->setAuthHeader($user, $accessHash);
        $this->httpClient = new Client();
    }

    public function process($api, array $parameter = []) {
        $parameter['api.version'] = 1;
        $url = $this->apiAddress.$api.'?'.http_build_query($parameter);

        $res = $this->httpClient->createRequest('GET', $url)->addHeader('Authorization', $this->authHeader)->send();

        return $res->getBody(true);
    }

    private function setApiAddress($domain, $isHttps) {
        list($protocol, $port) = $isHttps ? ['https://', ':2087'] : ['http://', ':2086'];
        $this->apiAddress = $protocol.$domain.$port.'/json-api/';
    }

    private function setAuthHeader($user, $accessToken) {
        $this->authHeader = "WHM $user:" . preg_replace("'(\r|\n)'", "" , $accessToken);
    }
}