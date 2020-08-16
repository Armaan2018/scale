
<?php 



include_once 'templates/headerpart.php';



 ?>



<?php include_once 'templates/middle.php'; ?>


              <section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <div class="m-b-md"><h3 class="m-b-none">Static Table</h3></div>


            <button id="add_user_button">Add Student</button>

           <div class="studmsg"></div>


                    <div id="add_student_modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"></div> -->
                                <div class="modal-body">
                                    <h2>Add new Student</h2>
                                     <div class="msgstu"></div>
                                    <hr>
                                    <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Student Name</label>
                                            <input class="form-control" name="name" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Roll</label>
                                            <input class="form-control" name="roll" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Reg</label>
                                            <input class="form-control" name="reg" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Board</label>
                                            
                                            <select class="form-control" name="board">
                                                  <option value="" selected="">Select</option>
                                                  <option value="barisal">Barisal</option>
                                                  <option value="chittagong">Chittagong</option>
                                                  <option value="comilla">Comilla</option>
                                                  <option value="dhaka">Dhaka</option>
                                                  <option value="dinajpur">Dinajpur</option>
                                                  <option value="jessore">Jessore</option>
                                                  <option value="rajshahi">Rajshahi</option>
                                                  <option value="sylhet">Sylhet</option>
                                                  <option value="madrasah">Madrasah</option>
                                                  <option value="tec">Technical</option>
                                                  <option value="dibs">DIBS(Dhaka)</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Institute</label>
                                            <input class="form-control" name="inst" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Year</label>
                                            <select class="form-control" name="year">
                                                <option value="0000" selected="">Select</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Exam</label>
                                            <select class="form-control" name="exam">
                                                <option value="hsc">HSC/Alim/Equivalent</option>
                                                <option value="jsc">JSC/JDC</option>
                                                <option value="ssc">SSC/Dakhil</option>
                                                <option value="ssc_voc">SSC(Vocational)</option>
                                                <option value="hsc">HSC/Alim</option>
                                                <option value="hsc_voc">HSC(Vocational)</option>
                                                <option value="hsc_hbm">HSC(BM)</option>
                                                <option value="hsc_dic">Diploma in Commerce</option>
                                                <option value="hsc">Diploma in Business Studies</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <input class="" name="photo" type="file">
                                        </div>

                                        <div class="form-group">
                                            <label for=""></label>
                                            <input class="btn btn-primary" name="add" type="submit" value="Add Student">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer"></div> -->
                            </div>
                        </div>
                    </div>






<!-- view student info  -->
<div id="single_student_show" class="modal fade">
                        <div class="modal-dialog">
                                <div class="modal-body">



                      




    
<section class="panel no-border bg-dark lt">


<div class="contentof">

 <div class="panel-body">
  <div class="row m-t-xl"> 



    <div class="col-xs-6 text-center">
     <div class="inline">
     <div class="easypiechart easyPieChart" data-percent="75" data-line-width="6" data-bar-color="#fff" data-track-color="#2796de" data-scale-color="false" data-size="140" data-line-cap="butt" data-animate="1000" style="width: 140px; height: 140px; line-height: 140px;"> 
        <div class="thumb-lg avatar"> <img id="photo_of_user" src="images/a5.png" class="dker"> </div> 
        <canvas width="140" height="140"></canvas></div>
           



           </div> </div> 
  




           </div> 
           <div class="wrapper m-t-xl m-b"> 


            <div class="row m-b">

             <div class="col-xs-3 text-right"> <small>Name</small> 
                <div class="text-lt font-bold" id="name">1243 0303 0333</div> </div>


                <div class="col-xs-3"> <small >Roll</small> 
                    <div class="text-lt font-bold" id="roll">+32(0) 3003 234 543</div>
                     </div> 

                       </div> 



            <div class="row m-b">

             <div class="col-xs-3 text-right"> <small>Registration</small> 
                <div class="text-lt font-bold" id="reg">1243 0303 0333</div> </div>


                <div class="col-xs-3"> <small >Board</small> 
                    <div class="text-lt font-bold" id="board">+32(0) 3003 234 543</div>
                     </div> 

                       </div> 





            <div class="row m-b">

             <div class="col-xs-3 text-right"> <small>Institute</small> 
                <div class="text-lt font-bold" id="inst">1243 0303 0333</div> </div>


                <div class="col-xs-3"> <small >Year</small> 
                    <div class="text-lt font-bold" id="year">+32(0) 3003 234 543</div>
                     </div> 

                       </div> 

                                  <div class="row m-b">

             <div class="col-xs-6 text-center"> <small>Exam</small> 
                <div class="text-lt font-bold" id="exam">1243 0303 0333</div> </div>



                       </div> 




            </div> 
        </div>




 <footer class="panel-footer dk text-center no-border"> 

    anything

