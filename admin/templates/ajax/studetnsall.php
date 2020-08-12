<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\Students;


 $allstud = new Students;


 $data = $allstud -> allStudents();


 $alldata = $data -> fetchAll();

$i = 1;
foreach ($alldata as $single): 

	?>


	<tr>
                                    <td><?php echo $i; $i++; ?></td>
                                    <td><?php echo $single['name']; ?></td>
                                    <td><?php echo $single['roll']; ?></td>
                                    <td><?php echo $single['reg']; ?></td>
                                    <td><?php echo $single['board']; ?></td>
                                    <td><?php echo $single['inst']; ?></td>
                                    <td><?php echo $single['year']; ?></td>
                                    <td><?php echo $single['exam']; ?></td>
                                    <td><img style="width: 50px;height:50px;" src="students/<?php echo $single['photo']; ?>" alt=""></td>
                                    <td>
                                        

             <a class="btn btn-sm btn-info" href="#">View</a>
            <a class="btn btn-sm btn-warning" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" userid="<?php echo $single['id']; ?>" id="deluser" href="#">Delete</a>
                                    </td>
               
                                </tr>



	<?php endforeach; ?>