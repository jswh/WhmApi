<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Exim extends ApiBase {
     /**
     * @return string
     */
    public function exim_configuration_check()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function remove_in_progress_exim_config_edit()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function validate_current_installed_exim_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[cfg_text, section]
     * @return string
     */
    public function validate_exim_configuration_syntax(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}