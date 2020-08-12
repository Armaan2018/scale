<?php 



namespace App\controller;

use App\support\Database;
use PDO;

class Students extends Database
{

   public function addStudent($data)
   {
          
         

         $file_name = !empty($_FILES['photo']['name']) ? $this -> fileUpload($_FILES['photo'],'../../students/') : '';



          $this -> create('students',[


             'name'  => $data['name'],   
             'roll'  => $data['roll'],
             'reg'   => $data['reg'],
             'board' => $data['board'],
             'inst'  => $data['inst'],
             'year'  => $data['year'],
             'exam'  => $data['exam'],
             'photo' => $file_name,



          ]);


   }











   public function allStudents()

   {

       $data  =  $this -> showAll('students','ASC');
       
       return $data;

   }





   public function deleteStudents($id)
   {
        
       $data = $this -> delete('students',$id);
      
      if ( $data ) {
        return true;
      }


   }



}







 ?>