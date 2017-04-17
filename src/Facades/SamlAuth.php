<?php
namespace Hungnguyen\Saml\Facades;
use Illuminate\Support\Facades\Facade;
class SamlAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SamlAuth';
    }
} 