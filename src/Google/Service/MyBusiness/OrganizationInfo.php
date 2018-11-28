<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 26.11.18
 * Time: 22:04
 */


class Google_Service_MyBusiness_OrganizationInfo extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $phoneNumber;
    protected $postalAddressType = 'Google_Service_MyBusiness_PostalAddress';
    protected $postalAddressDataType = '';
    public $registeredDomain;


    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    public function setPostalAddress(Google_Service_MyBusiness_PostalAddress $postalAddress)
    {
        $this->postalAddress = $postalAddress;
    }
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }
    public function setRegisteredDomain($registeredDomain)
    {
        $this->registeredDomain = $registeredDomain;
    }
    public function getRegisteredDomain()
    {
        return $this->registeredDomain;
    }
}