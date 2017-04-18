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

        $this->publishes([
            __DIR__.'/../Config/saml.php' => config_path('saml.php'),
        ]);
        if (config('saml.proxyVars', false)) {
            \OneLogin_Saml2_Utils::setProxyVars(true);
        }
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if(config('saml.useRoutes', false) == true ){
            include __DIR__.'/../routes.php';
        }
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

