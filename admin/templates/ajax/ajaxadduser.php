<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\User;


 $adduser = new User;



  $data = $adduser -> creatUser($_POST);

  echo $data;




 ?>