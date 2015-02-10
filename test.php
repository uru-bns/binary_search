<?php

require_once('./binary_search.php');

class BinarySearchTest extends PHPUnit_Framework_TestCase
{
  private $_data = null;
  private $_dataRightIndex = null;

  public function setUp()
  {
    $this->_data = [1, 2, 3, 10, 20, 30, 100, 200, 300];
    $this->_dataRightIndex = count($this->_data) - 1;
  }

  public function test_binary_search()
  {
    $this->assertEquals(binary_search($this->_data, 1, 0, $this->_dataRightIndex), 0);
    $this->assertEquals(binary_search($this->_data, 2, 0, $this->_dataRightIndex), 1);
    $this->assertEquals(binary_search($this->_data, 3, 0, $this->_dataRightIndex), 2);
    $this->assertEquals(binary_search($this->_data, 10, 0, $this->_dataRightIndex), 3);
    $this->assertEquals(binary_search($this->_data, 20, 0, $this->_dataRightIndex), 4);
    $this->assertEquals(binary_search($this->_data, 30, 0, $this->_dataRightIndex), 5);
    $this->assertEquals(binary_search($this->_data, 100, 0, $this->_dataRightIndex), 6);
    $this->assertEquals(binary_search($this->_data, 200, 0, $this->_dataRightIndex), 7);
    $this->assertEquals(binary_search($this->_data, 300, 0, $this->_dataRightIndex), 8);
    $this->assertEquals(binary_search($this->_data, false, 0, $this->_dataRightIndex), false);
  }

  public function test_binary_search_recursive()
  {
    $this->assertEquals(binary_search_recursive($this->_data, 1, 0, $this->_dataRightIndex), 0);
    $this->assertEquals(binary_search_recursive($this->_data, 2, 0, $this->_dataRightIndex), 1);
    $this->assertEquals(binary_search_recursive($this->_data, 3, 0, $this->_dataRightIndex), 2);
    $this->assertEquals(binary_search_recursive($this->_data, 10, 0, $this->_dataRightIndex), 3);
    $this->assertEquals(binary_search_recursive($this->_data, 20, 0, $this->_dataRightIndex), 4);
    $this->assertEquals(binary_search_recursive($this->_data, 30, 0, $this->_dataRightIndex), 5);
    $this->assertEquals(binary_search_recursive($this->_data, 100, 0, $this->_dataRightIndex), 6);
    $this->assertEquals(binary_search_recursive($this->_data, 200, 0, $this->_dataRightIndex), 7);
    $this->assertEquals(binary_search_recursive($this->_data, 300, 0, $this->_dataRightIndex), 8);
    $this->assertEquals(binary_search_recursive($this->_data, false, 0, $this->_dataRightIndex), false);
  }
}
