<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['http://192.168.33.99/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://192.168.33.99/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://192.168.33.99/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://192.168.33.99/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIDhTCCAm2gAwIBAgIJAJWSkrMdkaKeMA0GCSqGSIb3DQEBCwUAMFkxCzAJBgNVBAYTAlVTMQ8wDQYDVQQIDAZEZW5pYWwxEzARBgNVBAcMCk9ha2xhbmRJZFAxDDAKBgNVBAoMA0RpczEWMBQGA1UEAwwNMTkyLjE2OC4zMy45OTAeFw0xNjAzMDUwMTQyMzdaFw0yNjAzMDUwMTQyMzdaMFkxCzAJBgNVBAYTAlVTMQ8wDQYDVQQIDAZEZW5pYWwxEzARBgNVBAcMCk9ha2xhbmRJZFAxDDAKBgNVBAoMA0RpczEWMBQGA1UEAwwNMTkyLjE2OC4zMy45OTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAN1PVX1/peNhgR6NlIgehQ9SjcAjNzd0KGGzshOzeQArL7066Nk4A+j4yl1ECLSOFwlgTc4X6vDunR15GNZoB1dQt0Pdl29owcROaJCM8SpKl2sT26zsxWQq1CCdbkL+f0c22PCi+UKMo62nglI4hQ2itv1BolP0HSNhci0ua+OmKWNoQ0XC5In29uTrGA6Ugk1dEswrWeqRpLUfvK3D9PWi3+HRYJqcuoZRYDAhjkAHf1yuwJJJtZB8Ef1A0xbJA0UVAX/X5CGJ4A8bfe9Qnt34PFkIz+CAky4cVDUzBvVwparXr3HW9DAnTValPhDydeetpMO+5RWH+S47bVAMDbMCAwEAAaNQME4wHQYDVR0OBBYEFMReq5O8HHPf1ZwIe2TGw15UIzx4MB8GA1UdIwQYMBaAFMReq5O8HHPf1ZwIe2TGw15UIzx4MAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAM62/klk8X3OInzItLOJGFSFjYZvTlCVWmhZdTmMjs3981Jci7jiHjCFFnotxeapgYy2xhFll5kBIh60A6+4IU2CpjpJwYtD1sBKJERp8ye8yMNR6Z9Z38QPBgQWVPos+vKyHSoS7tyQVJYmG8TzqeG807gUpKFp7olm1RK14w+bPk5igi5GX49lQnq2NMKm7BeomLIuWECkogoOdzB6tA07lgfbOnUn4/KMrbkUaVCVDWtm+lt3dEml8sTO4hPjuFudnwK0q7lQTZf7Ha/IpCaELvMaUuvwB8sowb6I/5CCousjtqwpyIVOjgrRcJo4e48SxACed0ZyA/jKfhNTbCA=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);

