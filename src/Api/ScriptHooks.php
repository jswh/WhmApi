<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class ScriptHooks extends ApiBase {
     /**
     * @param string $id
     * @return string
     */
    public function delete_hook($id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id'));
    }

    /**
     * @param string $id
     * @param Boolean $enabled
     * @param string $description
     * @param array $params //[notes]
     * @return string
     */
    public function edit_hook($id, $enabled, $description, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id', 'enabled', 'description') + $params);
    }

    /**
     * @param array $params //[categories, events, stage_order, stages, stage, actions, stage, blocking, description, event, exectype, hook, rollback, check, escalateprivs, weight, id, category, enabled, attributes, escalateprivs, blocking, description, event, category]
     * @return string
     */
    public function list_hooks(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $id
     * @return string
     */
    public function reorder_hooks($id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id'));
    }


}