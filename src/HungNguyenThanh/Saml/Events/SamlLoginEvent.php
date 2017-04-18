<?php
namespace HungNguyenThanh\Saml\Events;
class SamlLoginEvent {
    protected $user;
    function __construct($user)
    {
        $this->user = $user;
    }
    public function getSamlUser()
    {
        return $this->user;
    }
}