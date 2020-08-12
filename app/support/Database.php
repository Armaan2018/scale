<?php 



namespace App\support;



use PDO;



/**
 * Database management
 */
abstract class Database
{

	/**
	 * server information
	 */

	private $host = HOST;
	private $user = USER;
	private $pass = PASS;
	private $db   = DB;
	private $connection;

	/**
	 * Database connection through PDO
	 */


	private function connection()
	{
          

       return $connection = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db ,$this -> user , $this -> pass);

	}


  /*********************
   * Data Check Method * 
   ********************/
	public function dataCheck($tbl,array $data,$condition='AND')

	{
       

       $query_string = '';


        foreach ($data as $key => $val)
        {
               
        $query_string .= $key. "='$val' $condition ";

        } 
         
        $explode_string = explode(' ',$query_string);
        array_pop($explode_string);
        array_pop($explode_string);


         $final_string   = implode(' ', $explode_string);





       $sql  = "SELECT * FROM $tbl WHERE $final_string";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();
       $num  = $stmt -> rowCount();

       return[
        
        'num'  =>  $num,
        'data' =>  $stmt



       ];

        

	}


  /********************
   * Inserting Method * 
   *******************/

  public function create($tbl,$data)

  {

    //array key
    $key_arr = array_keys($data);
    $tbl_col = implode(',', $key_arr);

    //array val


    $val_arr = array_values($data);
    

    foreach ($val_arr as $values) {
      $form_value[] = "'".$values."'";
    }

    $get_val = implode(',', $form_value);


   



       $sql  = "INSERT INTO $tbl ($tbl_col) VALUES($get_val)";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();


       if ( $stmt ) {
         return true;
       }else{
         return false;
       }

  }


  /********************
   * Showing Method * 
   *******************/


  public function showAll($tbl,$order='DESC')
  {
      



       $sql  = "SELECT * FROM $tbl ORDER BY id $order";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();
       return $stmt;


  }


  /********************
   * Delete Method * 
   *******************/

  public function delete($tbl,$id)

  {
      
       $sql  = "DELETE FROM $tbl WHERE id = '$id'";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();
       return true;



  }






 /*****************
   * fileup Method * 
   ****************/

  

protected function fileUpload($file, $location = '', array $file_type = ['jpg','png','jpeg', 'gif'])
  {
    
    // file info
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];

    // File extension 
    $file_array = explode('.', $file_name);
    $file_extension = strtolower(end($file_array ));

    // unique name 
    $unique_file_name = md5(time().rand()) .'.'.$file_extension;

    // File uplaod 
    move_uploaded_file( $file_tmp , $location . $unique_file_name );

    return $unique_file_name;
  }


  /*****************
   * Update Method * 
   ****************/

  public function update($tbl,$id,array $data)
  {

      $query_string = "";

      foreach ($data as $key => $val) {
        $query_string .= "$key = '$val' , ";
      }
      $explode_string = explode(' ',$query_string);
        array_pop($explode_string);
        array_pop($explode_string);


    $final_string   = implode(' ', $explode_string);





       $sql  = "UPDATE $tbl SET $final_string WHERE id = '$id'";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();

       if ( $stmt ) {
         return true;
       }else{
        return false;
       }


  }




  /*********************
   *single Data Check Method * 
   ********************/
 

 public function singleData($tbl,array $data)

 {



  $query_string = '';


        foreach ($data as $key => $val)
        {
               
          $query_string .= $key. "='$val'";

        } 
         
     








  $sql  = "SELECT * FROM $tbl WHERE $query_string";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();
       $num  = $stmt -> rowCount();

   
 return[
        
        'num'  =>  $num,
        'data' =>  $stmt



       ];

        

 }













  public function showSingle($tbl,$id)
  {
      



       $sql  = "SELECT * FROM $tbl WHERE id = '$id' ";
       $stmt = $this -> connection() -> prepare($sql);
       $stmt -> execute();
       return $stmt;


  }

  







	



}













 ?>