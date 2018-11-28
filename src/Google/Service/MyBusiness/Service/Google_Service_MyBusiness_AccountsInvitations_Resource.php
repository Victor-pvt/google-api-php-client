<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 13:22
 */

namespace AppBundle\GoogleMyBusiness\Service;

/**
 * The "invitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $invitations = $mybusinessService->invitations;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsInvitations_Resource extends Google_Service_Resource
{
    /**
     * Accepts the specified invitation. (invitations.accept)
     *
     * @param string $name The name of the invitation that is being accepted.
     * @param AcceptInvitationRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function accept($name, AcceptInvitationRequest $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('accept', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
    }

    /**
     * Declines the specified invitation. (invitations.decline)
     *
     * @param string $name The name of the account invitation that is being
     * declined.
     * @param DeclineInvitationRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function decline($name, DeclineInvitationRequest $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('decline', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
    }

    /**
     * Lists pending invitations for the specified account.
     * (invitations.listAccountsInvitations)
     *
     * @param string $parent The name of the account from which the list of
     * invitations is being retrieved.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string targetType Specifies which target types should appear in
     * the response.
     * @return Google_Service_MyBusiness_ListInvitationsResponse
     */
    public function listAccountsInvitations($parent, $optParams = array())
    {
        $params = array('parent' => $parent);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MyBusiness_ListInvitationsResponse");
    }
}