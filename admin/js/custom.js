(function($){
	$(document).ready(function(){

		




//showing Modal
$(document).on('click','#add_user_button',function(){

     
   $('#add_user_modal').modal('show');




   return false;

	});




//showing student modal


$(document).on('click','#add_user_button',function(){

     
   $('#add_student_modal').modal('show');




   return false;

	});





 function allUsers(){



 	$.ajax({


 		url : 'templates/ajax/userall.php',
 		success:function(data){

               $('#table_users').html(data);



 		}


 	});
 }


 allUsers();




 function allStudents(){



 	$.ajax({


 		url : 'templates/ajax/studetnsall.php',
 		success:function(data){

               $('#stud_tbody').html(data);



 		}






 	});
 }


 allStudents();







///   testing purpose    successfull    ////


function keyupMsg (){

   
$("input#uname").keyup(function(){

      let uname = $(this).val().trim();

      if(uname != ''){

         $.ajax({
            url: 'templates/ajax/usernamecheck.php',
            type: 'POST',
            data: {uname: uname},
            success: function(response){

                $('#keyupmsg').html(response);

             }
         });
      }else{
         $("#keyupmsg").html("");
      }

    });





















}





  




keyupMsg();



 


//sj

$(document).on('submit','form#add_user_form',function(event){
  event.preventDefault();



let name   = $('input[name="name"]').val();
let uname  = $('input[name="uname"]').val();
let cell   = $('input[name="cell"]').val();
let email   = $('input[name="email"]').val();



if (name == "" || uname == "" ||cell == "" ||email == "") {

$('#keyupmsg').html('<p class="alert alert-danger">All Fields are required! <button class="close" data-dismiss="alert">&times;</button></p>');







}




else{


 $.ajax({

     url : 'templates/ajax/ajaxadduser.php',
     method : "POST",
     data   : new FormData(this),
     contentType : false,
     processData : false,
     success : function(data){

           $('form#add_user_form')[0].reset();
           $('#add_user_modal').modal('hide');
           $('.mess').html(data);keyupMsg();
           allUsers();

     }




  });



}









 





});


$(document).on('click','a#deluser',function(event){

 event.preventDefault();


 let del =  confirm('are you sure to delete');
 let id  = $(this).attr('userid');


 if (del == true) 
 {


 	$.ajax({


 		url : 'templates/ajax/deleteusers.php',
 		method : "POST",
 		data : {id : id},
 		success :function(data){
                  
                  $('.mess').html(data);
                  allUsers();

               
 		}




 	});
      
 }else
 {
     return false
 }





});






$(document).on('click','a#deluser',function(event){

 event.preventDefault();


 let del =  confirm('are you sure to delete');
 let id  = $(this).attr('userid');


 if (del == true) 
 {


 	$.ajax({


 		url : 'templates/ajax/delstudents.php',
 		method : "POST",
 		data : {id : id},
 		success :function(data){
                  
                  $('.studmsg').html(data);
                  allStudents();

               
 		}




 	});
      
 }else
 {
     return false
 }





});


























$(document).on('submit','form#add_student_form',function(event){
        event.preventDefault();


        let name   = $('input[name="name"]').val();
        let roll   = $('input[name="roll"]').val();
        let reg    = $('input[name="reg"]').val();


        if (name == '' || roll == '' ||reg == '') {



        	$('.msgstu').html('<p class="alert alert-danger">All Fields are required! <button class="close" data-dismiss="alert">&times;</button></p>');






        }else{

               $.ajax({


               	url         : 'templates/ajax/addstud.php',
               	method      : "POST",
               	data        : new FormData(this),
               	contentType : false,
               	processData : false,
               	success : function(data){

               		$('form#add_student_form')[0].reset();
               		$('#add_student_modal').modal('hide');
               		$('.studmsg').html('<p class="alert alert-success">Students Added Successfully! <button class="close" data-dismiss="alert">&times;</button></p>');
               		 allStudents();
                    
               		
               	}






               });


        }










});

















});
})(jQuery)




























