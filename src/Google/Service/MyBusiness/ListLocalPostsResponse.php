<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 20:51
 */
class Google_Service_MyBusiness_ListLocalPostsResponse extends Google_Collection
{
    protected $collection_key = 'localPosts';
    protected $internal_gapi_mappings = array(
    );
    protected $localPostsType = 'Google_Service_MyBusiness_LocalPost';
    protected $localPostsDataType = 'array';
    public $nextPageToken;


    public function setLocalPosts($localPosts)
    {
        $this->localPosts = $localPosts;
    }
    public function getLocalPosts()
    {
        return $this->localPosts;
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