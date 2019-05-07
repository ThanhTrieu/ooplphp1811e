<?php

class Demo 
{
	// khai bao method magic
	// construct
	public function __construct($a, $b = 12)
	{
		// phuong thuc nay se luon luon duoc tu dong chay dau tien khi khoi tao doi tuong cho class
		echo "This is method contruct - {$a} - {$b}";
		echo "<br/>";
	}
	// destruct
	public function __destruct()
	{
		// phuong thuc sex luon luon tu dong chay cuoi cung khi khoi tao doi tuong cho class
		echo "<br/>";
		echo "This is method destruct";
	}

	public function test()
	{
		// const : __CLASS__ : lay ra ten class hien tai ma phuong thuc hay thuoc tinh dang lam viec voi no
		echo "This is method test ---- " . __CLASS__ . ' --- ' . __FUNCTION__;
	}

	public function __call($request, $respone)
	{
		echo "<br/>";
		echo "This is method __call";
		echo "<br/>";
		var_dump($request, $respone);
		// phuong thuc nay se tu dong chay khi truy cap vao 1 phuong thuc khong ton tai trong class( khong phai la phuong thuc static)
	}

	public static function __callStatic($r, $q)
	{
		echo "<br/>";
		echo "This is method __callStatic";
		// phuong thuc nay se tu dong chay khi truy cap vao 1 phuong thuc static khong ton tai trong class.
	}

	public function __get($key)
	{
		echo "<br/>";
		echo "Ban vua truy cap vao thuoc tinh {$key} ko ton tai trong class";
	}

	public function __set($key, $value)
	{
		echo "<br/>";
		echo "Ban vua truy cap vao thuoc tinh {$key} khong ton tai trong class va ban vua gan gia tri {$value} cho thuoc tinh {$key} do";
	}
}

$demo = new Demo('LPHP1811E');
$demo->test();
$demo->testCall(1,2);
Demo::testCallStatic();
// 
$age = $demo->age = 20;
echo $age;

