<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Greylisting extends ApiBase {
     /**
     * @return string
     */
    public function cpgreylist_is_server_netblock_trusted()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $provider
     * @return string
     */
    public function cpgreylist_list_entries_for_common_mail_provider($provider)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('provider'));
    }

    /**
     * @return string
     */
    public function cpgreylist_load_common_mail_providers_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[autotrust_new_common_mail_providers, provider_key]
     * @return string
     */
    public function cpgreylist_save_common_mail_providers_config(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function cpgreylist_status()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $provider
     * @return string
     */
    public function cpgreylist_trust_entries_for_common_mail_provider($provider)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('provider'));
    }

    /**
     * @param string $provider
     * @return string
     */
    public function cpgreylist_untrust_entries_for_common_mail_provider($provider)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('provider'));
    }

    /**
     * @param string $ip
     * @param array $params //[comment]
     * @return string
     */
    public function create_cpgreylist_trusted_host($ip, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ip') + $params);
    }

    /**
     * @param string $ip
     * @return string
     */
    public function delete_cpgreylist_trusted_host($ip)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ip'));
    }

    /**
     * @return string
     */
    public function disable_cpgreylist()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function enable_cpgreylist()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function load_cpgreylist_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function read_cpgreylist_deferred_entries()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function read_cpgreylist_trusted_host()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[spf_bypass, child_timeout_secs, record_exp_time_mins, initial_block_time_mins, max_child_procs, purge_interval_mins, must_try_time_mins]
     * @return string
     */
    public function save_cpgreylist_config(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}