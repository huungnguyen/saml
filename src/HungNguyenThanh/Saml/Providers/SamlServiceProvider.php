<?php
namespace HungNguyenThanh\Saml\Providers;

use Illuminate\Support\ServiceProvider;
use OneLogin_Saml2_Auth;
use URL;

class SamlServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/../routes.php';
        $this->app->singleton('HungNguyenThanh\Saml\SamlAuth', function ($app) {
            $config = config('saml');
            if (empty($config['sp']['entityId'])) {
                $config['sp']['entityId'] = URL::route('saml_metadata');
            }
            if (empty($config['sp']['assertionConsumerService']['url'])) {
                $config['sp']['assertionConsumerService']['url'] = URL::route('saml_acs');
            }
            if (!empty($config['sp']['singleLogoutService']) &&
                empty($config['sp']['singleLogoutService']['url'])) {
                $config['sp']['singleLogoutService']['url'] = URL::route('saml_sls');
            }
            $auth = new OneLogin_Saml2_Auth($config);
            return new \HungNguyenThanh\Saml\SamlAuth($auth);
        });
    }
}

