<?php

abstract class StackImplementation {

	/**
	 * Stack which will contain the elements
	**/
	protected $stack = [];


	/**
	 * Throw new exception
	 * @param string $message
	 * @return void
	**/
	protected function newException($message)
	{
		throw new \Exception($message);
	}

	/**
	 * Push element to the stack
	 * @param mixed $item
	**/
	abstract public function push($item);


	/**
	 * View an delete last element of the stack
	 * @return mixed
	**/
	abstract public function pop();


	/**
	 * View the last element of the stack without removing it
	 * @return mixed
	**/
	abstract public function peek();


	/**
	 * Check if the stack is empty
	 * @return boolean
	**/
	abstract public function isEmpty();
}


class Stack extends StackImplementation {

	public function push($item)
	{
		// Push item to the stack
		array_push($this->stack, $item);
	}


	public function pop()
	{
		// Check if the stack is empty
		if ($this->isEmpty()) {
			$this->newException('Stack is empty. Cannot pop any element.');
		}
		// Pop the last element
		return array_pop($this->stack);
	}


	public function peek()
	{
		// Check if the stack is empty
		if ($this->isEmpty()) {
			$this->newException('Stack does not have any element.');
		}
		return end($this->stack);
	}

	public function isEmpty()
	{
		return $this->size() > 0 ? false : true;
	}

	/**
	 * Return the size of the stack
	 * @return int
	**/
	public function size()
	{
		return count($this->stack);
	}

}


/**
 *==========================
 *===========Test===========
 *==========================
**/

$stack = new Stack();

$stack->push(5);

$stack->push(19);

echo $stack->size(); // 2

echo $stack->pop(); // 19

echo $stack->size(); // 1

echo $stack->peek(); // 5

echo $stack->size(); // 1