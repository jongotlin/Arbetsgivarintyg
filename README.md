# Arbetsgivarintyg

This package includes (php)-classes for arbetsgivarintyg.nu's Soap-api. 

The classes are generated with [Wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator). If api is updated classes can be re-generated with `php generate.php`.

## Install with composer
`composer require jongotlin/arbetsgivarintyg`

## Example
```php

$options = [
    'stream_context' => stream_context_create([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ]
    ]),
];
$service = new BizTalkServiceInstance($options);

$apiAuthentication = new ApiAuthentication('ftgXXXX');
$apiAuthentication->setApiNyckel('xxx');

$salaryBlock = new ApiCertificate_SalaryBlock();
$salaryBlock->setTypAvLon(LoneTyp::Daglon);
$salaryBlock->setAr(2020);
$salaryBlock->setBelopp(250.0);
$apiCertificate = new ApiCertificate();
$apiCertificate->setLon($salaryBlock);
$arrayOfApiCertificate = new ArrayOfApiCertificate();
$arrayOfApiCertificate->setApiCertifikat([$apiCertificate]);
$importRequest = new ImportRequest();
$importRequest->setArbetsgivarintyg($arrayOfApiCertificate);
$importRequest->setAutentisering($apiAuthentication);
$arbetsgivarintygServiceRequest = new ArbetsgivarintygServiceRequest($importRequest);
$arbetsgivarintygServiceResponse = $service->SaveArbetsgivarintygService($arbetsgivarintygServiceRequest);

echo $arbetsgivarintygServiceResponse->getResponse()->getResultCode();
echo $arbetsgivarintygServiceResponse->getResponse()->getResultMessage();
```
