<?php

namespace JGI\Arbetsgivarintyg;

class ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow[] $Tjanstledighet
     */
    protected $Tjanstledighet = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow[]
     */
    public function getTjanstledighet()
    {
      return $this->Tjanstledighet;
    }

    /**
     * @param ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow[] $Tjanstledighet
     * @return \JGI\Arbetsgivarintyg\ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
     */
    public function setTjanstledighet(array $Tjanstledighet = null)
    {
      $this->Tjanstledighet = $Tjanstledighet;
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
      return isset($this->Tjanstledighet[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
     */
    public function offsetGet($offset)
    {
      return $this->Tjanstledighet[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Tjanstledighet[] = $value;
      } else {
        $this->Tjanstledighet[$offset] = $value;
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
      unset($this->Tjanstledighet[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow Return the current element
     */
    public function current()
    {
      return current($this->Tjanstledighet);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Tjanstledighet);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Tjanstledighet);
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
      reset($this->Tjanstledighet);
    }

    /**
     * Countable implementation
     *
     * @return ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow Return count of elements
     */
    public function count()
    {
      return count($this->Tjanstledighet);
    }

}
