<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 19:25
 */



/**
 * The "verifications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $verifications = $mybusinessService->verifications;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsVerifications_Resource extends Google_Service_Resource
{

    /**
     * Completes a `PENDING` verification.
     *
     * It is only necessary for non `AUTO` verification methods. `AUTO` verification
     * request is instantly `VERIFIED` upon creation. (verifications.complete)
     *
     * @param string $name Resource name of the verification to complete.
     * @param Google_Service_MyBusiness_CompleteVerificationRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_CompleteVerificationResponse
     */
    public function complete($name, Google_Service_MyBusiness_CompleteVerificationRequest $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('complete', array($params), "Google_Service_MyBusiness_CompleteVerificationResponse");
    }

    /**
     * List verifications of a location, ordered by create time.
     * (verifications.listAccountsLocationsVerifications)
     *
     * @param string $parent Resource name of the location that verification
     * requests belong to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize How many verification to include per page. If not
     * set, return all.
     * @opt_param string pageToken If specified, returns the next page of
     * verifications.
     * @return Google_Service_MyBusiness_ListVerificationsResponse
     */
    public function listAccountsLocationsVerifications($parent, $optParams = array())
    {
        $params = array('parent' => $parent);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MyBusiness_ListVerificationsResponse");
    }
}