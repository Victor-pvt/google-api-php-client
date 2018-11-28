<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 21:00
 */
class Google_Service_MyBusiness_ListVerificationsResponse extends Google_Collection
{
    protected $collection_key = 'verifications';
    protected $internal_gapi_mappings = array(
    );
    public $nextPageToken;
    protected $verificationsType = 'Google_Service_MyBusiness_Verification';
    protected $verificationsDataType = 'array';


    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setVerifications($verifications)
    {
        $this->verifications = $verifications;
    }
    public function getVerifications()
    {
        return $this->verifications;
    }
}