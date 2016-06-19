<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Transfers extends ApiBase {
     /**
     * @param string $transfer_session_id
     * @return string
     */
    public function abort_transfer_session($transfer_session_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id'));
    }

    /**
     * @param string $transfer_session_id
     * @return string
     */
    public function analyze_transfer_session_remote($transfer_session_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id'));
    }

    /**
     * @return string
     */
    public function available_transfer_modules()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $host
     * @param integer $port
     * @param string $user
     * @param integer $transfer_threads
     * @param string $restore_threads
     * @param Boolean $unrestricted_restore
     * @param Boolean $copy_reseller_privs
     * @param Boolean $compressed
     * @param Boolean $unencrypted
     * @param Boolean
 $use_backups
     * @param Boolean $low_priority
     * @param Boolean $enable_custom_pkgacct
     * @param array $params //[password, root_escalation_method, root_password, sshkey_name, sshkey_passphrase, sphera_user, sphera_password, sphera_host]
     * @return string
     */
    public function create_remote_root_transfer_session($host, $port, $user, $transfer_threads, $restore_threads, $unrestricted_restore, $copy_reseller_privs, $compressed, $unencrypted, $use_backups, $low_priority, $enable_custom_pkgacct, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('host', 'port', 'user', 'transfer_threads', 'restore_threads', 'unrestricted_restore', 'copy_reseller_privs', 'compressed', 'unencrypted', 'use_backups', 'low_priority', 'enable_custom_pkgacct') + $params);
    }

    /**
     * @param string $host
     * @param string $password
     * @param Boolean $unrestricted_restore
     * @param array $params //[permit_ftp_fallback]
     * @return string
     */
    public function create_remote_user_transfer_session($host, $password, $unrestricted_restore, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('host', 'password', 'unrestricted_restore') + $params);
    }

    /**
     * @param string $transfer_session_id
     * @param string $module
     * @param array $params //[size]
     * @return string
     */
    public function enqueue_transfer_item($transfer_session_id, $module, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id', 'module') + $params);
    }

    /**
     * @param hash
  $transfer_session_id
     * @param string $logfile
     * @return string
     */
    public function fetch_transfer_session_log($transfer_session_id, $logfile)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id', 'logfile'));
    }

    /**
     * @param string $transfer_session_id
     * @return string
     */
    public function get_transfer_session_state($transfer_session_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id'));
    }

    /**
     * @param string $transfer_session_id
     * @return string
     */
    public function pause_transfer_session($transfer_session_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id'));
    }

    /**
     * @param string $host
     * @param integer $port
     * @param string $user
     * @param array $params //[password, root_escalation_method, root_password, ssh_key, sshkey_passphrase]
     * @return string
     */
    public function remote_basic_credential_check($host, $port, $user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('host', 'port', 'user') + $params);
    }

    /**
     * @param string $transfer_session_id
     * @return string
     */
    public function retrieve_transfer_session_remote_analysis($transfer_session_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id'));
    }

    /**
     * @param string $user
     * @param array $params //[skiphomedir, use_backups, serialized_output, tarroot, compressionsetting, mysqlver, skipacctdb, skipbwdata, low_priority, split]
     * @return string
     */
    public function start_background_pkgacct($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $transfer_session_id
     * @return string
     */
    public function start_transfer_session($transfer_session_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('transfer_session_id'));
    }

    /**
     * @param string $module
     * @return string
     */
    public function transfer_module_schema($module)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('module'));
    }

    /**
     * @param string
  $user
     * @return string
     */
    public function validate_system_user($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }


}