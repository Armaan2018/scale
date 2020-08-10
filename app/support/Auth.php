<?php 



namespace App\support;

use App\support\Database;

use PDO;




/**
 * Authentication class
 */
class Auth extends Database
{


	/**
	 * user login system
	 */
	
    public function userLogin($emailuser,$password)
    {

         $data            = $this -> emailUsercheck($emailuser);

         $num_user        = $data['num'];

         $login_user_data = $data['data']->fetch(PDO::FETCH_ASSOC);

         

         if ($num_user == 1) {

         	if (password_verify($password,$login_user_data['password'])) {


                $_SESSION['id'] = $login_user_data['id'];
                $_SESSION['uname'] = $login_user_data['uname'];
                $_SESSION['email'] = $login_user_data['email'];
                $_SESSION['password'] = $login_user_data['password'];


                  header("location:dashboard.php");
         		

         	}else{
               return "<p class=\"alert alert-danger\">password not matched ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";  
         	}
         	
         }else{
         	    return "<p class=\"alert alert-danger\">username/email not matched ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
         }




    }


    /**
     * email or username check
     */


    public function emailUsercheck($emailuser)
    {
         

      return   $this -> dataCheck('adminis',[

             'uname'  => $emailuser,
             'email'  => $emailuser




         ],'OR');



    }


    /**
     * user logout
     */


    public function userLogout()
    {
        session_destroy();
        header("location:index.php");
    }





}

















 ?>