<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\User;


 $adduser = new User;
 
 $id  = $_POST['id'];

$data = $adduser -> singleUserview($id);
 
$single_user = $data -> fetch();

echo json_encode($single_user);




