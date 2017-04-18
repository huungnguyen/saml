<?php

//This is variable is an example - Just make sure that the urls in the 'idp' config are ok.

return $settings = array(
    'useRoutes' => true,

    'routesPrefix' => '/saml',

    'routesMiddleware' => ['web'],

    'retrieveParametersFromServer' => false,

    'logoutRoute' => '/',

    'loginRoute' => '/',

    'errorRoute' => '/',

    'strict' => true,

    'debug' => false,

    'proxyVars' => false,

    // Service Provider Data that we are deploying
    'sp' => array(

        'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',

        'x509cert' => 'MIIDFjCCAn+gAwIBAgIBADANBgkqhkiG9w0BAQ0FADCBpjELMAkGA1UEBhMCdm4x
DzANBgNVBAgMBkhhIE5vaTEQMA4GA1UECgwHU290YXRlazEiMCAGA1UEAwwZaHR0
cHM6Ly83NGU2MzJhMi5uZ3Jvay5pbzEQMA4GA1UEBwwHTXkgRGluaDEQMA4GA1UE
CwwHU290YXRlazEsMCoGCSqGSIb3DQEJARYdaHV1bmduZ3V5ZW4udnAuMTk5NUBn
bWFpbC5jb20wIBcNMTcwNDE0MDQ0NzA5WhgPMzAxNjA4MTUwNDQ3MDlaMIGmMQsw
CQYDVQQGEwJ2bjEPMA0GA1UECAwGSGEgTm9pMRAwDgYDVQQKDAdTb3RhdGVrMSIw
IAYDVQQDDBlodHRwczovLzc0ZTYzMmEyLm5ncm9rLmlvMRAwDgYDVQQHDAdNeSBE
aW5oMRAwDgYDVQQLDAdTb3RhdGVrMSwwKgYJKoZIhvcNAQkBFh1odXVuZ25ndXll
bi52cC4xOTk1QGdtYWlsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEA
6bqL6x/Ymd+LSAsY4maGfZtNbPmyEsC+VH00tohOujsb8lOul0sBK8pEXFts9tJk
eJfD3AfShmdWe3yEG7p3YM9O0WGB8PT5J9KyidNvmBiDo/wNoXzumfqsGEVp+ZFQ
omGM2xADjJJRE2RvPNKxFUonskLlNQes1Z/EhltFXJ8CAwEAAaNQME4wHQYDVR0O
BBYEFKwPVjRXulKZ3f4O/l7JxkKTeOodMB8GA1UdIwQYMBaAFKwPVjRXulKZ3f4O
/l7JxkKTeOodMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQENBQADgYEAtVOinpUa
vMOD01J2qgDhHTmC4XIFB0kp2trDHdwsOOOP3zw0LMXyKxQL3ACx7NMbQEzOzsFJ
QHz+ALBouEi4oXoev4mfIqQl+OyagvTAK7rHtGsi0TPgS/UWariwwnPZJpECRPLw
dwSv7tr4EIPZ/xbzBLHz4+gaWKNlDBDhKmQ=',

        'privateKey' => 'MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAOm6i+sf2Jnfi0gL
GOJmhn2bTWz5shLAvlR9NLaITro7G/JTrpdLASvKRFxbbPbSZHiXw9wH0oZnVnt8
hBu6d2DPTtFhgfD0+SfSsonTb5gYg6P8DaF87pn6rBhFafmRUKJhjNsQA4ySURNk
bzzSsRVKJ7JC5TUHrNWfxIZbRVyfAgMBAAECgYBiyOBoMN6IMm4Yte//iFuhbOkt
fN9hg6st5HlKCJRVq7PlGK867I2DJ4r7Cf0k2Ml0GpjCP2AgRD7OFFN1sLrRFift
Mu9z/WX+0yBjP3gj0zP26kJWLvIDRUqvsXV1Tij7e9t2n2A46fBBwe98jssLsX8Z
ZyHD2DiONRu6f/ZIuQJBAPUUmbp/XJu2mIGCv85WkKWohA4fb/xZW0GWUmNDVu+a
VbEBRWgrbiS8J6oSo40odfGyzEkeITk7pVrsKdu5IjUCQQD0JHeZu3O+V5ovUj2a
tQQzk5Rlzw+/QwiWqt5T5LZ4EGVby29BeDzL5Zut7b46h6XDjEzw51B9q7cr3TLY
sN4DAkBf1JBP5mE12e5EJfYOHrcsr3oDc7N8Pwx51uecPMaPpg9/yPl0xBarco8n
52XgWkPUII/Uv11KXdJIfTPY4MlJAkEA1I5TWpLrSFK4uG5fmCv1Rno8fw7xZNGV
zqdg/aVof8u2k17gtB1cwSBck+ci8Y5b8Y5bBno9h8xSo2vn8uS5xQJAXnSWT2Y7
n80aXOyvYDOaWcGsE7G4lX21PqvjDSEFqQ6DEUXgRfgRYEkbkVYCkA9/4iutUPni
MJQpoQ3KTQPJtw==',

        'entityId' => 'https://23a289ae.ngrok.io',

        'assertionConsumerService' => array(

            'url' => 'https://23a289ae.ngrok.io/saml/acs',
        ),

        'singleLogoutService' => array(

            'url' => 'https://23a289ae.ngrok.io/saml/sls',
        ),
    ),

    // Identity Provider Data that we want connect with our SP
    'idp' => array(

        'entityId' => 'https://accounts.google.com/o/saml2?idpid=C03q9hsnl',

        'singleSignOnService' => array(

            'url' => 'https://accounts.google.com/o/saml2/idp?idpid=C03q9hsnl',
        ),

        'singleLogoutService' => array(

            'url' => '',
        ),

        'x509cert' => 'MIIDdDCCAlygAwIBAgIGAVtXWhD5MA0GCSqGSIb3DQEBCwUAMHsxFDASBgNVBAoTC0dvb2dsZSBJbmMuMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MQ8wDQYDVQQDEwZHb29nbGUxGDAWBgNVBAsTD0dvb2dsZSBGb3IgV29yazELMAkGA1UEBhMCVVMxEzARBgNVBAgTCkNhbGlmb3JuaWEwHhcNMTcwNDEwMTAxMjQ5WhcNMjIwNDA5MTAxMjQ5WjB7MRQwEgYDVQQKEwtHb29nbGUgSW5jLjEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEPMA0GA1UEAxMGR29vZ2xlMRgwFgYDVQQLEw9Hb29nbGUgRm9yIFdvcmsxCzAJBgNVBAYTAlVTMRMwEQYDVQQIEwpDYWxpZm9ybmlhMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgaliUJsdqA2Br2/Qbz5pfB4VSo7pRIeM0qlvNT0ckT6RMw84Zt3DaCsUJclzgIsi3TCG2xhQw/WC19MCNOhvXr7SgsHu9FSoSM0K+hCG/XzooaaXE/jybgXKuERr7VIgCqq6DfZPAIYaxAQmH7dVFX6YdCThDcwN5qgUdtmGVJyT5HOfA8altAthxZ+uxe58X8KozpFFEYSNsrGNW+Je29mWHjwnLIWb6a9S3d7o74OtvR0NNiiFtZ20ZHmonXq8v5xpqQ/eHMLIN9es6nvrk6/Qphhk+S4nEcRLS+WZPynmdXDJAuq83cbg/KuCyoDSpuvG8e+sbERY8tvsnXmdsQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQBD24dnc7Pt6ulELsnNh1IWYQM0rQD20jd+P8P+1Qcljx6B4NJVEEtv8sABylUgITEB3wn4BGln523Go0VNG2CADoR71UrsP4xQEUkcipvCTE0eRVJ0J/FGabid9y1G9T2CDC2V6JY0C69dVxG3fOJgtI8ii6He3XsKYcccw11KvC/AE+Ek24aeR1PZnhvgrepMxQgXtm6nqwZkt2kufSiqdaLg1zmgebHk3UKasCN6b/fJ9o8eb+DRdlIqlkE2fsuW84apK1Qa5ozeBZOw60tlnk8KggWzYLzR4JqGlfA/g8i4Dtjh4sbKxqCO8nLXZ/kWfaBWmVVNfdOKX2tSfCrD',

    ),

    // Security settings
    'security' => array(

        'nameIdEncrypted' => false,

        'authnRequestsSigned' => false,

        'logoutRequestSigned' => false,

        'logoutResponseSigned' => false,

        'signMetadata' => false,


        /** signatures and encryptions required **/

        'wantMessagesSigned' => false,

        'wantAssertionsSigned' => false,

        'wantNameIdEncrypted' => false,

        'requestedAuthnContext' => true,
    ),

    'contactPerson' => array(
        'technical' => array(
            'givenName' => 'name',
            'emailAddress' => 'no@reply.com'
        ),
        'support' => array(
            'givenName' => 'Support',
            'emailAddress' => 'no@reply.com'
        ),
    ),

    'organization' => array(
        'en-US' => array(
            'name' => 'Name',
            'displayname' => 'Display Name',
            'url' => 'http://url'
        ),
    ),

);