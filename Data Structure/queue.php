<?php

abstract class QueueImplementation {

	/**
	 * Queue which will contain the elements
	**/
	protected $queue = [];

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
	 * Push element to the queue
	 * @param mixed $item
	**/
	abstract public function enqueue($item);


	/**
	 * View an delete last element of the queue
	 * @return mixed
	**/
	abstract public function dequeue();

	/**
	 * Check if the stack is empty
	 * @return boolean
	**/
	abstract public function isEmpty();
}

class Queue extends QueueImplementation {

	public function enqueue($item)
	{
		array_push($this->queue, $item);
	}

	public function dequeue()
	{
		if ($this->isEmpty()) {
			$this->newException('Queue is empty.');
		}

		array_shift($this->queue);
	}

	public function isEmpty()
	{
		return count($this->queue) == 0;
	}

	/**
	 * Look at the first item of the queue
	 * @return mixed
	**/
	public function peek()
	{
		if ($this->isEmpty()) {
			return null;
		}
		return $this->queue[array_key_first($this->queue)];
	}
}



$queue = new Queue;

$queue->enqueue(5);

$queue->enqueue(6);

$queue->enqueue('z');

echo "\n" . $queue->peek();

$queue->dequeue();

echo "\n" . $queue->peek();

$queue->dequeue();

echo "\n" . $queue->peek();
