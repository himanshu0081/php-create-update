<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
  <body>
    <h2>HTML Forms</h2>

<form action="" id="first_form" name="form" method="POST" onsubmit="return validate()">
  <label for="fname">First name:</label><br>
  <input type="text" id="f_name" name="fname" value=""><span id="first"></span>
  <br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="l_name" name="lname" value=""><span id="last"></span>
  <br><br>
  <tr>
                <td>QUALIFICATION</td>
                      <td>
                <select class="s-color s-width s-height f-600" name= "course" id="course" onchange="myfun(this.value)">
                 <option value="select">Select Below</option>
               <option value="1">Post-Graduation</option>
                <option value="2">Graduation</option>
                  <option value="3">12th</option>
                  <option value="4">10th</option><span id="selects"></span>
                                </select>
                            </td>
                            </tr>
                            <br><br>
  <input type="submit" value="Submit">
</form> 
<script type="text/javascript">

   function myfun(data)
   {
    alert(data);

    var req = new XMLHttpRequest();
    req.open("GET","http://localhost/php/save.php?datavalue"+data,true);
    req.send();


    req.onreadystatechange=function(){

          if(req.readystate==4 $$ req.status==200){

              document.getElementById('course').innerHTML = req.responseText;
          }

    }
   }
 
    
   
</script>
  </body>

</html>





<!-- 
// function validate(){
              
              //           var correct_way = /^[A-Za-z]+$/;
              //          var a = document.getElementById("f_name").value;
              //          if(a == ""){
              //               document.getElementById("first").innerHTML="**Please enter first Name**"
              //               return false;
              //           }
              //           if(!isNaN(a)){
              //               document.getElementById('first').innerHTML = "only characters allowed";
              //               return false;
              //           }
              //           if(a.match(correct_way))
              //               true;
            
              //               else{
              //                   document.getElementById('first').innerHTML = "only alphabets  allowed";
              //               return false;
              //               }
              //               if(a.length>10){
              //               document.getElementById("first").innerHTML="**maximum10 alphabets allowed**";
              //                      return false;
              //              }
            
              //               // last name 
              //               var d = document.getElementById("l_name").value;
              //          if(d == ""){
              //               document.getElementById("last").innerHTML="**Please enter last Name**"
              //               return false;
              //           }
              //           if(!isNaN(d)){
              //               document.getElementById('last').innerHTML = "only characters allowed";
              //               return false;
              //           }
              //           if(d.match(correct_way))
              //               true;
            
              //               else{
              //                   document.getElementById('last').innerHTML = "only alphabets  allowed";
              //               return false;
              //               }
              //               if(d.length>10){
              //               document.getElementById("last").innerHTML="**maximum 10 alphabets allowed**";
              //                      return false;
              //              }
              //              var submit = true;
                        
              //             }
           -->