<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class RPMs extends ApiBase {
     /**
     * @param string $section
     * @param string $key
     * @param string $value
     * @return string
     */
    public function delete_rpm_version($section, $key, $value)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('section', 'key', 'value'));
    }

    /**
     * @param string $section
     * @param string $key
     * @param string $value
     * @return string
     */
    public function edit_rpm_version($section, $key, $value)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('section', 'key', 'value'));
    }

    /**
     * @param string $section
     * @param array $params //[key]
     * @return string
     */
    public function get_rpm_version_data($section, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('section') + $params);
    }

    /**
     * @param array $params //[target]
     * @return string
     */
    public function list_rpms(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}