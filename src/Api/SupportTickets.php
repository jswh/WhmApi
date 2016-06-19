<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class SupportTickets extends ApiBase {
     /**
     * @param integer $ticket_id
     * @param integer  $server_num
     * @param array $params //[ssh_username]
     * @return string
     */
    public function ticket_grant($ticket_id, $server_num, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ticket_id', 'server_num') + $params);
    }

    /**
     * @param integer $ticket_id
     * @param integer  $server_num
     * @param array $params //[ssh_username]
     * @return string
     */
    public function ticket_list($ticket_id, $server_num, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ticket_id', 'server_num') + $params);
    }

    /**
     * @param integer $ticket_id
     * @param integer  $server_num
     * @param string $ssh_username
     * @return string
     */
    public function ticket_revoke($ticket_id, $server_num, $ssh_username)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ticket_id', 'server_num', 'ssh_username'));
    }

    /**
     * @param integer $ticket_id
     * @param integer  $server_num
     * @return string
     */
    public function ticket_ssh_test($ticket_id, $server_num)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('ticket_id', 'server_num'));
    }


}