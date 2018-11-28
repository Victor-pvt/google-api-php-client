<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:04
 */


class Google_Service_MyBusiness_TimePeriod extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $closeDay;
    public $closeTime;
    public $openDay;
    public $openTime;


    public function setCloseDay($closeDay)
    {
        $this->closeDay = $closeDay;
    }
    public function getCloseDay()
    {
        return $this->closeDay;
    }
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }
    public function getCloseTime()
    {
        return $this->closeTime;
    }
    public function setOpenDay($openDay)
    {
        $this->openDay = $openDay;
    }
    public function getOpenDay()
    {
        return $this->openDay;
    }
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;
    }
    public function getOpenTime()
    {
        return $this->openTime;
    }
}