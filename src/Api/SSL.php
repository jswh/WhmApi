<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class SSL extends ApiBase {
     /**
     * @return string
     */
    public function fetch_ssl_vhosts()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function fetch_vhost_ssl_components()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[domain, crtdata]
     * @return string
     */
    public function fetchcrtinfo(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param array $params //[domain, crtdata]
     * @return string
     */
    public function fetchsslinfo(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $service
     * @return string
     */
    public function get_best_ssldomain_for_service($service)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('service'));
    }

    /**
     * @return string
     */
    public function generatessl()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $domain
     * @param string $crt
     * @param string $key
     * @param array $params //[cab, ip, enable_sni_for_mail]
     * @return string
     */
    public function installssl($domain, $crt, $key, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain', 'crt', 'key') + $params);
    }

    /**
     * @return string
     */
    public function is_sni_supported()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[registered, user]
     * @return string
     */
    public function listcrts(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function rebuildinstalledssldb()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function rebuildusersssldb()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}