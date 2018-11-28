<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:05
 */

namespace AppBundle\GoogleMyBusiness\Model;


class Google_Service_MyBusiness_RelationshipData extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $parentChain;


    public function setParentChain($parentChain)
    {
        $this->parentChain = $parentChain;
    }
    public function getParentChain()
    {
        return $this->parentChain;
    }
}