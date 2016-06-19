<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class GeneralAPI extends ApiBase {
     /**
     * @return string
     */
    public function applist()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $command
     * @return string
     */
    public function batch($command)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('command'));
    }


}