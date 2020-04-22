<?php

namespace JGI\Arbetsgivarintyg;

class ArbetsgivarintygServiceResponse
{

    /**
     * @var ImportResponse $Response
     */
    protected $Response = null;

    /**
     * @param ImportResponse $Response
     */
    public function __construct($Response)
    {
      $this->Response = $Response;
    }

    /**
     * @return ImportResponse
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param ImportResponse $Response
     * @return \JGI\Arbetsgivarintyg\ArbetsgivarintygServiceResponse
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
      return $this;
    }

}
