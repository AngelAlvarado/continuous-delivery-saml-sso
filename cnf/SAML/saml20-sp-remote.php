<?php

$metadata['http://192.168.33.99/simplesaml/idp'] = array (
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://192.168.33.99/simplesaml/module.php/saml/sp/saml2-logout.php/openidp',
    ),
  ),
  'AssertionConsumerService' =>
  array (
    0 =>
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://192.168.33.99/simplesaml/module.php/saml/sp/saml2-acs.php/openidp',
    ),
    1 =>
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'http://192.168.33.99/simplesaml/module.php/saml/sp/saml1-acs.php/openidp',
    ),
    2 =>
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://192.168.33.99/simplesaml/module.php/saml/sp/saml2-acs.php/openidp',
    ),
    3 =>
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'http://192.168.33.99/simplesaml/module.php/saml/sp/saml1-acs.php/openidp/artifact',
    ),
  ),
  'certData' => 'MIIDfzCCAmegAwIBAgIJAKGGusSHcFnHMA0GCSqGSIb3DQEBCwUAMFYxCzAJBgNVBAYTAlVTMQ8wDQYDVQQIDAZEZW5pYWwxEDAOBgNVBAcMB09ha2xhbmQxDDAKBgNVBAoMA0RpczEWMBQGA1UEAwwNMTkyLjE2OC4zMy45OTAeFw0xNjAzMDUwMDI4MzVaFw0yNjAzMDUwMDI4MzVaMFYxCzAJBgNVBAYTAlVTMQ8wDQYDVQQIDAZEZW5pYWwxEDAOBgNVBAcMB09ha2xhbmQxDDAKBgNVBAoMA0RpczEWMBQGA1UEAwwNMTkyLjE2OC4zMy45OTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK+i8uXztRNM/iRWCj/UKetZNhXEbJ7whPIJECvCc34w4AVTTqTW7awg5I5uW6+kPH1bWWrlaT/RULZsBWVEwoMfa9rS7sv1Wb7Tv85QU6Fh6/P5sM0tykCoqYgwJeYhO2NkBPVhfbk//oMZ9TrMZPHYbLNQk3EsFYeu0vAMsraq4hTQJysx+f1JINtCV45N1S9xktpFlFTm4Wn7KZ6uHNqY2t4G1d1qfLyH6jkjmMKlobDkAiGqjNM8L/xC2sQeFXEb+Kx9NP7RfvWf5iyfFtPNJLqwDJGT9breXy9KCF57FzimRLiu+vBHZnVen6eORcIozfQMO7ZkLhd365Av1H8CAwEAAaNQME4wHQYDVR0OBBYEFOlbAiRtKKAzRROCCYFosHox8uf7MB8GA1UdIwQYMBaAFOlbAiRtKKAzRROCCYFosHox8uf7MAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBABam7e2TEv0kFdRRCGzs01/J+z+6xUZMK60BRJKUAwps/k2sq4L8BviTVsutqmrNlZlnv+0CVt1/LDwyVBtjwEEtwVfzg0P1NvJWbRCb5ZUvxCHSlK7ThUPn9+9WhAQX9kKFgqoCw9rmPXEFM0ITQ/eSKq1cNPs91Kr106vRs3b5qVSzok3KdKDN0kYbOfNcJ7Izxb7MVqgJmI8Fklw6RH6GoXNTO5EV2ZkJIp6APXnUjf9HxnZ5uqTFqKv6r6c2mTVLzs+mqIAmYlVuW6LzxoMPyq/9XS+gDTRp76Taw5WtD+/P91V+y2K41Wq0enL3fajbP31nTX7tNtYISfUKa1A=',
);
