<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:36
 */

class Google_Service_MyBusiness_TimeRange extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $endTime;
    public $startTime;


    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
}