

<!DOCTYPE html>
<html lang="en">

<?php
include('tutor-function.php');
include_once 'db_connect.php';
?>


<?php 

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");
}
?>

  <head>
    
    <link rel="stylesheet" href="style.css">
    <title>online courses</title>
    <style>
         body{
            background-image: url("img/lrp2.jpg");
            background-repeat: no-repeat;
            background-size:cover;
           
               
           
            }
            .container{
                padding: 10px;
                background-color: white;
                height:60%;
                width:25%;
                position: absolute;
                left:600px;
                border-radius: 10px;
                top:250px;

            }
            .img-size{
                width: 30%;
                height:30%;
            }
            .legit{
                position: relative;
                left:100px;
            }

            .a1{
                color:blue;
                font-size: 1.5em;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .a{
                color:yellow;
                font-size: 2.5em;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif; 
                position: relative;
                top:40px;
            }
            .bttn{
                padding: 10px;
                background-color: #03610D;
                border-radius: 5px;
                font-size: 1em;
                font-family: Georgia;
                position: absolute;
                left: 800px;
                color:white;
                cursor: pointer;
            }

            .hh{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:200px;
                text-shadow: 1px 1px 1px black;

            }

            .hh1{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:600px;
                text-shadow: 1px 1px 1px black;

            }

            .hh2{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:1000px;
                text-shadow: 1px 1px 1px black;

            }

            
            .hh3{
                color: green;
                font-weight: bolder;
                font-size: 20px;
                font-family: Georgia;
                position: absolute;
                bottom: 700px;
                left:1400px;
                text-shadow: 1px 1px 1px black;

            }
            .vng{
                padding:10px;
                width: 100%;
                height: 40px;
                background-color: #EED9D9;
                position:absolute;
                top: -20px;
            }
            .tx{
                padding:15px;
                background-color: #E5E8E8;
                width: 35%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -70px;
                left: 31px;
                font-size: medium;
                font-weight: bolder;
                
            }
            .tx2{
                padding:15px;
                background-color: #E5E8E8;
                width: 31%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -70px;
                left: 55px;
                font-size: medium;
                font-weight: bolder;
                
            }

            .tx1{
                padding:15px;
                background-color: #E5E8E8;
                width: 80%;
                border-radius: 3px;
                border: 0px;
                position: relative;
                bottom: -50px;
                left: 31px;
                font-size: medium;
                font-weight: bolder;
                
            }
            .ay{
                color:red;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: bolder;
                font-size: xx-large;
                position: absolute;
                left: 150px;
                bottom:400px;
            }

            .selectone1{
                padding: 15px;
                width: 40%;
                position: absolute;
                left:40px;
                top:200px;
                background-color: #E5E8E8;
                border: 0px;
                border-radius: 2px;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 0.8em;
                color:gray;
                
            }
            .selectone{
                padding: 15px;
                width: 36%;
                position: absolute;
                left:250px;
                top:200px;
                background-color: #E5E8E8;
                border: 0px;
                border-radius: 2px;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 0.8em;
                color:gray;
                
            }
            .loveme{
                position:absolute;
                left:130px;
                top:270px;
                color: blue;
                font-family: 'Times New Roman';
                font-weight: bolder;
                font-size:2em;
            }

            .selectone2{
                padding: 10px;
                width: 70%;
                position: absolute;
                left:60px;
                top:370px;
                background-color: green;
                border-radius: 4px;
                font-weight: bolder;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 0.9em;
                color:white;
            }
            .btn{
                padding: 10px;
                width: 25%;
                background-color: #0BDDC3;
                font-weight: bolder;
                font-size: 1.em;
                font-family: Georgia, 'Times New Roman', Times, serif;
                cursor: pointer;
                color: white;
                border-radius: 5px;
                position: relative;
                left:130px;
                top: 210px;
                border:0px;

            }
            .n{
                position:absolute;
                top:665px;
                left:635px;
                color:red;
                font-size: medium;
                font-weight: bolder;
                font-style: italic;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .s{
                position:absolute;
                top:665px;
                left:700px;
                color:blue;
                font-size: small;
                font-weight: bolder;
                font-style: italic;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
    

    </style>
  </head>
  <body>
        <nav class="vng"></nav>
                    <p class="hh"><a href="#"style="text-decoration:none;">Home </p></a>
                    <p class="hh1"><a href="#"style="text-decoration:none;"> About</p></a>
                    <p class="hh2"><a href="#"style="text-decoration:none;"> Service</p>
                    <p class="hh3"><a href="#"style="text-decoration:none;"> FAQ</p>
    <center>
                <p class="a"> Online Courses  Subscription</p>
                
    </center>
        <div class="container">  

            <form method="post">
                    <p class="ay">Apply </p>
                <input text="text" placeholder="Enter Fullname" required="required" class="tx1" name="fullname"></input>
                    
                <input text="text" placeholder="Enter Email" required="required" class="tx" name="email"></input>
                
                <input type="date" placeholder="Enter date" required="required" class="tx2" name="date"></input>
                
                    <select class="selectone1" type="text" name="duration" required="required">
                                    <option value="None">Hour/week/month</option>
                                        <option value="1">1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        <option >6</option>
                                        <option >7</option>
                                        <option >8</option>
                                        <option >9</option>
                                        <option >10</option>                           
                                        <option >11</option>
                                        <option >12</option>
                                        <option >13</option>
                                        <option >14</option>
                                        <option >15</option>
                                        <option >16</option>
                                        <option >17</option>
                                        <option >18</option>
                                        <option >19</option>
                                        <option >20</option>
                                        <option >21</option>
                                        <option >22</option>
                                        <option >23</option>
                                        <option >24</option>
                                        <option >25</option>
                                        <option >26</option>
                                        <option >27</option>
                                        <option >28</option>
                                        <option >29</option>
                                        <option >30</option>
                                        <option >31</option>
                                        <option >32</option>
                                        <option >33</option>
                                        <option >34</option>
                                        <option >35</option>
                                        <option >36</option>
                                        <option >37</option>
                                        <option >38</option>
                                        <option >39</option>
                                        <option >40</option>
                                    
                        </select>

                <select class="selectone" name="exam">
                <option selected disabled> -Exam-</option>
                <option value="7000"> IGCSE</option>
                <option value="7000"> CHECKPOINT</option>
                <option value="12000"> A-LEVEL</option>
                <option value="7000"> OTHERS</option>
            </select>

                        <div class="loveme">
                           
                           <?php
                               if (isset($_POST['submit'])){
                                //    $fullname = $_POST['fullname'];
                                //    $exam=$_POST['exam'];
                                //    $duration=$_POST['duration'];
                                   $dur = $_POST['duration'];
                                   $getcar=$_POST['exam'];
                                   $ans=$dur * $getcar;
                                   //echo  'The amount is:<br>'.'NGN'.$ans;
                                   echo  'NGN'.(number_format($ans));
                                  // echo  'NGN'.($ans);


                                  $fullname = $_POST['fullname'];
                                  $email = $_POST['email']; 
                                  $exam= $_POST['exam']; 
                                  $duration = $_POST['duration']; 
                                  $date = $_POST['date'];

                                  $query = "INSERT INTO `tutor_data` (userid,fullname,email,phone_no,class_type,qualification,subject,state,address,lga) VALUES ('".$_SESSION['user']['id']."', '$fullname','$email','$phone_no','$class_type','$qualification','$subject','$address','$state','$lga')";
                                  if (mysqli_query($conn, $query)) {
                                      //echo " Step1 succeed proceed to step2";
                                  
                                      
                                  } else {
                                      echo "Error: " . $query . ":-" . mysqli_error($conn);
                                  }
   
   
   
                                  mysqli_close($conn);
                               }


                           ?>
                        </div>

                    <input class="selectone2" type="submit"name="submit" value="Get Payment"/>

                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    
                    <button type="button" class="btn" onclick="payWithPaystack()"> Pay Now </button> 

            

            <!-- place below the html form -->
            
                <script>
                            function payWithPaystack(){
                                var handler = PaystackPop.setup({
                                key: 'pk_live_b68116dfd2e2d1408533a6e481e4f2218b8d26a0',
                                
                                email: 'customer@email.com',
                                amount: <?php echo $ans ?>00,
                                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                metadata: {
                                    custom_fields: [
                                        {
                                            display_name: "LearnersAnchor",
                                            variable_name: "Mr Solomon",
                                            value: "+2348130200430"
                                        }
                                    ]
                                },
                                callback: function(response){
                                    alert('success. transaction ref is ' + response.reference);
                                },
                                onClose: function(){
                                    alert('window closed');
                                }
                                });
                                handler.openIframe();
                            }
                        
                         
                        </script>

                     
               


                              
                          
                    <p class="n">Note:</p>
                    <p class="s"> Once payment is acknowledge, <b>check your<br> mail to get access code to your class</p>
       

            </form>


            

        
       
            

        </div>
        
    </body>
</html>