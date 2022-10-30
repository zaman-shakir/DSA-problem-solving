<?php

class MinStack extends Node {
/**
 */

function __construct() {
  $this->stack = [];
}

/**
 * @param Integer $val
 * @return NULL
 */
function push($val) {
    $this->stack[] = $val;
}

/**
 * @return NULL
 */
function pop() {
    $val = array_pop($this->stack);
}

/**
 * @return Integer
 */
function top() {
  return $this->stack[max(array_keys($this->stack))];
}

/**
 * @return Integer
 */
function getMin() {
    return min($this->stack);
}
}

/**
* Your MinStack object will be instantiated and called as such:
* $obj = MinStack();
* $obj->push($val);
* $obj->pop();
* $ret_3 = $obj->top();
* $ret_4 = $obj->getMin();
*/
