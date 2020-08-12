<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\User;


 $deluser = new User;

 $id      = $_POST['id'];


 $data = $deluser -> deleteUser($id);



 if ( $data ) {
    echo "<p class=\"alert alert-warning\">User Deleted Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
 }

