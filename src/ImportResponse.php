<?php

namespace JGI\Arbetsgivarintyg;

class ImportResponse
{

    /**
     * @var ArrayOfApiImportCertificateResult $CertificateResults
     */
    protected $CertificateResults = null;

    /**
     * @var int $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @var string $ResultMessage
     */
    protected $ResultMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfApiImportCertificateResult
     */
    public function getCertificateResults()
    {
      return $this->CertificateResults;
    }

    /**
     * @param ArrayOfApiImportCertificateResult $CertificateResults
     * @return \JGI\Arbetsgivarintyg\ImportResponse
     */
    public function setCertificateResults($CertificateResults)
    {
      $this->CertificateResults = $CertificateResults;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCode()
    {
      return $this->ResultCode;
    }

    /**
     * @param int $ResultCode
     * @return \JGI\Arbetsgivarintyg\ImportResponse
     */
    public function setResultCode($ResultCode)
    {
      $this->ResultCode = $ResultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultMessage()
    {
      return $this->ResultMessage;
    }

    /**
     * @param string $ResultMessage
     * @return \JGI\Arbetsgivarintyg\ImportResponse
     */
    public function setResultMessage($ResultMessage)
    {
      $this->ResultMessage = $ResultMessage;
      return $this;
    }

}
