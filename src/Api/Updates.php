<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Updates extends ApiBase {
     /**
     * @return string
     */
    public function get_available_tiers()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function getlongtermsupport()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $updates
     * @return string
     */
    public function set_cpanel_updates($updates)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('updates'));
    }

    /**
     * @param string $tier
     * @return string
     */
    public function set_tier($tier)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('tier'));
    }

    /**
     * @return string
     */
    public function update_updateconf()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function version()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}