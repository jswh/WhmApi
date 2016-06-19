<?php
//caoweijie@baixing.com
namespace WhmApi\Core;
class ApiBase
{
    protected $processor;
    
    public function __construct(Processor $processor)
    {
        $this->processor = $processor;
    }
}