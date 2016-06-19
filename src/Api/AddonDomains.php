<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class AddonDomains extends ApiBase {
     /**
     * @param string $domain
     * @return string
     */
    public function convert_addon_fetch_domain_details($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $username
     * @param string $domain
     * @return string
     */
    public function convert_addon_initiate_conversion($username, $domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('username', 'domain'));
    }

    /**
     * @return string
     */
    public function convert_addon_list_addon_domains()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @return string
     */
    public function list_mysql_databases_and_users($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }


}