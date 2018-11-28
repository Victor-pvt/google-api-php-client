<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:27
 */

namespace AppBundle\GoogleMyBusiness\Model;

use Google_Model;
class Google_Service_MyBusiness_FetchVerificationOptionsRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $languageCode;


    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }
    public function getLanguageCode()
    {
        return $this->languageCode;
    }
}