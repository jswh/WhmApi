<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Market extends ApiBase {
     /**
     * @param string $name
     * @return string
     */
    public function disable_market_provider($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @param string $name
     * @return string
     */
    public function enable_market_provider($name)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name'));
    }

    /**
     * @return string
     */
    public function get_adjusted_market_providers_products()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_market_providers_commission_config()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_market_providers_list()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_market_providers_product_metadata()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function get_market_providers_products()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $provider
     * @param string $product_id
     * @param string $attribute
     * @param string $value
     * @return string
     */
    public function set_market_product_attribute($provider, $product_id, $attribute, $value)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('provider', 'product_id', 'attribute', 'value'));
    }

    /**
     * @param string $provider
     * @param string $commission_id
     * @return string
     */
    public function set_market_provider_commission_id($provider, $commission_id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('provider', 'commission_id'));
    }


}