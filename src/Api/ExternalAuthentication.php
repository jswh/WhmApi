<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class ExternalAuthentication extends ApiBase {
     /**
     * @param string $service_name
     * @param string $provider_id
     * @return string
     */
    public function disable_authentication_provider($service_name, $provider_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service_name', 'provider_id'));
    }

    /**
     * @return string
     */
    public function disable_failing_authentication_providers()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $service_name
     * @param string $provider_id
     * @return string
     */
    public function enable_authentication_provider($service_name, $provider_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service_name', 'provider_id'));
    }

    /**
     * @param string $username
     * @param string $provider_id
     * @param string $subject_unique_identifier
     * @param string $preferred_username
     * @return string
     */
    public function link_user_authn_provider($username, $provider_id, $subject_unique_identifier, $preferred_username)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('username', 'provider_id', 'subject_unique_identifier', 'preferred_username'));
    }

    /**
     * @return string
     */
    public function get_available_authentication_providers()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $service_name
     * @param string $provider_id
     * @return string
     */
    public function get_provider_client_configurations($service_name, $provider_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service_name', 'provider_id'));
    }

    /**
     * @param string $service_name
     * @param string $provider_id
     * @return string
     */
    public function get_provider_configuration_fields($service_name, $provider_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service_name', 'provider_id'));
    }

    /**
     * @return string
     */
    public function get_users_authn_linked_accounts()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $service_name
     * @param string $provider_id
     * @param hash $configurations
     * @return string
     */
    public function set_provider_client_configurations($service_name, $provider_id, $configurations)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service_name', 'provider_id', 'configurations'));
    }

    /**
     * @param string $username
     * @param string $service_name
     * @param string $provider_id
     * @param string $subject_unique_identifier
     * @return string
     */
    public function unlink_user_authn_provider($username, $service_name, $provider_id, $subject_unique_identifier)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('username', 'service_name', 'provider_id', 'subject_unique_identifier'));
    }


}