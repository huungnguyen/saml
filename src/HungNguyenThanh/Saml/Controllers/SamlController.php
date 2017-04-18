<?php
namespace HungNguyenThanh\Saml\Controllers;
use HungNguyenThanh\Saml\Events\SamlLoginEvent;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SamlController extends Controller
{
    protected $samlAuth;

    function __construct(\HungNguyenThanh\Saml\SamlAuth $samlAuth)
    {
        $this->samlAuth = $samlAuth;
    }
    /**
     * Generate local sp metadata
     * @return \Illuminate\Http\Response
     */
    public function metadata()
    {
        $metadata = $this->samlAuth->getMetadata();
        return response($metadata, 200, ['Content-Type' => 'text/xml']);
    }
    /**
     * Process an incoming saml2 assertion request.
     * Fires 'Saml2LoginEvent' event if a valid user is Found
     */
    public function acs(Request $request)
    {
        $errors = $this->samlAuth->acs();
        if (!empty($errors)) {
            logger()->error('Saml2 error_detail', ['error' => $this->samlAuth->getLastErrorReason()]);
            logger()->error('Saml2 error', $errors);
            return redirect(config('saml.errorRoute'));
        }
        $user = $this->samlAuth->getSamlUser();
        event(new SamlLoginEvent($user));
        $redirectUrl = $user->getIntendedUrl();
        if ($redirectUrl !== null) {
            return redirect($redirectUrl);
        } else {
            return redirect(config('saml.loginRoute'));
        }
    }
    /**
     * Process an incoming saml2 logout request.
     * Fires 'saml2.logoutRequestReceived' event if its valid.
     * This means the user logged out of the SSO infrastructure, you 'should' log him out locally too.
     */
    public function sls()
    {
        $error = $this->samlAuth->sls(config('saml.retrieveParametersFromServer'));
        if (!empty($error)) {
            throw new \Exception("Could not log out");
        }
        return redirect(config('saml.logoutRoute')); //may be set a configurable default
    }
    /**
     * This initiates a logout request across all the SSO infrastructure.
     */
    public function logout(Request $request)
    {
        $returnTo = $request->query('returnTo');
        $sessionIndex = $request->query('sessionIndex');
        $nameId = $request->query('nameId');
        $this->samlAuth->logout($returnTo, $nameId, $sessionIndex); //will actually end up in the sls endpoint
        //does not return
    }
    /**
     * This initiates a login request
     */
    public function login()
    {
        $this->samlAuth->login(config('saml.loginRoute'));
    }
}