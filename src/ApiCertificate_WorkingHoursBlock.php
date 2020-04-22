<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_WorkingHoursBlock
{

    /**
     * @var float $ArbetstidHeltidTimmar
     */
    protected $ArbetstidHeltidTimmar = null;

    /**
     * @var float $ProcentAvHeltid
     */
    protected $ProcentAvHeltid = null;

    /**
     * @var float $ArbetstidDeltidTimmar
     */
    protected $ArbetstidDeltidTimmar = null;

    /**
     * @var ArbetstidTyp $Typ
     */
    protected $Typ = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getArbetstidHeltidTimmar()
    {
      return $this->ArbetstidHeltidTimmar;
    }

    /**
     * @param float $ArbetstidHeltidTimmar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkingHoursBlock
     */
    public function setArbetstidHeltidTimmar($ArbetstidHeltidTimmar)
    {
      $this->ArbetstidHeltidTimmar = $ArbetstidHeltidTimmar;
      return $this;
    }

    /**
     * @return float
     */
    public function getProcentAvHeltid()
    {
      return $this->ProcentAvHeltid;
    }

    /**
     * @param float $ProcentAvHeltid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkingHoursBlock
     */
    public function setProcentAvHeltid($ProcentAvHeltid)
    {
      $this->ProcentAvHeltid = $ProcentAvHeltid;
      return $this;
    }

    /**
     * @return float
     */
    public function getArbetstidDeltidTimmar()
    {
      return $this->ArbetstidDeltidTimmar;
    }

    /**
     * @param float $ArbetstidDeltidTimmar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkingHoursBlock
     */
    public function setArbetstidDeltidTimmar($ArbetstidDeltidTimmar)
    {
      $this->ArbetstidDeltidTimmar = $ArbetstidDeltidTimmar;
      return $this;
    }

    /**
     * @return ArbetstidTyp
     */
    public function getTyp()
    {
      return $this->Typ;
    }

    /**
     * @param ArbetstidTyp $Typ
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkingHoursBlock
     */
    public function setTyp($Typ)
    {
      $this->Typ = $Typ;
      return $this;
    }

}
