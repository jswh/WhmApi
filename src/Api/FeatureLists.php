<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class FeatureLists extends ApiBase {
     /**
     * @param string $user
     * @param hash $features
     * @param Boolean $feature_name
     * @return string
     */
    public function add_override_features_for_user($user, $features, $feature_name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'features', 'feature_name'));
    }

    /**
     * @param string $featurelist
     * @param array $params //[feature name, overwrite]
     * @return string
     */
    public function create_featurelist($featurelist, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('featurelist') + $params);
    }

    /**
     * @param string $featurelist
     * @return string
     */
    public function delete_featurelist($featurelist)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('featurelist'));
    }

    /**
     * @return string
     */
    public function get_available_featurelists()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_feature_metadata()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_feature_names()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_featurelist_data()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function getfeaturelist()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param  string  $action
     * @param array $params //[features]
     * @return string
     */
    public function manage_features($action, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('action') + $params);
    }

    /**
     * @param string $
     * @return string
     */
    public function read_featurelist($available_featurelists)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('available_featurelists'));
    }

    /**
     * @param string $user
     * @param array $features
     * @return string
     */
    public function remove_override_features_for_user($user, $features)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'features'));
    }

    /**
     * @param string $featurelist
     * @param array $params //[feature name]
     * @return string
     */
    public function update_featurelist($featurelist, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('featurelist') + $params);
    }

    /**
     * @param string $user
     * @param string $feature
     * @return string
     */
    public function verify_user_has_feature($user, $feature)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'feature'));
    }


}