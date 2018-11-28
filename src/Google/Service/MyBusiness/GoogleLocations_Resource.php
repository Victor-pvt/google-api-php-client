<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 19:27
 */


/**
 * The "googleLocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $googleLocations = $mybusinessService->googleLocations;
 *  </code>
 */
class Google_Service_MyBusiness_GoogleLocations_Resource extends Google_Service_Resource
{

    /**
     * Search all of the possible locations that are a match to the specified
     * request. (googleLocations.search)
     *
     * @param Google_Service_MyBusiness_SearchGoogleLocationsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_SearchGoogleLocationsResponse
     */
    public function search(Google_Service_MyBusiness_SearchGoogleLocationsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_MyBusiness_SearchGoogleLocationsResponse");
    }
}