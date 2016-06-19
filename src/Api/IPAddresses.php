<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class IPAddresses extends ApiBase {
     /**
     * @param string $ips
     * @param string $netmask
     * @param array $params //[excludes]
     * @return string
     */
    public function addips($ips, $netmask, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ips', 'netmask') + $params);
    }

    /**
     * @param string $ip
     * @param array $params //[netmask, skipifshutdown]
     * @return string
     */
    public function delip($ip, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ip') + $params);
    }

    /**
     * @param string $user
     * @return string
     */
    public function ipv6_disable_account($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @param string $range
     * @return string
     */
    public function ipv6_enable_account($user, $range)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'range'));
    }

    /**
     * @param string $range
     * @param string $name
     * @param array $params //[enabled]
     * @return string
     */
    public function ipv6_range_add($range, $name, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('range', 'name') + $params);
    }

    /**
     * @param string $name
     * @param string $new_name
     * @param string $note
     * @return string
     */
    public function ipv6_range_edit($name, $new_name, $note)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name', 'new_name', 'note'));
    }

    /**
     * @return string
     */
    public function ipv6_range_list()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $name
     * @return string
     */
    public function ipv6_range_remove($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @param string $name
     * @return string
     */
    public function ipv6_range_usage($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @return string
     */
    public function listips()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $ip
     * @return string
     */
    public function nat_checkip($ip)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ip'));
    }

    /**
     * @param string $local_ip
     * @param string $public_ip
     * @return string
     */
    public function nat_set_public_ip($local_ip, $public_ip)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('local_ip', 'public_ip'));
    }

    /**
     * @param string $ip
     * @param array $params //[user, domain]
     * @return string
     */
    public function setsiteip($ip, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ip') + $params);
    }


}