<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\User;


 $adduser = new User;

 
 $uname   = $_POST['uname'];



$data = $adduser -> usernameCheck($uname);


echo $data;