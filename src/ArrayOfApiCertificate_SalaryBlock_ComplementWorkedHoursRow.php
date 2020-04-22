<?php

namespace JGI\Arbetsgivarintyg;

class ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApiCertificate_SalaryBlock_ComplementWorkedHoursRow[] $AndraLonetillaggRad
     */
    protected $AndraLonetillaggRad = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApiCertificate_SalaryBlock_ComplementWorkedHoursRow[]
     */
    public function getAndraLonetillaggRad()
    {
      return $this->AndraLonetillaggRad;
    }

    /**
     * @param ApiCertificate_SalaryBlock_ComplementWorkedHoursRow[] $AndraLonetillaggRad
     * @return \JGI\Arbetsgivarintyg\ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setAndraLonetillaggRad(array $AndraLonetillaggRad = null)
    {
      $this->AndraLonetillaggRad = $AndraLonetillaggRad;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->AndraLonetillaggRad[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function offsetGet($offset)
    {
      return $this->AndraLonetillaggRad[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApiCertificate_SalaryBlock_ComplementWorkedHoursRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AndraLonetillaggRad[] = $value;
      } else {
        $this->AndraLonetillaggRad[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AndraLonetillaggRad[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApiCertificate_SalaryBlock_ComplementWorkedHoursRow Return the current element
     */
    public function current()
    {
      return current($this->AndraLonetillaggRad);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AndraLonetillaggRad);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AndraLonetillaggRad);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->AndraLonetillaggRad);
    }

    /**
     * Countable implementation
     *
     * @return ApiCertificate_SalaryBlock_ComplementWorkedHoursRow Return count of elements
     */
    public function count()
    {
      return count($this->AndraLonetillaggRad);
    }

}
