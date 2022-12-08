$(document).ready(function(){
   $(".data-table").hide();


        $(".add-row").click(function(){
          //  $("#submitBtn").ajaxForm({url: 'phpproject', type: 'post'})
         //  e.preventDefault();
         // $("#submitBtn").submit(function(e) {
      // e.preventDefault();
    //e.preventDefault(); // avoid to execute the actual submit of the form.

    //var form = $(this);
    //var actionUrl = form.attr('action');
    
  //  $.ajax({
    //   type: "POST",
     //   url: 'http://localhost/form.php',
      //  data: form.serialize(), // serializes the form's elements.
       // success: function(data)
      //  {
      //    alert(data); // show response from the php script.
       // }
  // });
//});
   
           
          
            $(".data-table").show();
            
            var name = $("#name").val();
            var age = $("#age").val();
            //var gender = $("#gender").val();
           // var gender=$('input[name="gender"]:checked').val();
           var gender = [];
           $.each($("input[name='gender']:checked"), function(){            
           gender.push($(this).val());
            });

         
            var address = $("#address").val();
            var education=$('input[name="education[]"]:checked').val();
           // $chk='';  
            //    foreach(education as chk1)  
                 //     {  
                   //  chk .= chk1.','; 
                 //     echo chk ;
                // }  
           // var education = $("#education").val();
           //var education = document.getElementsByName('location[]');
      //  var vals = "";
//for (var i=0, n=education.length;i<n;i++) 
//{
  //  if (education[i].checked) 
   // {
   //     vals += ","+education[i].value;
   // }
//}
//if (vals) vals = vals.substring(1);

 var city = $("#things").val();

var education = [];
$.each($("input[name='education[]']:checked"), function(){            
    education.push($(this).val());
});


        

            console.log(address);

            var markup = "<tr><td class='nameval'>" +name+ "</td><td class='ageval'>" + age + "</td><td class='genderval'>" + gender+ "</td><td class='addressval'>" + address + "</td><td class='educationval'>" + education + "</td><td class='cityval'>" + city + "</td><td><button class='btnDelete' style='background:lightblue;'><i class='fa fa-trash'></i></button> <button class='btnEdit' style='background:lightblue;'><i class='fa fa-pencil'></tr>";
            $("table tbody").append(markup);

            //setTimeout(tableShow(), 5000);
           
                });

 });

/*function tableShow() {
    console.log(34);
    $(".data-table").show();
}*/
    


$(document).on('click', '.btnDelete', function () {
    $(this).closest('tr').remove();
    alert("are you ok for delete the row");


});
        /*$("form").submit(function(e){
            e.preventDeafult();
            $(".add-row").click();

            var number = $("input[name='number']").val();
            var name = $("input[name='name']").val();
            var age = $("input[name='age']").val();
            var phone = $("input[name='phone']").val();
            var address = $("input[name='address']").val();
            
            $(".data-table tbody").append("<tr data-number='" +number+"' data-name='" +name+"' data-age='" +age+"' data-phone='" +phone+"' data-address='" +address+"'><td>" +number+ "</td><td>" + name + "</td><td>" + age + "</td><td>" + phone + "</td><td>" + address + "</td><td><button class='btnDelete' style='background:lightblue;'><i class='fa fa-trash'></i></button> <button class='btnupdate' style='background:lightblue;'><i class='fa fa-pencil'></button><button type='button' class='btnEdit'><i class='fa fa-pencil'></button></td></tr>");
            $("input[name='']").val("");
        });*/

 

$(document).on('click', '.btnEdit', function() {

var name = $("input[name='name']").val();
var age=  $("input[name='age']").val();
var gender= $("input[name='gender']").val();
var address=$("[name='address']").val();
var education=$("[name='education[]']").val();
//var city=$("input[name='city']").val();
var city=$("[name='city']").val();
$(this).closest('tr').find('td:eq(0)').html("<input name='name' value='"+name+"'>");
$(this).closest('tr').find('td:eq(1)').html("<input name='age' value='"+age+"'>");
$(this).closest('tr').find('td:eq(2)').html("<input name='gender' value='"+gender+"'>");
//$(this).closest('tr').find('td:eq(3)').html("<input name='address' value='"+address+"'>");
$(this).closest('tr').find('td:eq(3)').html("<input name='address' value='"+address+"'>");
$(this).closest('tr').find('td:eq(4)').html("<input name='education[]' value='"+education+"'>");
$(this).closest('tr').find('td:eq(5)').html("<input name='city' value='"+city+"'>");
//$(this).closest('tr').find('td:eq(5)').html("<input name='city' value='"+city+"'>");
$(this).closest('tr').find('td:eq(6)').append("<button type='button' class='btnupdate'>update</button>");
$(this).hide()


});


$(document).on('click', '.btnupdate', function() {

var name=$(this).parents('tr').find("input[name='name']").val();
var age=$(this).parents('tr').find("input[name='age']").val();
var gender=$(this).parents('tr').find("input[name='gender']").val();
var address=$(this).parents('tr').find("input[name='address']").val();
var address=$(this).parents('tr').find("input[name='address']").val();
var education=$(this).parents('tr').find("input[name='education[]']").val();
//var city=$(this).parents('tr').find("input[name='city']").val();
var city=$(this).parents('tr').find("input[name='city']").val();


$(this).parents('tr').find('td:eq(0)').text(name);
$(this).parents('tr').find('td:eq(1)').text(age);
$(this).parents('tr').find('td:eq(2)').text(gender);
$(this).parents('tr').find('td:eq(3)').text(address);
$(this).parents('tr').find('td:eq(4)').text(education);
$(this).parents('tr').find('td:eq(5)').text(city);
console.log(this);


$(this).parents('tr').attr('name',name);
$(this).parents('tr').attr('age',age);
$(this).parents('tr').attr('gender',gender);
$(this).parents('tr').attr('adddress',address);
$(this).parents('tr').attr('education',education);
$(this).parents('tr').attr('city',city);




//$(this).parents('tr').find('.btnEdit').show();
//$(this).parents('tr').find('.btnupdate').show();


/*$(this).parents('tr').find('.btnEdit').show();
$(this).parents('tr').find('.btnDelete').show();
*/
//$(this).parents('tr').find('.btnEdit').show();
//(this).parents('tr').find('.btnEdit').show();
//(this).parents('tr').find('.btnupdate').show();
//(this).parents('tr').find('.btnEdit').hide();
//$(this).parents('tr').find('.btnDelete').show();
$(this).parents('tr').find('.btnEdit').show();

$(this).parents('tr').find('.btnupdate').hide();
//$(this).parents('tr').find('.btnDelete').show();






});
