<?php 


require_once "../vendor/autoload.php";
require_once "../config.php";



 ?>


<?php 

 use App\support\Auth;


 $auth = new Auth;





 ?>




<!DOCTYPE html>
<html lang="en" class=" ">
    <!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Scale | Web Application</title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
        <!--[if lt IE 9]>
            <script src="js/ie/html5shiv.js"></script>
            <script src="js/ie/respond.min.js"></script>
            <script src="js/ie/excanvas.js"></script>
        <![endif]-->
    </head>

<?php 

    /**
     * collecting values
     */

    if (isset($_POST['login'])) {
        $emailuser = $_POST['emailuser'];
        $password  = $_POST['password'];


        if (empty($emailuser) || empty($password)) {
            $mess = "<p class=\"alert alert-danger\">Fields must not be empty ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        }else{
           $mess  = $auth -> userLogin($emailuser,$password);
        }
    }





 ?>




    <body class="">
        <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
            <div class="container aside-xl">
                <a class="navbar-brand block" href="index.html">Scale</a>
                <section class="m-b-lg">
                    <header class="wrapper text-center"><strong>Sign in to get in touch</strong></header>


<?php 

  if (isset($mess)) {
      echo $mess;
  }


 ?>

                    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                        <div class="list-group">
                            <div class="list-group-item"><input type="text" placeholder="Email or Username" name="emailuser" class="form-control no-border" /></div>
                            <div class="list-group-item"><input type="password" placeholder="Password" name="password" class="form-control no-border" /></div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="login">Log in</button>

                    </form>




                </section>
            </div>
        </section>
        <!-- footer -->
        <footer id="footer">
            <div class="text-center padder">
                <p>
                    <small>
                        Web app framework base on Bootstrap<br />
                        &copy; 2013
                    </small>
                </p>
            </div>
        </footer>
        <!-- / footer -->
        <!-- Bootstrap -->
        <!-- App -->
        <script src="js/app.v1.js"></script>
        <script src="js/app.plugin.js"></script>
    </body>
    <!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->
</html>
