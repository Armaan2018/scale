<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\Students;


 $adduser = new Students;


 $data = $adduser -> addStudent($_POST);


 ?>