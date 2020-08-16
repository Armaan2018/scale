<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\Students;


 $adduser = new Students;

 $id    = $_POST['student_id_update'];

 $data   = $adduser -> updateStud($_POST,$id);

 echo $data;

