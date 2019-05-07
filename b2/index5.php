<?php
// dinh nghia interface
interface A 
{
	// khong duoc phep dinh nghia thuoc tinh
	// duoc phep dinh nghia phuong thuc - nhung phai la phuong thuc rong - pham vi truy cap cua phuong thuc la public khong dc phep la private va protected
	public function demo(); // phuong thuc rong
	public function test();
}

interface B extends A 
{
	public function check();
}

class C implements B 
{
	// trong calss C phai override lai toan bo cac phuong thuc cua interface
	public function demo()
	{
		echo "This is demo";
	}

	public function test()
	{

	}

	public function check()
	{

	}
}

class D extends C {
	
}
$c = new C;
$c->demo();
