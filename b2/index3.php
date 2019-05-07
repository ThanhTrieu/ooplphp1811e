<?php
namespace oop\b2;
// khong duoc phep co bat ky dong lenh nao dung ben tren tu khoa namespace

class Student 
{
	public function test()
	{
		return "This is method --" . __FUNCTION__ . ' --' . __NAMESPACE__;
	}
}