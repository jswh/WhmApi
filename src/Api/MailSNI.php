<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class MailSNI extends ApiBase {
     /**
     * @param string $domain
     * @return string
     */
    public function disable_mail_sni($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $domain
     * @return string
     */
    public function enable_mail_sni($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $domain
     * @return string
     */
    public function mail_sni_status($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param array $params //[reload_dovecot]
     * @return string
     */
    public function rebuild_mail_sni_config(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}