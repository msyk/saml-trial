<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['https://idp.inter-mediator.com/simplesaml/saml2/idp/metadata.php'] = [
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://idp.inter-mediator.com/simplesaml/saml2/idp/metadata.php',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.inter-mediator.com/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.inter-mediator.com/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'certData' => 'MIIDYTCCAkmgAwIBAgIUIm2IZztyTai4t97+gHBfgyBEG9wwDQYJKoZIhvcNAQELBQAwQDELMAkGA1UEBhMCSlAxEDAOBgNVBAgMB1NBSVRBTUExHzAdBgNVBAMMFmlkcC5pbnRlci1tZWRpYXRvci5jb20wHhcNMjEwNTAyMDEzMTAyWhcNMzEwNTAyMDEzMTAyWjBAMQswCQYDVQQGEwJKUDEQMA4GA1UECAwHU0FJVEFNQTEfMB0GA1UEAwwWaWRwLmludGVyLW1lZGlhdG9yLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAOl+/7ylZOi8CoT6St4CjZLGDcz17+MEfQZ6tPc/TxABs6ORRslpyGzrG67dMLlxMqWzRyjLxI06nm+IazcluB5awDgnGyNztBx+aZ636MrBeF4FRkg6wskHEhxsuMOB6Y+FsYnoGlkAfCFKn3apfig17//6R2n7o6sl43nKGOXXes4Jo4T7qt6kcINJSIJAb4TI5oNsvh3xiWp9tRX4q5f34XdzNv7DGAuZplhUQ7WaKeK6M3efbqJb096TzlpFrTVYBWT6ScO2U1b1vHINZNjdjwkTuqOUxs2lFSyVXGR0GDax6FYQvGPUbNb41W6q2yh5e53QSUi97yysgDAL6LkCAwEAAaNTMFEwHQYDVR0OBBYEFAkwqyur2Ig8MGUMePtRz528rx6EMB8GA1UdIwQYMBaAFAkwqyur2Ig8MGUMePtRz528rx6EMA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAJPC8XJSUl0aoq3f2EZ5cJxZ648lBDsxNn21oDifxjg00sHPbFIJc8S8/xACHfJiAVAlvLA82pBBMP2MTMOAnazY3eIw1zeZbY22WI0KeVqfsqE0/9BnKstqwnpbYbsPkuUss7B4+9DEeoCH5HFanCNT2mdR5LjVFNPugbeEMjT06BYmD8z0Zbe2KWY1tR4G0RY+wx/1E+xupvyCM2rCbiHxjd4hqRet4u9kt3ifKM2v5uh4akQUJEW1x4ox8sNb6Lipp3GUlV0oBapWaPC+sgHZueZYAZBXjaqEZI7oM6faDK4+3p0n9mxv07sP9lOn7aSjWrcoZ0cp/1EbfO1Q6F8=',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'contacts' => [
        [
            'emailAddress' => 'nii@msyk.net',
            'contactType' => 'technical',
            'givenName' => 'Administrator',
        ],
    ],
];