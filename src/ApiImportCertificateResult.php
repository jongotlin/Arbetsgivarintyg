<?php

namespace JGI\Arbetsgivarintyg;

class ApiImportCertificateResult
{

    /**
     * @var ApiCertificate $Certificate
     */
    protected $Certificate = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApiCertificate
     */
    public function getCertificate()
    {
      return $this->Certificate;
    }

    /**
     * @param ApiCertificate $Certificate
     * @return \JGI\Arbetsgivarintyg\ApiImportCertificateResult
     */
    public function setCertificate($Certificate)
    {
      $this->Certificate = $Certificate;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \JGI\Arbetsgivarintyg\ApiImportCertificateResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \JGI\Arbetsgivarintyg\ApiImportCertificateResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
