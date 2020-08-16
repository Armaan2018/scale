
<?php 



include_once 'templates/headerpart.php';



 ?>



<?php include_once 'templates/middle.php'; ?>


              <section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <div class="m-b-md"><h3 class="m-b-none">Static Table</h3></div>


            <button id="add_user_button">Add User</button>


                   <div id="add_user_modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"></div> -->
                                <div class="modal-body">
                                    <h2>Add new User</h2>

                                    <div id="keyupmsg"></div>

                                    

                                    <hr>


                                    <form id="add_user_form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" name="name" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input class="form-control" id="uname" name="uname" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" name="email" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Cell</label>
                                            <input class="form-control" name="cell" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control" name="role" id="">
                                                <option value="">- select -</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>


                                         <div class="form-group">
                                            <label for="">photo</label>
                                            <input class="form-control" name="photo" type="file">
                                        </div>


                                        <div class="form-group">
                                            <label for=""></label>
                                            <input class="btn btn-primary" name="add" type="submit" value="Add User">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer"></div> -->
                            </div>
                        </div>
                    </div>












<!---- edit form  ---->


<div id="update_user_modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"></div> -->
                                <div class="modal-body">
                                    <h2>Update User</h2>

                                    <div id="keyupmsg"></div>

                                    

                                    <hr>


                                    <form id="update_user_form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" name="name" type="text" value="name">
                                            <input class="form-control" name="user_id_update" type="hidden">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input class="form-control" id="uname" name="uname" type="text" value="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" name="email" type="text" value="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Cell</label>
                                            <input class="form-control" name="cell" type="text" value="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control" name="role" id="">
                                                <option value="">- select -</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>

                                                   
                                        <div class="form-group">
                                        <div class="am text-center">
                                        <img id="image_edit_id" src="images/a0.png" style="height: 120px;
                                        width: 120px;">
                                        </div>
                                        </div>


                                 <div class="form-group">
                                            <label for="">photo</label>
                                            <input class="form-control" name="photo" type="file" placeholder="name">
                                        </div>


                                        <div class="form-group">
                                            <label for=""></label>
                                            <input class="btn btn-primary" name="add" type="submit" value="Update User">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer"></div> -->
                            </div>
                        </div>
                    </div>





















<!---   profile page  -->


 <div id="single_show_modal" class="modal fade">
                        <div class="modal-dialog">
                                <div class="modal-body">



                      

<section class="panel no-border bg-dark lt">




 <div class="panel-body">
  <div class="row m-t-xl"> 

<div class="col-xs-3"></div>

    <div class="col-xs-6 text-center">
     <div class="inline">
     <div class="easypiechart easyPieChart" data-percent="75" data-line-width="6" data-bar-color="#fff" data-track-color="#2796de" data-scale-color="false" data-size="140" data-line-cap="butt" data-animate="1000" style="width: 140px; height: 140px; line-height: 140px;"> 
        <div class="thumb-lg avatar"> <img id="photo_of_user" src="images/a5.png" class="dker"> </div> 
        <canvas width="140" height="140"></canvas></div>
           <div class="h4 m-t m-b-xs font-bold text-lt" id="name_of_user">John.Smith</div> <small class="text-muted m-b" id="role_of_user">Art director</small> </div> </div> 
  


<div class="col-xs-3"></div>

           </div> 
           <div class="wrapper m-t-xl m-b"> 
            <div class="row m-b">
             <div class="col-xs-6 text-right"> <small>Cell Phone</small> 
                <div class="text-lt font-bold" id="cell_of_user">1243 0303 0333</div> </div> 
                <div class="col-xs-6"> <small >Email</small> 
                    <div class="text-lt font-bold" id="email_of_user">+32(0) 3003 234 543</div>
                     </div> 
                       </div> 
                     <div class="row"> <div class="col-xs-6 text-right"> <small>Reporter</small> <div class="text-lt font-bold">Coch Jose</div>
                      </div>
                      <div class="col-xs-6"> <small>Manager</small> 
                        <div class="text-lt font-bold">James Richo</div> 
                    </div> 
                </div> 
            </div> 
        </div>




 <footer class="panel-footer dk text-center no-border"> 

    anything

<!-- <div class="row pull-out"> <div class="col-xs-4"> <div class="padder-v"> <span class="m-b-xs h3 block text-white">245</span> <small class="text-muted">Followers</small> </div> </div> <div class="col-xs-4 dker"> <div class="padder-v"> <span class="m-b-xs h3 block text-white">55</span> <small class="text-muted">Following</small> </div> </div> <div class="col-xs-4"> <div class="padder-v"> <span class="m-b-xs h3 block text-white">2,035</span> <small class="text-muted">Tweets</small> </div> </div> </div>
 -->


  </footer> </section>


















</div>

</div>
</div>










            <div class="row">
                <div class="col-sm-12">
                    <section class="panel panel-default">
                        <div class="mess"></div>
                        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> Tasks</header>
                        <table class="table table-striped m-b-none">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>name</th>
                                    <th>username</th>
                                    <th>cell</th>
                                    <th>Role</th>
                                    <th>image</th>
                                    <th>action</th>
                                    
                                </tr>
                            </thead>
                            <tbody id="table_users">
   
                            </tbody>
                        </table>
                    </section>
                </div>
     
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<?php include_once 'templates/footer.php'; ?>