<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:35
 */

class Google_Service_MyBusiness_TimeOfDay extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $hours;
    public $minutes;
    public $nanos;
    public $seconds;


    public function setHours($hours)
    {
        $this->hours = $hours;
    }
    public function getHours()
    {
        return $this->hours;
    }
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }
    public function getMinutes()
    {
        return $this->minutes;
    }
    public function setNanos($nanos)
    {
        $this->nanos = $nanos;
    }
    public function getNanos()
    {
        return $this->nanos;
    }
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }
    public function getSeconds()
    {
        return $this->seconds;
    }
}