<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:34
 */

namespace AppBundle\GoogleMyBusiness\Model;

use Google_Model;
class Google_Service_MyBusiness_VerifyLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $addressInputType = 'Google_Service_MyBusiness_AddressInput';
    protected $addressInputDataType = '';
    protected $emailInputType = 'Google_Service_MyBusiness_EmailInput';
    protected $emailInputDataType = '';
    public $languageCode;
    public $method;
    protected $phoneInputType = 'Google_Service_MyBusiness_PhoneInput';
    protected $phoneInputDataType = '';


    public function setAddressInput(Google_Service_MyBusiness_AddressInput $addressInput)
    {
        $this->addressInput = $addressInput;
    }
    public function getAddressInput()
    {
        return $this->addressInput;
    }
    public function setEmailInput(Google_Service_MyBusiness_EmailInput $emailInput)
    {
        $this->emailInput = $emailInput;
    }
    public function getEmailInput()
    {
        return $this->emailInput;
    }
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }
    public function getLanguageCode()
    {
        return $this->languageCode;
    }
    public function setMethod($method)
    {
        $this->method = $method;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function setPhoneInput(Google_Service_MyBusiness_PhoneInput $phoneInput)
    {
        $this->phoneInput = $phoneInput;
    }
    public function getPhoneInput()
    {
        return $this->phoneInput;
    }
}