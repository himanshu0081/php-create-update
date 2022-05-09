<html>
    <head>
      <style>
          .h-300{
    height: 700px;
}
.w-40{
    width: 60%;
}
.b-color{
    background-color: aqua;
}
.text-align{
    text-align: center;
}
.m-top{
    margin-top: -600px;
}
.m-left{
    margin-left: 240px;
}
.b-radius-2{
    border-radius: 33px;
    /* background-color: blueviolet; */
}
.container{
    max-width: 1520px;
    margin: 0 auto;
}
.f-left{
    margin-left: -105px;
}
.f-left-1{
    margin-left: -140px;
}
.m-215{
    margin:auto;
}
.p-top{
    padding-top: 20px;
}
.ba-img{
   background-image: url(1.jpg);
}
tr,td{
    padding: 13px;
}
.s-width{
    width: 67px;
}
.s-height{
    height: 30px;
}
.s-color{
    background-color: skyblue;
}
.bt-left{
    margin-left: 30px;
}
.px-40{
    padding-left: 30px;
    padding-right: 30px;
}
.py-10{
    padding-top: 10px;
    padding-bottom: 10px;
}
.bt-top{
    margin-top: 10px;
}


/* fonts  */
.f-40{
    font-size: 40px;
}
.f-600{
    font-weight: 600;
}

