<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Two_FactorAuthentication extends ApiBase {
     /**
     * @return string
     */
    public function twofactorauth_disable_policy()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function twofactorauth_enable_policy()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function twofactorauth_generate_tfa_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function twofactorauth_get_issuer()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[user]
     * @return string
     */
    public function twofactorauth_get_user_configs(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function twofactorauth_policy_status()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @return string
     */
    public function twofactorauth_remove_user_config($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $issuer
     * @return string
     */
    public function twofactorauth_set_issuer($issuer)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('issuer'));
    }

    /**
     * @param string $secret
     * @param string $tfa_token
     * @return string
     */
    public function twofactorauth_set_tfa_config($secret, $tfa_token)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('secret', 'tfa_token'));
    }


}