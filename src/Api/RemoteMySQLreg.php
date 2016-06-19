<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class RemoteMySQLreg extends ApiBase {
     /**
     * @param string $name
     * @param string $mysql_host
     * @param string $mysql_user
     * @param string $mysql_pass
     * @param integer $mysql_port
     * @param array $params //[setup_via]
     * @return string
     */
    public function remote_mysql_create_profile($name, $mysql_host, $mysql_user, $mysql_pass, $mysql_port, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name', 'mysql_host', 'mysql_user', 'mysql_pass', 'mysql_port') + $params);
    }

    /**
     * @param string $name
     * @param string $user
     * @param string $host
     * @param integer $port
     * @param array $params //[password, sshkey_name, sshkey_passphrase, root_escalation_method, root_password]
     * @return string
     */
    public function remote_mysql_create_profile_via_ssh($name, $user, $host, $port, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name', 'user', 'host', 'port') + $params);
    }

    /**
     * @param string $name
     * @return string
     */
    public function remote_mysql_delete_profile($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @param string $name
     * @return string
     */
    public function remote_mysql_initiate_profile_activation($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @return string
     */
    public function remote_mysql_monitor_profile_activation()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $name
     * @return string
     */
    public function remote_mysql_read_profile($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @return string
     */
    public function remote_mysql_read_profiles()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $name
     * @param array $params //[mysql_host, mysql_user, mysql_pass, mysql_port, setup_via]
     * @return string
     */
    public function remote_mysql_update_profile($name, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name') + $params);
    }

    /**
     * @param string $name
     * @return string
     */
    public function remote_mysql_validate_profile($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @param string $password
     * @param array $params //[update_config]
     * @return string
     */
    public function set_local_mysql_root_password($password, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('password') + $params);
    }


}