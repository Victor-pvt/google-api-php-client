<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 21:01
 */
class Google_Service_MyBusiness_ListAttributeMetadataResponse extends Google_Collection
{
    protected $collection_key = 'attributes';
    protected $internal_gapi_mappings = array(
    );
    protected $attributesType = 'Google_Service_MyBusiness_AttributeMetadata';
    protected $attributesDataType = 'array';
    public $nextPageToken;


    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
    public function getAttributes()
    {
        return $this->attributes;
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