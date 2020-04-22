<?php


 function autoload_e09540a9d12007a6899ce0d53269a16e($class)
{
    $classes = array(
        'JGI\Arbetsgivarintyg\BizTalkServiceInstance' => __DIR__ .'/BizTalkServiceInstance.php',
        'JGI\Arbetsgivarintyg\DatumOmfattning' => __DIR__ .'/DatumOmfattning.php',
        'JGI\Arbetsgivarintyg\Adress' => __DIR__ .'/Adress.php',
        'JGI\Arbetsgivarintyg\AnstallningsformTyp' => __DIR__ .'/AnstallningsformTyp.php',
        'JGI\Arbetsgivarintyg\ArbetstidTyp' => __DIR__ .'/ArbetstidTyp.php',
        'JGI\Arbetsgivarintyg\Orsak' => __DIR__ .'/Orsak.php',
        'JGI\Arbetsgivarintyg\LoneTyper' => __DIR__ .'/LoneTyper.php',
        'JGI\Arbetsgivarintyg\LoneTyp' => __DIR__ .'/LoneTyp.php',
        'JGI\Arbetsgivarintyg\APIAGPVersion' => __DIR__ .'/APIAGPVersion.php',
        'JGI\Arbetsgivarintyg\ArrayOfApiCertificate' => __DIR__ .'/ArrayOfApiCertificate.php',
        'JGI\Arbetsgivarintyg\ApiCertificate' => __DIR__ .'/ApiCertificate.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock' => __DIR__ .'/ApiCertificate_CompanyBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_CompensationBlock' => __DIR__ .'/ApiCertificate_CompensationBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock' => __DIR__ .'/ApiCertificate_EmploymentBlock.php',
        'JGI\Arbetsgivarintyg\ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow' => __DIR__ .'/ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow' => __DIR__ .'/ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_EmploymentFormBlock' => __DIR__ .'/ApiCertificate_EmploymentFormBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_ExtraInformationBlock' => __DIR__ .'/ApiCertificate_ExtraInformationBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock' => __DIR__ .'/ApiCertificate_OfferOfContinuedWorkBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_ReasonEmploymentEndedBlock' => __DIR__ .'/ApiCertificate_ReasonEmploymentEndedBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock' => __DIR__ .'/ApiCertificate_SalaryBlock.php',
        'JGI\Arbetsgivarintyg\ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow' => __DIR__ .'/ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow' => __DIR__ .'/ApiCertificate_SalaryBlock_ComplementWorkedHoursRow.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_SpecificEmploymentInformationBlock' => __DIR__ .'/ApiCertificate_SpecificEmploymentInformationBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock' => __DIR__ .'/ApiCertificate_TeachersSalaryBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock' => __DIR__ .'/ApiCertificate_WorkedHoursBlock.php',
        'JGI\Arbetsgivarintyg\ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow' => __DIR__ .'/ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow' => __DIR__ .'/ApiCertificate_WorkedHoursBlock_WorkedHoursRow.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock' => __DIR__ .'/ApiCertificate_WorkerBlock.php',
        'JGI\Arbetsgivarintyg\ApiCertificate_WorkingHoursBlock' => __DIR__ .'/ApiCertificate_WorkingHoursBlock.php',
        'JGI\Arbetsgivarintyg\APISoftwareInfo' => __DIR__ .'/APISoftwareInfo.php',
        'JGI\Arbetsgivarintyg\ArrayOfApiImportCertificateResult' => __DIR__ .'/ArrayOfApiImportCertificateResult.php',
        'JGI\Arbetsgivarintyg\ApiImportCertificateResult' => __DIR__ .'/ApiImportCertificateResult.php',
        'JGI\Arbetsgivarintyg\ImportRequest' => __DIR__ .'/ImportRequest.php',
        'JGI\Arbetsgivarintyg\ApiAuthentication' => __DIR__ .'/ApiAuthentication.php',
        'JGI\Arbetsgivarintyg\ImportResponse' => __DIR__ .'/ImportResponse.php',
        'JGI\Arbetsgivarintyg\ArbetsgivarintygServiceRequest' => __DIR__ .'/ArbetsgivarintygServiceRequest.php',
        'JGI\Arbetsgivarintyg\ArbetsgivarintygServiceResponse' => __DIR__ .'/ArbetsgivarintygServiceResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e09540a9d12007a6899ce0d53269a16e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
