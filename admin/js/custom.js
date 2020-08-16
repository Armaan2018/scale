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


//********************************//
//*      All Users Function      *//           
//*******************************//


 function allUsers(){



 	$.ajax({


 		url : 'templates/ajax/userall.php',
 		success:function(data){

               $('#table_users').html(data);



 		}


 	});
 }


 allUsers();




//********************************//
//*     All Students Function   *//           
//*******************************//

 function allStudents(){



 	$.ajax({


 		url : 'templates/ajax/studetnsall.php',
 		success:function(data){

               $('#stud_tbody').html(data);



 		}






 	});
 }


 allStudents();





 // ********************************//
//     Username check             //           
 // ******************************//

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




 // ********************************//
//     Username check             //           
 // ******************************//
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


// ********************************//
//     delete users               //           
 // ******************************//



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






//profile single show


$(document).on('click','a#single_view',function(){

         $('#single_show_modal').modal('show');


         let view_id = $(this).attr('view_id');


         $.ajax({

         	url : 'templates/ajax/singleviewuser.php',
         	method : "POST",
         	data : { id : view_id },
            
            success : function(data){


            		let single_data = JSON.parse(data);

					$('img#photo_of_user').attr('src', 'users/' + single_data.photo);
					$('#name_of_user').text(single_data.name);
					$('small#role_of_user').text(single_data.role);
					$('#cell_of_user').text(single_data.cell);
					$('#email_of_user').text(single_data.email);
		

            }










         });

     return false;

});


// single show student view


 $(document).on('click','a#view_stud',function(){
 
            $('#single_student_show').modal('show');
            let view_id = $(this).attr('view_id');

            $.ajax({


              url     : 'templates/ajax/singlstudview.php',
              method  : "POST",
              data    : {id : view_id},
              success : function(data){
                   

                   let single = JSON.parse(data);


                   $('#name').text(single.name);
                   $('#roll').text(single.roll);
                   $('#reg').text(single.reg);
                   $('#board').text(single.board);
                   $('#inst').text(single.inst);
                   $('#year').text(single.year);
                   $('img#photo_of_user').attr('src','students/' + single.photo);




                       
              }


           

            });
          

  return false;


 });

















/////update user form


function test(id)

{
 $.ajax({

         url     : 'templates/ajax/placeeditusers.php',
         method  : "POST",
         data    : {id : id},
         success : function(data){
           

          let edit_data = JSON.parse(data);

           $('#update_user_modal input[name = "name"]').val(edit_data.name);
           $('#update_user_modal input[name = "uname"]').val(edit_data.uname);
           $('#update_user_modal input[name = "email"]').val(edit_data.email);
           $('#update_user_modal input[name = "cell"]').val(edit_data.cell);
           $('#update_user_modal select[name = "role"]').val(edit_data.role);
           $('#update_user_modal input[name = "user_id_update"]').val(edit_data.id);
           $('#update_user_modal img#image_edit_id').attr('src','users/' + edit_data.photo);

        
         }


        }); 


}





$(document).on('click','a#edituser',function(event){

         event.preventDefault();
         let edit_id = $(this).attr('editid');

          
         test(edit_id);




         

        $('#update_user_modal').modal('show');
         


        

});





////////////////////


//update user form//

$(document).on('submit','form#update_user_form',function(event){

         event.preventDefault();

         $.ajax({

          
         url : 'templates/ajax/updateusers.php',
         data   : new FormData(this),
         contentType:false,
         processData : false,
         method : "POST",
         success:function(data){
                 $('.mess').html(data);
                 $('#update_user_modal').modal('hide');
                 allUsers();



         }






         });


});











$(document).on('click','a#edit_stud',function(event){
             event.preventDefault();

           let edit_id = $(this).attr('edit_id');

           $('#update_student_modal').modal('show');


           $.ajax({

            url     : 'templates/ajax/placeeditstud.php',
            method  : 'POST',
            data    : {id : edit_id},
            success : function(data){


              let single = JSON.parse(data);


              $('#update_student_modal input[name="name"]').val(single.name);
              $('#update_student_modal input[name="student_id_update"]').val(single.id);
              $('#update_student_modal input[name="roll"]').val(single.roll);
              $('#update_student_modal input[name="reg"]').val(single.reg);
              $('#update_student_modal select[name="board"]').val(single.board);
              $('#update_student_modal input[name="inst"]').val(single.inst);
              $('#update_student_modal select[name="year"]').val(single.year);
              $('#update_student_modal select[name="exam"]').val(single.exam);
              $('#update_student_modal img').attr('src','students/' + single.photo);

                  

            }




           });
           
          


});




//student form update 


$(document).on('submit','form#update_student_form',function(event){
       event.preventDefault();
       
       $.ajax({
            url     : 'templates/ajax/updatestud.php',
            data    : new FormData(this),
            contentType : false,
            processData  : false,
            method  : "POST",
            success : function(data){

                 $('.studmsg').html(data);
                 $('#update_student_modal').modal('hide');
                 allStudents();

            }





       });

});


















});
})(jQuery)




























