<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class RestoreFunctions extends ApiBase {
     /**
     * @return string
     */
    public function restore_modules_summary()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_activate()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @param string $restore_point
     * @param array $params //[give_ip, mysql, subdomains, mail_config]
     * @return string
     */
    public function restore_queue_add_task($user, $restore_point, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'restore_point') + $params);
    }

    /**
     * @return string
     */
    public function restore_queue_clear_all_completed_tasks()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_clear_all_failed_tasks()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_clear_all_pending_tasks()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_clear_all_tasks()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @param integer $start_time
     * @return string
     */
    public function restore_queue_clear_completed_task($user, $start_time)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'start_time'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function restore_queue_clear_pending_task($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @return string
     */
    public function restore_queue_is_active()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_list_active()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_list_completed()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_list_pending()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function restore_queue_state()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @param string $type
     * @param array $params //[all, ip, mail, mysql, sub]
     * @return string
     */
    public function restoreaccount($user, $type, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'type') + $params);
    }


}