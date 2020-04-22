<?php

namespace JGI\Arbetsgivarintyg;

class Adress
{

    /**
     * @var CareOf $CareOf
     */
    protected $CareOf = null;

    /**
     * @var Ort $Ort
     */
    protected $Ort = null;

    /**
     * @var Gatuadress $Gatuadress
     */
    protected $Gatuadress = null;

    /**
     * @var Postnummer $Postnummer
     */
    protected $Postnummer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CareOf
     */
    public function getCareOf()
    {
      return $this->CareOf;
    }

    /**
     * @param CareOf $CareOf
     * @return \JGI\Arbetsgivarintyg\Adress
     */
    public function setCareOf($CareOf)
    {
      $this->CareOf = $CareOf;
      return $this;
    }

    /**
     * @return Ort
     */
    public function getOrt()
    {
      return $this->Ort;
    }

    /**
     * @param Ort $Ort
     * @return \JGI\Arbetsgivarintyg\Adress
     */
    public function setOrt($Ort)
    {
      $this->Ort = $Ort;
      return $this;
    }

    /**
     * @return Gatuadress
     */
    public function getGatuadress()
    {
      return $this->Gatuadress;
    }

    /**
     * @param Gatuadress $Gatuadress
     * @return \JGI\Arbetsgivarintyg\Adress
     */
    public function setGatuadress($Gatuadress)
    {
      $this->Gatuadress = $Gatuadress;
      return $this;
    }

    /**
     * @return Postnummer
     */
    public function getPostnummer()
    {
      return $this->Postnummer;
    }

    /**
     * @param Postnummer $Postnummer
     * @return \JGI\Arbetsgivarintyg\Adress
     */
    public function setPostnummer($Postnummer)
    {
      $this->Postnummer = $Postnummer;
      return $this;
    }

}
