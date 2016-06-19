<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Services extends ApiBase {
     /**
     * @return string
     */
    public function background_mysql_upgrade_status()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $service
     * @param array $params //[enabled, monitored]
     * @return string
     */
    public function configureservice($service, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service') + $params);
    }

    /**
     * @return string
     */
    public function current_mysql_version()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function enable_monitor_all_enabled_services()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function fetch_service_ssl_components()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function installable_mysql_versions()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $service
     * @param string $crt
     * @param string $key
     * @param array $params //[cabundle]
     * @return string
     */
    public function install_service_ssl_certificate($service, $crt, $key, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service', 'crt', 'key') + $params);
    }

    /**
     * @return string
     */
    public function latest_available_mysql_version()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $service
     * @return string
     */
    public function reset_service_ssl_certificate($service)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service'));
    }

    /**
     * @param string $service
     * @return string
     */
    public function restartservice($service)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service'));
    }

    /**
     * @param array $params //[service]
     * @return string
     */
    public function servicestatus(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function start_background_mysql_upgrade()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}