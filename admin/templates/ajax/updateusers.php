<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\User;


 $adduser = new User;
 
 $id = $_POST['user_id_update'];

 $data = $adduser -> updateUser($_POST,$id);
 

 echo $data;
