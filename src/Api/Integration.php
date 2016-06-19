<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Integration extends ApiBase {
     /**
     * @param string $user
     * @param string $group_id
     * @param string $label
     * @param integer $order
     * @return string
     */
    public function create_integration_group($user, $group_id, $label, $order)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'group_id', 'label', 'order'));
    }

    /**
     * @param string $user
     * @param string $app
     * @param string $token
     * @param string $implements
     * @param string $label
     * @param string $subscriber_unique_id
     * @param array $params //[autologin_token_url, url, base64_png_image, order, group_id]
     * @return string
     */
    public function create_integration_link($user, $app, $token, $implements, $label, $subscriber_unique_id, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'app', 'token', 'implements', 'label', 'subscriber_unique_id') + $params);
    }

    /**
     * @param array $params //[userconfig, user, app, implements, label, autologin_token_url, url, base64_png_image, subscriber_unique_id]
     * @return string
     */
    public function get_integration_link_user_config(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $user
     * @return string
     */
    public function list_integration_groups($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @return string
     */
    public function list_integration_links()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @param string $group_id
     * @return string
     */
    public function remove_integration_group($user, $group_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'group_id'));
    }

    /**
     * @param string $user
     * @param string $app
     * @return string
     */
    public function remove_integration_link($user, $app)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'app'));
    }

    /**
     * @param string $user
     * @param string $app
     * @param string $token
     * @return string
     */
    public function update_integration_link_token($user, $app, $token)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'app', 'token'));
    }


}