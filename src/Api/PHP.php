<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class PHP extends ApiBase {
     /**
     * @param array $params //[version]
     * @return string
     */
    public function php_get_handlers(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function php_get_installed_versions()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function php_get_system_default_version()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function php_get_vhost_versions()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $version
     * @return string
     */
    public function php_ini_get_content($version)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('version'));
    }

    /**
     * @param string $version
     * @return string
     */
    public function php_ini_get_directives($version)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('version'));
    }

    /**
     * @param string $content
     * @param string $version
     * @return string
     */
    public function php_ini_set_content($content, $version)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('content', 'version'));
    }

    /**
     * @param string $directive
     * @param string $version
     * @return string
     */
    public function php_ini_set_directives($directive, $version)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('directive', 'version'));
    }

    /**
     * @param string $version
     * @param string $handler
     * @return string
     */
    public function php_set_handler($version, $handler)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('version', 'handler'));
    }

    /**
     * @param string $version
     * @return string
     */
    public function php_set_system_default_version($version)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('version'));
    }

    /**
     * @param string $vhost
     * @param string $version
     * @return string
     */
    public function php_set_vhost_versions($vhost, $version)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('vhost', 'version'));
    }


}