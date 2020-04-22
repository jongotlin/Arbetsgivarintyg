<?php

namespace JGI\Arbetsgivarintyg;

class BizTalkServiceInstance extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'DatumOmfattning' => 'JGI\\Arbetsgivarintyg\\DatumOmfattning',
      'Adress' => 'JGI\\Arbetsgivarintyg\\Adress',
      'APIAGPVersion' => 'JGI\\Arbetsgivarintyg\\APIAGPVersion',
      'ArrayOfApiCertificate' => 'JGI\\Arbetsgivarintyg\\ArrayOfApiCertificate',
      'ApiCertificate' => 'JGI\\Arbetsgivarintyg\\ApiCertificate',
      'ApiCertificate_CompanyBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_CompanyBlock',
      'ApiCertificate_CompensationBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_CompensationBlock',
      'ApiCertificate_EmploymentBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_EmploymentBlock',
      'ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow' => 'JGI\\Arbetsgivarintyg\\ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow',
      'ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow',
      'ApiCertificate_EmploymentFormBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_EmploymentFormBlock',
      'ApiCertificate_ExtraInformationBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_ExtraInformationBlock',
      'ApiCertificate_OfferOfContinuedWorkBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_OfferOfContinuedWorkBlock',
      'ApiCertificate_ReasonEmploymentEndedBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_ReasonEmploymentEndedBlock',
      'ApiCertificate_SalaryBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_SalaryBlock',
      'ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow' => 'JGI\\Arbetsgivarintyg\\ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow',
      'ApiCertificate_SalaryBlock_ComplementWorkedHoursRow' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow',
      'ApiCertificate_SpecificEmploymentInformationBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_SpecificEmploymentInformationBlock',
      'ApiCertificate_TeachersSalaryBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_TeachersSalaryBlock',
      'ApiCertificate_WorkedHoursBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_WorkedHoursBlock',
      'ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow' => 'JGI\\Arbetsgivarintyg\\ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow',
      'ApiCertificate_WorkedHoursBlock_WorkedHoursRow' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_WorkedHoursBlock_WorkedHoursRow',
      'ApiCertificate_WorkerBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_WorkerBlock',
      'ApiCertificate_WorkingHoursBlock' => 'JGI\\Arbetsgivarintyg\\ApiCertificate_WorkingHoursBlock',
      'APISoftwareInfo' => 'JGI\\Arbetsgivarintyg\\APISoftwareInfo',
      'ArrayOfApiImportCertificateResult' => 'JGI\\Arbetsgivarintyg\\ArrayOfApiImportCertificateResult',
      'ApiImportCertificateResult' => 'JGI\\Arbetsgivarintyg\\ApiImportCertificateResult',
      'ImportRequest' => 'JGI\\Arbetsgivarintyg\\ImportRequest',
      'ApiAuthentication' => 'JGI\\Arbetsgivarintyg\\ApiAuthentication',
      'ImportResponse' => 'JGI\\Arbetsgivarintyg\\ImportResponse',
      'ArbetsgivarintygServiceRequest' => 'JGI\\Arbetsgivarintyg\\ArbetsgivarintygServiceRequest',
      'ArbetsgivarintygServiceResponse' => 'JGI\\Arbetsgivarintyg\\ArbetsgivarintygServiceResponse',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'stream_context' => NULL,
      'ssl' => 
      array (
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
      ),
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://arbetsgivarintygtest.sverigesakassor.se/HR_SystemService/ArbetsgivarintygService.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ArbetsgivarintygServiceRequest $part
     * @return ArbetsgivarintygServiceResponse
     */
    public function SaveArbetsgivarintygService(ArbetsgivarintygServiceRequest $part)
    {
      return $this->__soapCall('SaveArbetsgivarintygService', array($part));
    }

}
