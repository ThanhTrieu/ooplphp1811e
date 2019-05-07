<?php
namespace Application;

require 'index3.php';

use oop\b2\Student as MyStudent;

class Worker extends MyStudent
{

}	

$worker = new Worker;
echo $worker->test();