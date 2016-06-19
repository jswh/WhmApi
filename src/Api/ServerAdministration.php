<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class ServerAdministration extends ApiBase {
     /**
     * @param string $user
     * @param boolean $generate
     * @return string
     */
    public function accesshash($user, $generate)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'generate'));
    }

    /**
     * @param string $processes_to_kill
     * @param array $params //[trusted_users]
     * @return string
     */
    public function configurebackgroundprocesskiller($processes_to_kill, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('processes_to_kill') + $params);
    }

    /**
     * @param string $user
     * @param string $service
     * @param array $params //[locale, app]
     * @return string
     */
    public function create_user_session($user, $service, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'service') + $params);
    }

    /**
     * @return string
     */
    public function get_appconfig_application_list()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $password
     * @return string
     */
    public function get_password_strength($password)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('password'));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $host
     * @param array $params //[generate]
     * @return string
     */
    public function get_remote_access_hash($username, $password, $host, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('username', 'password', 'host') + $params);
    }

    /**
     * @return string
     */
    public function get_update_availability()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @return string
     */
    public function get_users_links($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $key
     * @return string
     */
    public function nvget($key)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('key'));
    }

    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    public function nvset($key, $value)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('key', 'value'));
    }

    /**
     * @param array $params //[force]
     * @return string
     */
    public function reboot(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $url
     * @return string
     */
    public function send_test_posturl($url)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('url'));
    }

    /**
     * @param string $access_token
     * @return string
     */
    public function send_test_pushbullet_note($access_token)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('access_token'));
    }

    /**
     * @param string $servername
     * @param array $params //[type]
     * @return string
     */
    public function set_primary_servername($servername, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('servername') + $params);
    }

    /**
     * @param string $key
     * @param array $params //[module, value]
     * @return string
     */
    public function set_tweaksetting($key, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('key') + $params);
    }

    /**
     * @param string $hostname
     * @return string
     */
    public function sethostname($hostname)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('hostname'));
    }

    /**
     * @param array $params //[default, bandmin, cpaddons, createacct, ftp, list, mysql, passwd, pop, postgres, sshkey, webdisk, virtual]
     * @return string
     */
    public function setminimumpasswordstrengths(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function verify_aim_access()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function verify_icq_access()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $username
     * @param string $password
     * @return string
     */
    public function verify_oscar_access($username, $password)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('username', 'password'));
    }

    /**
     * @return string
     */
    public function verify_posturl_access()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function verify_pushbullet_access()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }


}