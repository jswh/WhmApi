<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class WHMAccounts extends ApiBase {
     /**
     * @return string
     */
    public function myprivs()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}