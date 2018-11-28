<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 19:26
 */




/**
 * The "categories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $categories = $mybusinessService->categories;
 *  </code>
 */
class Google_Service_MyBusiness_Categories_Resource extends Google_Service_Resource
{

    /**
     * Returns a list of business categories. Search will match the category name
     * but not the category ID.
     *
     * Note: Search only matches the front of a category name (that is, 'food' may
     * return 'Food Court' but not 'Fast Food Restaurant').
     * (categories.listCategories)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string regionCode The ISO 3166-1 alpha-2 country code.
     * @opt_param string languageCode The BCP 47 code of language. If the language
     * is not available, it will default to English.
     * @opt_param string searchTerm Optional filter string from user.
     * @opt_param int pageSize How many categories to fetch per page. Default is
     * 100, minimum is 1, and maximum page size is 100.
     * @opt_param string pageToken If specified, the next page of categories will be
     * fetched.
     * @return Google_Service_MyBusiness_ListBusinessCategoriesResponse
     */
    public function listCategories($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MyBusiness_ListBusinessCategoriesResponse");
    }
}
