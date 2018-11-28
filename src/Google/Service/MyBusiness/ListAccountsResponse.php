<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 22.10.18
 * Time: 19:16
 */


class Google_Service_MyBusiness_ListAccountsResponse extends Google_Collection
{
    protected $collection_key = 'accounts';
    protected $internal_gapi_mappings = [];
    protected $accountsType = 'Google_Service_MyBusiness_Account';
    protected $accountsDataType = 'array';
    public $nextPageToken;


    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }
    public function getAccounts()
    {
        return $this->accounts;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
