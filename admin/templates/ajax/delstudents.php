<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\Students;


 $deluser = new Students;

 $id      = $_POST['id'];


 $data = $deluser -> deleteStudents($id);



 if ( $data ) {
    echo "<p class=\"alert alert-warning\">User Deleted Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
 }

