<?php 



namespace App\controller;

use App\support\Database;
use PDO;

class User extends Database
{


/**
 * Password Change Process
 */


    public function passwordChange($user_id,$newpass)
    {

        $this -> update('adminis',$user_id,[

                'password' => password_hash($newpass, PASSWORD_DEFAULT),


        ]);

        return "<p class=\"alert alert-succesfull\">Password Changed Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    	
    }


  /**
   * create new user
   */

    public function creatUser($data)

    {



           $file_name = !empty($_FILES['photo']['name']) ? $this -> fileUpload($_FILES['photo'],'../../students/') : '';


         $data = $this -> create('adminis',[




               'name'     =>  $data['name'],
               'uname'    =>  $data['uname'],
               'email'    =>  $data['email'],
               'password' =>  password_hash('admin', PASSWORD_DEFAULT),
               'role'     =>  $data['role'],
               'cell'     =>   $data['cell'],
               'photo'

         ]);

                if ( $data ) {
                	 return "<p class=\"alert alert-success\">User Added Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                }
         	 



    }


    public function userAll()
    {

       $data = $this -> showAll('adminis');
       
       return $data;
    }




    public function deleteUser($id)
    {
          
         $data = $this -> delete('adminis',$id);
         
         if ( $data ) {
         	return true;
         }



    }





    public function usernameCheck($uname){


       $data = $this -> tinusernameCheck($uname);


       $num_user        = $data['num'];
       

       if ($num_user > 0 ) {
       	 return "<p class=\"alert alert-warning\">Username Already exists!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
       }else{
       	 return "<p class=\"alert alert-success\">Username Available ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
       }

       
     




    }



    public function tinusernameCheck($uname)

    {
         

      return $data = $this -> singleData('adminis',[


               'uname' =>  $uname

         ]);






    }



    public function singleUserview ($id){




     return $data = $this -> showSingle('adminis',$id);



    }


















}







 ?>