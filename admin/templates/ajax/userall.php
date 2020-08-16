<?php 


require_once "../../../vendor/autoload.php";
require_once "../../../config.php";



 ?>


<?php 

 use App\controller\User;


 $adduser = new User;

  $data = $adduser -> userAll();

  $alldata = $data -> fetchAll();

  $i = 1;

  foreach ($alldata as $singledata ): ?>

  	                             <tr>
                                    <td><?php echo $i; $i++; ?></td>
                                    <td><?php echo $singledata['name']; ?></td>
                                    <td><?php echo $singledata['uname']; ?></td>
                                    <td><?php echo $singledata['cell']; ?></td>
                                    <td><?php echo $singledata['role']; ?></td>
                                    <td><img style="width: 50px;height:50px;" src="users/<?php echo $singledata['photo']; ?>" alt=""></td>
                                    <td>
                                        

             <a class="btn btn-sm btn-info" view_id = "<?php echo $singledata['id'];?>" id="single_view" href="#">View</a>
            <a class="btn btn-sm btn-warning" id="edituser" editid="<?php echo $singledata['id']; ?>" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" id="deluser" userid="<?php echo $singledata['id']; ?>" href="#">Delete</a>
                                    </td>
               
                                </tr>
                                

<?php endforeach; ?>