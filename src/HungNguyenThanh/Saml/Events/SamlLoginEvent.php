<?php
namespace HungNguyenThanh\Saml\Events;
use HungNguyenThanh\Saml\SamlUser;

class SamlLoginEvent{
    protected $user;
    function __construct(SamlUser $user)
    {
        $this->user = $user;
    }
    public function getSamlUser()
    {
        return $this->user;
    }
}