<?php

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

include_once 'vendor/autoload.php';

$ssl = [
    'verify_peer'       => false,
    'verify_peer_name'  => false,
    'allow_self_signed' => true,
];

$generator = new Generator();
try {
    $generator->generate(
        new Config([
            'inputFile' => 'https://arbetsgivarintygtest.sverigesakassor.se/HR_SystemService/ArbetsgivarintygService.svc?wsdl',
            'outputDir' => __DIR__ . '/src',
            'namespaceName' => 'JGI\Arbetsgivarintyg',
            'soapClientOptions' => [
                'stream_context' => stream_context_create(['ssl' => $ssl]),
                'ssl' => $ssl,
            ],

        ])
    );
} catch (\Exception $e) {
    echo $e->getMessage();
}

