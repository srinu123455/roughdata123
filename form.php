<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="formedit.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="form.js"></script>
  <script src="formdata.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

  




 <style>
    .error{
      color: "red";
    }
  </style>


</head>
<body>
  //

  <?php include 'data.php';?>
  <div >
    <form method="POST" action="done.php" class="form" id="signupForm">
      <h1>student_form</h1>
     
              <!-- name -->

        <span for="name"  style="margin-right:px">name<span style="color:red">*</span></span>
           <input type="text" name="name" id="name"  style="margin:2px 12px 20px 0px  " value="<?php echo $name;?>">
             <div style="color:red"> <?php echo $nameErr;?></div>  

                          <!-- age -->
              
               <span for="password" style="margin:0px opx 20px 0px" >age<span style="color:red">*</span></span>
                 <input type="text" name="age" id="age" value="<?php echo $age;?>">
                   <div style="color:red"> <?php echo $ageErr;?></div>

                                               <!-- gender -->
                    <div class="radio">
                      <span for="password">gender<span style="color:red">*</span></span>
                          <input type="radio" name="gender"  value="male" style="margin-left: 15px";><span style="margin-left: 35px";>male</span>
                               <input type="radio" name="gender"  value="female" style="margin-left: 0px";><span style="margin-left: 15px";>Female</span><span style="margin-right:70px"></span>
                                 <span class="error"> <?php echo $genderErr;?></span></div>
            
                                       <br>
                                                         <!--  address -->

                                       <span for="address" >address<span style="color:red">*</span></span>
                                             <textarea  style="margin-right:40px" name="address" id="address" value="<?php echo $address;?>"></textarea>
                                               <div style="color:red"> <?php echo $addressErr;?></div>
                                             
                                                                        <!--   education -->
                                        <div class="checkbox1">
                                                <span for="education" >education<span style="color:red"></span></span>
                                                     <span style="margin:20px 140px 0px 0px"><input type="checkbox" id="school" name="education[]" value="High_school" for="High_school">High_school</span><br>
                                                       <span style="margin-right:75px"><input type="checkbox" id="inter"name="education[]"  value="Intermediate">Intermediate</span><br>
                                                          <span style="margin-right:105px"><input type="checkbox" id="degree" name="education[]" value="Degree">Degree</span><br>
                                                            <span style="margin-right:130px"><input type="checkbox" name="education[]" id="pg" value="PG">PG</span>
                                                            <div style="color:red"> <?php echo $educationErr;?></div>
                                        </div>

                                                                                              <!--  city -->

                                                              <span for="city">city<span style="color:red">*</span></span>
                                                                   <select name="city" id="things" style="margin:20px 40px 0px 0px">
                                                                    <option></option>
                                                                      <option>samarlakota</option>
                                                                      <option>west_godavari</option>
                                                                      <option>east_godavari</option>
                                                                      <option>visakhapatnam</option>
                                                                    </select>
                                                                   <div style="color:red"> <?php echo $cityErr;?></div><br>
 


        
       
                                       <input type="submit" id="submitBtn" value="submit" name="submit" class="add-row btn btnupdate" style="background-color:blue; color:white; text-align: center ;">
                                            <input type="reset"  value="clear" name="clear" class="btn1" id="clear" style="background-color:blue; color:white; text-align: center ;">
                                      

      
   </div>

</form>
<div class="table-responsive-lg">
    <table class="data-table"> 
        <thead>
            <tr style="background: orange;">
                <th>name</th>
                <th>age</th>
                <th>gender</th>
                <th>address</th>
                <th>education</th>
                <th>city</th>
                <th style="width:70px">action</th>
               
                


            </tr>
        </thead>
        <tbody>
            <tr>
           
                
                

            </tr>
        </tbody>

    </table>
    </div>
</body>
</html>
