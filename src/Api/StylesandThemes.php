<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class StylesandThemes extends ApiBase {
     /**
     * @return string
     */
    public function load_style()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function remove_logo()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[company_name, documentation_url, help_url]
     * @return string
     */
    public function save_style(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}