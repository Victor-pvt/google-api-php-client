<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:15
 */

namespace AppBundle\GoogleMyBusiness\Collection;

use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_SpecialHourPeriod;

class Google_Service_MyBusiness_SpecialHours extends Google_Collection
{
    protected $collection_key = 'specialHourPeriods';
    protected $internal_gapi_mappings = [];
    protected $specialHourPeriodsType = 'Google_Service_MyBusiness_SpecialHourPeriod';
    protected $specialHourPeriodsDataType = 'array';


    public function setSpecialHourPeriods($specialHourPeriods)
    {
        $this->specialHourPeriods = $specialHourPeriods;
    }
    public function getSpecialHourPeriods()
    {
        return $this->specialHourPeriods;
    }
}