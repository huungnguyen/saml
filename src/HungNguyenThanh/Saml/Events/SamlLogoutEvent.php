<?php
namespace HungNguyenThanh\Saml\Events;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class SamlLogoutEvent extends Event {
    use SerializesModels;

    public function __construct()
    {

    }
}