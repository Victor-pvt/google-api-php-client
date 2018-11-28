<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 21:04
 */
class Google_Service_MyBusiness_SearchChainsResponse extends Google_Collection
{
    protected $collection_key = 'chains';
    protected $internal_gapi_mappings = array(
    );
    protected $chainsType = 'Google_Service_MyBusiness_Chain';
    protected $chainsDataType = 'array';


    public function setChains($chains)
    {
        $this->chains = $chains;
    }
    public function getChains()
    {
        return $this->chains;
    }
}