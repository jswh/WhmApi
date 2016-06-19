<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class DNS extends ApiBase {
     /**
     * @param string $domain
     * @param string $ip
     * @param array $params //[template, trueowner]
     * @return string
     */
    public function adddns($domain, $ip, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain', 'ip') + $params);
    }

    /**
     * @param string $domain
     * @param string $name
     * @param string $class
     * @param string $type
     * @param array $params //[ttl]
     * @return string
     */
    public function addzonerecord($domain, $name, $class, $type, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain', 'name', 'class', 'type') + $params);
    }

    /**
     * @param string $domain
     * @return string
     */
    public function dumpzone($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $domain
     * @param integer $line
     * @param string $name
     * @param string $class
     * @param integer $ttl
     * @param string $type
     * @return string
     */
    public function editzonerecord($domain, $line, $name, $class, $ttl, $type)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain', 'line', 'name', 'class', 'ttl', 'type'));
    }

    /**
     * @return string
     */
    public function get_nameserver_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $domain
     * @param integer $line
     * @return string
     */
    public function getzonerecord($domain, $line)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain', 'line'));
    }

    /**
     * @param string $domain
     * @return string
     */
    public function killdns($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $domain
     * @return string
     */
    public function listmxs($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @return string
     */
    public function listzones()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $host
     * @return string
     */
    public function lookupnsip($host)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('host'));
    }

    /**
     * @param string $zone
     * @param integer $line
     * @param array $params //[serialnum]
     * @return string
     */
    public function removezonerecord($zone, $line, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('zone', 'line') + $params);
    }

    /**
     * @param array $params //[domain, zone, user]
     * @return string
     */
    public function resetzone(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $domain
     * @return string
     */
    public function resolvedomainname($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $domain
     * @param string $name
     * @param string $exchange
     * @param integer $preference
     * @param array $params //[class, ttl, serialnum]
     * @return string
     */
    public function savemxs($domain, $name, $exchange, $preference, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain', 'name', 'exchange', 'preference') + $params);
    }

    /**
     * @param string $nameserver1
     * @param string $nameserver2
     * @param array $params //[nameserver3]
     * @return string
     */
    public function setresolvers($nameserver1, $nameserver2, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('nameserver1', 'nameserver2') + $params);
    }


}