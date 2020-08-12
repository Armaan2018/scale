
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