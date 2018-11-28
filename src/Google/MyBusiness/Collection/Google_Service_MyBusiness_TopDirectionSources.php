<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:29
 */

namespace AppBundle\GoogleMyBusiness\Collection;

use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_RegionCount;

class Google_Service_MyBusiness_TopDirectionSources extends Google_Collection
{
    protected $collection_key = 'regionCounts';
    protected $internal_gapi_mappings = array(
    );
    public $dayCount;
    protected $regionCountsType = 'Google_Service_MyBusiness_RegionCount';
    protected $regionCountsDataType = 'array';


    public function setDayCount($dayCount)
    {
        $this->dayCount = $dayCount;
    }
    public function getDayCount()
    {
        return $this->dayCount;
    }
    public function setRegionCounts($regionCounts)
    {
        $this->regionCounts = $regionCounts;
    }
    public function getRegionCounts()
    {
        return $this->regionCounts;
    }
}