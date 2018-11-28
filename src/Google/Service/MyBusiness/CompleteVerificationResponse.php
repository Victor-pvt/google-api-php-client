<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 20:59
 */
class Google_Service_MyBusiness_CompleteVerificationResponse extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $verificationType = 'Google_Service_MyBusiness_Verification';
    protected $verificationDataType = '';


    public function setVerification(Google_Service_MyBusiness_Verification $verification)
    {
        $this->verification = $verification;
    }
    public function getVerification()
    {
        return $this->verification;
    }
}