<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 19:26
 */




/**
 * The "chains" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $chains = $mybusinessService->chains;
 *  </code>
 */
class Google_Service_MyBusiness_Chains_Resource extends Google_Service_Resource
{

    /**
     * Gets the specified chain. Returns `NOT_FOUND` if the chain does not exist.
     * (chains.get)
     *
     * @param string $name The chain's resource name, in the format
     * `chains/{chain_place_id}`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Chain
     */
    public function get($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_MyBusiness_Chain");
    }

    /**
     * Searches the chain based on chain name. (chains.search)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string chainDisplayName Search for a chain by its name.
     * Exact/partial/fuzzy/related queries are supported. Examples: "walmart", "wal-
     * mart", "walmmmart", "沃尔玛"
     * @opt_param int resultCount The maximum number of matched chains to return
     * from this query. The default is 10. The maximum possible value is 500.
     * @return Google_Service_MyBusiness_SearchChainsResponse
     */
    public function search($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_MyBusiness_SearchChainsResponse");
    }
}