<!-- <div class="row pull-out"> <div class="col-xs-4"> <div class="padder-v"> <span class="m-b-xs h3 block text-white">245</span> <small class="text-muted">Followers</small> </div> </div> <div class="col-xs-4 dker"> <div class="padder-v"> <span class="m-b-xs h3 block text-white">55</span> <small class="text-muted">Following</small> </div> </div> <div class="col-xs-4"> <div class="padder-v"> <span class="m-b-xs h3 block text-white">2,035</span> <small class="text-muted">Tweets</small> </div> </div> </div>
 -->


  </footer>
</div>

   </section>




















</div>

</div>
</div>



<!---update form -->

<div id="update_student_modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"></div> -->
                                <div class="modal-body">
                                    <h2>Update User</h2>

                                    <div id="keyupmsg"></div>

                                    

                                    <hr>


                                    <form id="update_student_form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" name="name" type="text" value="name">
                                            <input class="form-control" name="student_id_update" type="hidden">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Roll</label>
                                            <input class="form-control" id="roll" name="roll" type="text" value="roll">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Reg</label>
                                            <input class="form-control" name="reg" type="text" value="reg">
                                        </div>


                                                          <div class="form-group">
                                            <label for="">Board</label>
                                            
                                            <select class="form-control" name="board">
                                                  <option value="" selected="">Select</option>
                                                  <option value="barisal">Barisal</option>
                                                  <option value="chittagong">Chittagong</option>
                                                  <option value="comilla">Comilla</option>
                                                  <option value="dhaka">Dhaka</option>
                                                  <option value="dinajpur">Dinajpur</option>
                                                  <option value="jessore">Jessore</option>
                                                  <option value="rajshahi">Rajshahi</option>
                                                  <option value="sylhet">Sylhet</option>
                                                  <option value="madrasah">Madrasah</option>
                                                  <option value="tec">Technical</option>
                                                  <option value="dibs">DIBS(Dhaka)</option>
                                            </select>

                                        </div>






                                         <div class="form-group">
                                            <label for="">Institute</label>
                                            <input class="form-control" name="inst" type="text" value="janina">
                                        </div>




                                       <div class="form-group">
                                            <label for="">Year</label>
                                            <select class="form-control" name="year">
                                                <option value="0000" selected="">Select</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                              </select>
                                        </div>



                                                             <div class="form-group">
                                            <label for="">Exam</label>
                                            <select class="form-control" name="exam">
                                                <option value="hsc">HSC/Alim/Equivalent</option>
                                                <option value="jsc">JSC/JDC</option>
                                                <option value="ssc">SSC/Dakhil</option>
                                                <option value="ssc_voc">SSC(Vocational)</option>
                                                <option value="hsc">HSC/Alim</option>
                                                <option value="hsc_voc">HSC(Vocational)</option>
                                                <option value="hsc_hbm">HSC(BM)</option>
                                                <option value="hsc_dic">Diploma in Commerce</option>
                                                <option value="hsc">Diploma in Business Studies</option>
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




<!-- end of update form -->




<!-- view student info  -->








            <div class="row">
                <div class="col-sm-12">
                    <section class="panel panel-default">
                        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> Tasks</header>

                        <div class="mess"></div>
                        <table class="table table-striped m-b-none">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>name</th>
                                    <th>roll</th>
                                    <th>reg</th>
                                    <th>board</th>
                                    <th>inst</th>
                                    <th>year</th>
                                    <th>exam</th>
                                    <th>photo</th>
                                    <th>action</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody id="stud_tbody">
                                
                                
                            </tbody>
                        </table>
                    </section>
                </div>
     
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<?php include_once 'templates/footer.php'; ?>