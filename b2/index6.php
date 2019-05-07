<?php
abstract class A 
{
	// duoc phep khai bao thuoc tinh
	public $age = 20;
	protected $money = 200;
	private $lovely = 'no';

	// co 2 loai phuong thuc
	abstract public function demo();
	abstract protected function check();

	public function test()
	{
		return $this->lovely;
	}
	private function test1()
	{

	}
}

class B extends A 
{
	public function demo()
	{
		return $this->age;
	}

	protected function check()
	{

	}
}

$b = new B;
echo $b->demo();
