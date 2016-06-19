<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class CPHulk extends ApiBase {
     /**
     * @return string
     */
    public function cphulk_status()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $list_name
     * @param string $ip
     * @param array $params //[comment]
     * @return string
     */
    public function create_cphulk_record($list_name, $ip, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('list_name', 'ip') + $params);
    }

    /**
     * @param string $list_name
     * @param string $ip
     * @return string
     */
    public function delete_cphulk_record($list_name, $ip)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('list_name', 'ip'));
    }

    /**
     * @return string
     */
    public function disable_cphulk()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function enable_cphulk()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function flush_cphulk_login_history()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $ip
     * @return string
     */
    public function flush_cphulk_login_history_for_ips($ip)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ip'));
    }

    /**
     * @return string
     */
    public function get_cphulk_brutes()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_cphulk_excessive_brutes()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_cphulk_failed_logins()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function load_cphulk_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $list_name
     * @return string
     */
    public function read_cphulk_records($list_name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('list_name'));
    }

    /**
     * @return string
     */
    public function save_cphulk_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}