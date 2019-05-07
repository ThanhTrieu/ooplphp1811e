<?php

// chong ke thua trong oop php
final class A 
{
	// tat ca cac class khac khong the ke thua class A
	public function test()
	{
		echo "This is test";
	}
}

class B
{
	final public function test()
	{
		echo "This is test";
	}
}

class C extends B 
{
	public function __construct()
	{
		echo "This is " . __FUNCTION__ . " of class " . __CLASS__;
	}

	public function tests()
	{
		echo "<br/>";
		echo "This is test of class --" . __CLASS__;
	}
}

class D extends C 
{
	public function __construct()
	{
		echo "<br/>";
		parent::__construct(); // trieu goi __construct cua lop cha
		echo "<br/>";
		echo "This is " . __FUNCTION__ . " of class " . __CLASS__;
	}
}
$b = new C;
echo $b->tests();
$d = new D;

