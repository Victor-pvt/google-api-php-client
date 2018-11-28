<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 20:49
 */
class Google_Service_MyBusiness_ListInvitationsResponse extends Google_Collection
{
    protected $collection_key = 'invitations';
    protected $internal_gapi_mappings = array(
    );
    protected $invitationsType = 'Google_Service_MyBusiness_Invitation';
    protected $invitationsDataType = 'array';


    public function setInvitations($invitations)
    {
        $this->invitations = $invitations;
    }
    public function getInvitations()
    {
        return $this->invitations;
    }
}