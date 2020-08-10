<?php 



namespace App\controller;

use App\support\Database;


class User extends Database
{

    public function passwordChange($user_id,$newpass)
    {

        $this -> update('adminis',$user_id,[

                'password' => password_hash($newpass, PASSWORD_DEFAULT),


        ]);

        return "<p class=\"alert alert-succesfull\">Password Changed Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    	
    }



}







 ?>