<?php
namespace HungNguyenThanh\Saml\Facades;
use Illuminate\Support\Facades\Facade;
class Auth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'HungNguyenThanh\Saml\SamlAuth';
    }
} 