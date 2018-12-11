<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:02
 */



class Google_Service_MyBusiness_BusinessHours extends Google_Collection
{
    protected $collection_key = 'periods';
    protected $internal_gapi_mappings = [];
    protected $periodsType = 'Google_Service_MyBusiness_TimePeriod';
    protected $periodsDataType = 'array';


    public function setPeriods(Google_Service_MyBusiness_TimePeriod $periods)
    {
        $this->periods = $periods;
    }
    public function getPeriods()
    {
        return $this->periods;
    }
}