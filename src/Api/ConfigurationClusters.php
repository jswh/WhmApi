<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class ConfigurationClusters extends ApiBase {
     /**
     * @param string $name
     * @param string $user
     * @param string $key
     * @return string
     */
    public function add_configclusterserver($name, $user, $key)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name', 'user', 'key'));
    }

    /**
     * @param string $name
     * @return string
     */
    public function delete_configclusterserver($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @return string
     */
    public function list_configclusterservers()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $name
     * @param array $params //[user, key]
     * @return string
     */
    public function update_configclusterserver($name, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name') + $params);
    }


}