<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Mail extends ApiBase {
     /**
     * @param array $params //[nosize, defer, failure, inprogress, deliverytype, max_results_by_type]
     * @return string
     */
    public function emailtrack_search(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param array $params //[records, starttime, endtime, deliverytype, nosuccess, nosize]
     * @return string
     */
    public function emailtrack_stats(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param array $params //[records, starttime, endtime, deliverytype]
     * @return string
     */
    public function emailtrack_user_stats(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function fetch_mail_queue()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $account
     * @param Boolean $use_ssl
     * @return string
     */
    public function generate_mobileconfig($account, $use_ssl)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('account', 'use_ssl'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function get_user_email_forward_destination($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function hold_outgoing_email($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function list_pops_for($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function release_outgoing_email($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param array $params //[allowedips, maxconnperchild, maxchildren, pidfile, timeouttcp, timeoutchild]
     * @return string
     */
    public function save_spamd_config(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $user
     * @param string $forward_to
     * @return string
     */
    public function set_user_email_forward_destination($user, $forward_to)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'forward_to'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function suspend_outgoing_email($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function unsuspend_outgoing_email($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }


}