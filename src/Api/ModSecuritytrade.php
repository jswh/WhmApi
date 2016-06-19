<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class ModSecuritytrade extends ApiBase {
     /**
     * @param string $config
     * @param string $rule
     * @return string
     */
    public function modsec_add_rule($config, $rule)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'rule'));
    }

    /**
     * @param string $url
     * @param array $params //[enabled]
     * @return string
     */
    public function modsec_add_vendor($url, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('url') + $params);
    }

    /**
     * @param integer $setting_id
     * @param string $state
     * @param array $params //[remove]
     * @return string
     */
    public function modsec_batch_settings($setting_id, $state, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('setting_id', 'state') + $params);
    }

    /**
     * @param string $config
     * @param string $id
     * @return string
     */
    public function modsec_clone_rule($config, $id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'id'));
    }

    /**
     * @return string
     */
    public function modsec_deploy_all_rule_changes()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $config
     * @return string
     */
    public function modsec_deploy_rule_changes($config)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config'));
    }

    /**
     * @return string
     */
    public function modsec_deploy_settings_changes()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $config
     * @return string
     */
    public function modsec_discard_rule_changes($config)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config'));
    }

    /**
     * @param string $config
     * @param string $id
     * @return string
     */
    public function modsec_disable_rule($config, $id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'id'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_disable_vendor($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_disable_vendor_configs($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_disable_vendor_updates($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @return string
     */
    public function modsec_discard_all_rule_changes()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $config
     * @param integer $id
     * @param string $rule
     * @return string
     */
    public function modsec_edit_rule($config, $id, $rule)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'id', 'rule'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_enable_vendor($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_enable_vendor_configs($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_enable_vendor_updates($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @param string $config
     * @return string
     */
    public function modsec_get_config_text($config)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config'));
    }

    /**
     * @return string
     */
    public function modsec_get_configs()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function modsec_get_configs_with_changes_pending()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function modsec_get_log()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[vendor_id, config, exclude_other_directives, exclude_bare_comments]
     * @return string
     */
    public function modsec_get_rules(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function modsec_get_settings()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function modsec_get_vendors()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function modsec_is_installed()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $config
     * @return string
     */
    public function modsec_make_config_active($config)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config'));
    }

    /**
     * @param string $config
     * @return string
     */
    public function modsec_make_config_inactive($config)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config'));
    }

    /**
     * @param string $url
     * @return string
     */
    public function modsec_preview_vendor($url)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('url'));
    }

    /**
     * @param string $config
     * @param integer $id
     * @return string
     */
    public function modsec_remove_rule($config, $id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'id'));
    }

    /**
     * @param integer $setting_id
     * @return string
     */
    public function modsec_remove_setting($setting_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('setting_id'));
    }

    /**
     * @param string $vendor_id
     * @return string
     */
    public function modsec_remove_vendor($vendor_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vendor_id'));
    }

    /**
     * @return string
     */
    public function modsec_report_rule()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param  string  $config
     * @param string $text
     * @param array $params //[deploy]
     * @return string
     */
    public function modsec_set_config_text($config, $text, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'text') + $params);
    }

    /**
     * @param integer $setting_id
     * @param string $state
     * @return string
     */
    public function modsec_set_setting($setting_id, $state)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('setting_id', 'state'));
    }

    /**
     * @param string $config
     * @param string $id
     * @return string
     */
    public function modsec_undisable_rule($config, $id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('config', 'id'));
    }

    /**
     * @param string $url
     * @return string
     */
    public function modsec_update_vendor($url)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('url'));
    }


}