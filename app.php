<?php

use eftec\bladeone\BladeOne;
use eftec\DaoOne;

include "vendor/autoload.php";

// we created the new connection to the database :-)
// database located at 127.0.0.1, user root and password: abc.123, schema = cupcakes
$db=new DaoOne("127.0.0.1","root","abc.123","cupcakes");
$db->open();

$blade=new BladeOne(); // it will create the folders compiles/ . The folder views/ must be created
					   // if they are not create then you should create it manually


