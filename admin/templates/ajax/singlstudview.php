<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\Students;


 $adduser = new Students;


 $id      = $_POST['id'];


$data = $adduser -> singleStud($id);



$single = $data -> fetch();

echo json_encode($single);





