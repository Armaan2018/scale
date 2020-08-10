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


    /**
     * any kind of data check
     */

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



  /**
   * ANY KIND OF UPDATE
   */

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


  }











  







	



}













 ?>