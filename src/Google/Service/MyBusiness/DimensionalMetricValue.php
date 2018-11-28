<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:34
 */



class Google_Service_MyBusiness_DimensionalMetricValue extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $metricOption;
    protected $timeDimensionType = 'Google_Service_MyBusiness_TimeDimension';
    protected $timeDimensionDataType = '';
    public $value;


    public function setMetricOption($metricOption)
    {
        $this->metricOption = $metricOption;
    }
    public function getMetricOption()
    {
        return $this->metricOption;
    }
    public function setTimeDimension(Google_Service_MyBusiness_TimeDimension $timeDimension)
    {
        $this->timeDimension = $timeDimension;
    }
    public function getTimeDimension()
    {
        return $this->timeDimension;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}