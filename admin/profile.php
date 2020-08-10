
<?php 



include_once 'templates/headerpart.php';



 ?>



<?php include_once 'templates/middle.php'; ?>


                <section id="content">
 



<?php 

if (isset($_POST['passchange'])) {

     $oldpass = $_POST['oldpass'];
     $newpass = $_POST['newpass'];
     $conpass = $_POST['conpass'];
     $user_id = $_SESSION['id']; 

     /**
      * PASSWORD verify
      */

     if ($newpass == $conpass) {
         $confirm_pass = true;
     }else{
         $confirm_pass = false;
     }

     /**
      * old pass check
      */

     if (password_verify($oldpass, $_SESSION['password'])) {
         $old_check = true;
     }else{
        $old_check = false;
     }

     /**
      * check validation
      */

     if (empty($oldpass) ||empty($newpass) ||empty($conpass)) {
         $mess = "<p class=\"alert alert-danger\">Fields must not be empty ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     }elseif ($old_check == false) {
        $mess = "<p class=\"alert alert-danger\">old password not matched ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     }elseif ($confirm_pass == false) {
        $mess = "<p class=\"alert alert-danger\">new password not matched ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     }else{
       $mess = $user->passwordChange($user_id,$newpass);
     }
}


 ?>

<div class="row">
<div class="col-sm-9">
    <section class="panel panel-default">
        <header class="panel-heading font-bold">Change Password</header>

        <?php 
          
          if (isset($mess)) {
              echo $mess;
          }


         ?>
        <div class="panel-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


                <div class="form-group"><label>Old Password</label> <input type="password" name="oldpass" class="form-control" placeholder="Old Password" /></div>
                <div class="form-group"><label>New Password</label> <input type="password" name="newpass" class="form-control" placeholder="New Password" /></div>
                <div class="form-group"><label>Confirm Password</label> <input type="password" name="conpass" class="form-control" placeholder="Confirm New Password" /></div>

                <button type="submit" class="btn btn-sm btn-default" name="passchange">Submit</button>
            </form>
        </div>
    </section>
</div>
</div>




                        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                    </section>


<?php include_once 'templates/footer.php'; ?>