/* button  */
.login-btn-1{
    background: transparent;
        font-weight: 600;
}
.border-2{
    border-radius: 10px;
    background-color: white;
    border-width: 1px;
    border: 2px solid;
}
.text{
    color: cyan;
}
.error{
    color: #FF0000;
}
.errors{
    color: red;
}
      </style>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
    </head>
    <body>
        <section class="ba-img container">
            <div class="text-align h-300 p-top f-40 f-600">
                <span class="text">STUDENT REGISTRATION</span>
            </div>
            <div class="h-300 w-40 b-color text-align m-top m-left b-radius-2">
                <div class="p-top">
                    <form id="first_form" name="myform" action="action.php" method="POST" onsubmit="return validation()">
                       <table class="m-215">
                        <tr>
                            <td>FIRST NAME</td>

                            <td><input type="text" name="firstname" id="first_name" value="" maxlength="30"/><span id="First"></span>
                                <span class="error">* <?php echo $firstnameErr;?></span>
                            </td>
                            </tr>   
                            <p class="errors"></p> 
                             <br>
                            <!----- Last Name ---------------------------------------------------------->
                            <tr>
                            <td>LAST NAME</td>
                            <td><input type="text"  name="lastname" id="last_name" value="" maxlength="30" /><span id="last"></span>
                            <span class="errors">* <?php echo $lastnameErr;?></span>
                            </td>
                            </tr>
                            <p class="error"></p>
                             <br>
                            <!----- courses -------------------------------------------------------->
                            <tr>
                            <td>QUALIFICATION</td>
                            <td>
                                <select class="s-color s-width s-height f-600" name= "course" id="course">
                                <option value="select">Select Below</option>
                                   <option value="1">Post-Graduation</option>
                                   <option value="2">Graduation</option>
                                   <option value="3">12th</option>
                                   <option value="4">10th</option><span id="selects"></span>
                                </select>
                            </td>
                            </tr>

                            <!-- marks  -->
                            <tr>
                                <td>Marks:</td>
                                <td>
                                    <input type="text" name="marks" id="marks_ss" value="" maxlength="4" ><span id="mark"></span>
                                    <span class="error">* <?php echo $marksErr;?></span>
                                </td>
                                
                            </tr>
                                         <!-- email  -->
                            <tr>
                                <td>EMAIL ID</td>
                                <td><input type="text" name="email" id="email" value="" maxlength="100" /><span id="Message"></span>
                                    <span class="error">* <?php echo $emailErr;?></span>
                                </td>
                                
                                </tr>
                                <!-- mobile number  -->
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>
                                        <input type="text" name="numbers" id="numbers" maxlength="10" /><span id="mobile"></span>
                                        <span class="error">* <?php echo $numbersErr;?></span>
                                    </td>
                                  
                                </tr>
                                <!-- gender  -->
                                <tr>
                                    <td>Gender:</td>
                                        <td>
                                            Male <input type="radio" name="gender" id="gender" value="Male" />
                                            Female <input type="radio" name="gender" id="gender" value="Female" /><span id="Gender"></span>
                                            <span class="error">* <?php echo $genderErr;?></span>
                                            </td>
                                           
                                           
                                    </td>
                                </tr>

                                <!-- hobbies  -->
                                <tr>
                                    <td>Hobbies:</td>
                                    <td>
                                        cricket
                                            <input type="checkbox" name="hobbies" id="hobbie" value="cricket" />
                                        
                                
                                Exploring new places
                                <input type="checkbox" name="hobbies" id="hobbie" value="Explore new places" />
                                Tennis
                                <input type="checkbox" name="hobbies" id="hobbie" value="Tennis" /> <span id="invalid"></span>

                                    </td>
                                </tr>
                               
                                <!-- review  -->
                                <tr>
                                    <td>Comment:</td>
                                    <td>
                                        <textarea name="comments" id="comments" required>


                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                
                                </tr>
                                <td>
                                    <input type="submit" name="submit" value="submit" id="Submit" onclick="validation()" class="login-btn bt-top bt-text px-40 py-10 border-2 text-decoration f-36 f-600 bt-color bt-text">
                                </td>
                       </table>
                    </form>
                    <script>
        function validation(){
              
            var correct_way = /^[A-Za-z]+$/;
           var a = document.getElementById("first_name").value;
           if(a == ""){
                document.getElementById("First").innerHTML="**Please enter first Name**"
                return false;
            }
            if(!isNaN(a)){
                document.getElementById('First').innerHTML = "only characters allowed";
                return false;
            }
            if(a.match(correct_way))
                true;

                else{
                    document.getElementById('First').innerHTML = "only alphabets  allowed";
                return false;
                }
                if(a.length>10){
                document.getElementById("First").innerHTML="**maximum10 alphabets allowed**";
                       return false;
               }

                // last name 
                var d = document.getElementById("last_name").value;
           if(d == ""){
                document.getElementById("last").innerHTML="**Please enter last Name**"
                return false;
            }
            if(!isNaN(d)){
                document.getElementById('last').innerHTML = "only characters allowed";
                return false;
            }
            if(d.match(correct_way))
                true;

                else{
                    document.getElementById('last').innerHTML = "only alphabets  allowed";
                return false;
                }
                if(d.length>10){
                document.getElementById("last").innerHTML="**maximum 10 alphabets allowed**";
                       return false;
               }

                // qualification 


                var qualification = document.getElementById("course").value;

                if(qualification == ""){
                    document.getElementById("selects").innerHTML="**Please select qualification**"
                return false;

                }
                // marks 
                var marks = document.getElementById("marks_ss").value;
                if(marks == ""){
                document.getElementById("mark").innerHTML="**Please enter marks**"
                return false;
            }
            if(isNaN(marks)){
                document.getElementById('mark').innerHTML = "only digits allowed";
                return false;
            }
                      // email 

            var b = document.getElementById("email").value;
            if(b == ""){
                     document.getElementById("Message").innerHTML="**Invalid email**";
                       return false;
            }
               if(b.indexOf('@') <=0 ){
                document.getElementById("Message").innerHTML="**Invalid @ position**";
                       return false;
               }
               if(b.charAt(b.length-4)!='.'){
                document.getElementById("Message").innerHTML="**Invalid . position at 4**";
                       return false;
               }
            //   mobile number 
               var c = document.getElementById("numbers").value;
               if(c == ""){
                document.getElementById("mobile").innerHTML="**Please fill mobile number**";
                       return false;
               }
               if(c.length!=10){
                document.getElementById("mobile").innerHTML="**Write 10 digit mobile number**";
                       return false;
               }
               if(isNaN(c)){
                document.getElementById('mobile').innerHTML = "only digits allowed";
                return false;
            }
               if((c.charAt(0)!=9) && (c.charAt(0)!=8) && (c.charAt(0)!=7) && (c.charAt(0)!=6)){
 
                document.getElementById('mobile').innerHTML = "mobile number must start with 9,8,7,6";
                return false;

               }
                //    gender 
                var gender = document.myform.gender;
                for(i=0; i<gender.length; i++){
                   if(gender[i].checked==true)
                       return true;
                }
                document.getElementById('Gender').innerHTML = "please select gender"
                return false;


                // submit 
                 
         }
    
    </script>
                    </div>
            </div>
        </section>

    </body>
</html>
 


