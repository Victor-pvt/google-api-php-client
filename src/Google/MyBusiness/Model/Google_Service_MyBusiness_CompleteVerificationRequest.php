<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:44
 */

namespace AppBundle\GoogleMyBusiness\Model;

use Google_Model;
class Google_Service_MyBusiness_CompleteVerificationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $pin;


    public function setPin($pin)
    {
        $this->pin = $pin;
    }
    public function getPin()
    {
        return $this->pin;
    }
}