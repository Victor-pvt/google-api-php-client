<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 13:16
 */

use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_MybusinessEmpty;
use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_GenerateAccountNumberRequest;
use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_Account;
use AppBundle\GoogleMyBusiness\Collection\Google_Service_MyBusiness_Notifications;
use AppBundle\GoogleMyBusiness\Collection\Google_Service_MyBusiness_ListAccountsResponse;

/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $accounts = $mybusinessService->accounts;
 *  </code>
 */
class Google_Service_MyBusiness_Accounts_Resource extends Google_Service_Resource
{
    /**
     * Clears the pubsub notification settings for the account.
     * (accounts.deleteNotifications)
     *
     * @param string $name The resource name for the notification settings to be
     * cleared.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function deleteNotifications($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('deleteNotifications', array($params), "\\AppBundle\\GoogleMyBusiness\\Model\\Google_Service_MyBusiness_MybusinessEmpty");
    }

    /**
     * Generates an account number for this account. The account number is not
     * provisioned when an account is created. Use this request to create an account
     * number when it is required. (accounts.generateAccountNumber)
     *
     * @param string $name The name of the account to generate an account number
     * for.
     * @param Google_Service_MyBusiness_GenerateAccountNumberRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Account
     */
    public function generateAccountNumber($name, Google_Service_MyBusiness_GenerateAccountNumberRequest $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('generateAccountNumber', array($params), "\\AppBundle\\GoogleMyBusiness\\Model\\Google_Service_MyBusiness_Account");
    }

    /**
     * Gets the specified account. Returns `NOT_FOUND` if the account does not exist
     * or if the caller does not have access rights to it. (accounts.get)
     *
     * @param string $name The name of the account to fetch.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Account
     */
    public function get($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "\\AppBundle\\GoogleMyBusiness\\Model\\Google_Service_MyBusiness_Account");
    }

    /**
     * Returns the pubsub notification settings for the account.
     * (accounts.getNotifications)
     *
     * @param string $name The notification settings resource name.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Notifications
     */
    public function getNotifications($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('getNotifications', array($params), "\\AppBundle\\GoogleMyBusiness\\Collection\\Google_Service_MyBusiness_Notifications");
    }

    /**
     * Lists all of the accounts for the authenticated user. This includes all
     * accounts that the user owns, as well as any accounts for which the user has
     * management rights. (accounts.listAccounts)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize How many accounts to fetch per page. Default is 500,
     * minimum is 2, and maximum page size is 500.
     * @opt_param string pageToken If specified, the next page of accounts is
     * retrieved. The `pageToken` is returned when a call to `accounts.list` returns
     * more results than can fit into the requested page size.
     * @opt_param string name The resource name of the account for which the list of
     * directly accessible accounts is to be retrieved. This only makes sense for
     * Organizations and User Groups. If empty, will return `ListAccounts` for the
     * authenticated user.
     * @opt_param string filter A filter constraining the accounts to return. The
     * response includes only entries that match the filter. If `filter` is empty,
     * then no constraints are applied and all accounts (paginated) are retrieved
     * for the requested account.
     *
     * For example, a request with the filter `type=USER_GROUP` will only return
     * user groups.
     * @return Google_Service_MyBusiness_ListAccountsResponse
     */
    public function listAccounts($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "\\AppBundle\\GoogleMyBusiness\\Collection\\Google_Service_MyBusiness_ListAccountsResponse");
    }

    /**
     * Updates the specified business account. Personal accounts cannot be updated
     * using this method. Note: The only editable field for an account is
     * `account_name`. Any other fields passed in (such as `type` or `role`) are
     * ignored. (accounts.update)
     *
     * @param string $name The name of the account to update.
     * @param Google_Service_MyBusiness_Account $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool validateOnly If true, the request is validated without
     * actually updating the account.
     * @return Google_Service_MyBusiness_Account
     */
    public function update($name, Google_Service_MyBusiness_Account $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "\\AppBundle\\GoogleMyBusiness\\Model\\Google_Service_MyBusiness_Account");
    }

    /**
     * Sets the pubsub notification settings for the account informing My Business
     * which topic to send pubsub notifications for:
     *
     * - New reviews for locations administered by the account. - Updated reviews
     * for locations administered by the account. - New `GoogleUpdates` for
     * locations administered by the account.
     *
     * An account will only have one notification settings resource, and only one
     * pubsub topic can be set. (accounts.updateNotifications)
     *
     * @param string $name The notification settings resource name.
     * @param Google_Service_MyBusiness_Notifications $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Notifications
     */
    public function updateNotifications($name, Google_Service_MyBusiness_Notifications $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('updateNotifications', array($params), "\\AppBundle\\GoogleMyBusiness\\Collection\\Google_Service_MyBusiness_Notifications");
    }
}
