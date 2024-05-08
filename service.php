<?php 
include('tutor-function.php');
include_once 'db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
    <link rel="stylesheet" href="css/loginn.css">
	<meta charset = "utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
        body{
            background-image: url('img/pt2.jpg');
            background-repeat:repeat;
            background-size: contain;
        }

.wrapper-main{

        
background-size: cover;
background-repeat: repeat;

}

.wrapper-main{
position: absolute;
width: 100%;
padding: 200px 10px 200px 10px;
margin: 0 auto;

}



@media only screen and (max-width: 600px) {
.wrapper-main{
    width: 100%;
    
}

}
.container{

text-align: center;
margin-bottom : 2rem;
line-height: 0.5
}


@media only screen and (min-width: 601px) and (max-width: 768px){
.wrapper-main{
    width: 100%;

}

}

.navbar {
    background-color: #3F0C03;
    position: absolute;
    top:0px;
    right: 0px;
    width: 100%;
    padding: 10px 0px 0px 0px;
    margin: 0 auto;
    border: 0px solid rgba(7, 22, 92, 0.774);
    
    
}



.nvh{
    position: absolute;
    margin-left: 1px;
    margin-top: -40px;
}

.nva{
    position: absolute;
    margin-left: 100px;
    margin-top: -40px;
}

.nvs{
    position: absolute;
    margin-left: 200px;
    margin-top: -40px;
}


.navbar ul {
    list-style-type: none;
 
}

.navbar li {
    display: inline-block;
}

.navbar li a {
    color: white;
    font-weight: bolder;
    font-size: 15px;
    font-family: Georgia;
    display: block;
    padding: 10px;
    text-decoration: none;
}

/* Style the dropdown menu */
.navbar ul ul {
    position: absolute;
    top: 100%;
    display: none;
}

.navbar ul ul li {
    display: block;
}

.navbar li:hover ul {
    display: block;
}

/* Change the background color of dropdown links on hover */
.navbar ul li a:hover {
    background-color: whitesmoke;
    
}
.logo-align{
    position:absolute;
    right:100px;
    margin-top: -25px;

    
}
.img-size{
    height:35px;
    position: relative;
    display: block;
    right: -70px;
    bottom: 10px;
}
        .login-container{
            
            width: 90%;

        }
    
    .form-input{
      background: whitesmoke;
      border: 1px solid #eeeeee;
      padding: 12px;
      width: 70%;
      left:50px;
      position: absolute;
      bottom:120px;
  }
  .form-footer{
      position: absolute;
      bottom:30px;
      left:50px;
      
  }
  .form-button{
      display: block;
      background: red;
      border: 1px solid #ddd;
      color: #ffffff;
      padding: 10px;
      width: 70%;
      text-transform: uppercase;
      left:50px;
      position: absolute;
      bottom:60px;
      cursor: pointer;
  }

  .container{
                background-color:  #e5f5f2 ;
                padding-bottom: 10em;
                align-content: center;
                position:absolute;
                width:90%;
                height:250%;
                left:10px;
                border-radius: 5px;
            }

       .os{
        color:blue;
        font-size: larger;
        line-height: normal;
        font-weight: bolder;
     
       }

       .os2{
        color:green;
        font-size: larger;
        line-height: normal;
        font-weight: bolder;
     
       }

       .os3{
       
        font-size: larger;
        line-height: normal;
        font-weight: bolder;
        color:black;
     
       }
       
       .os4{
       
       font-size: larger;
       line-height: normal;
       font-weight: bolder;
       color:#040634;
    
      }

       .imggg{
        width:50%;

       }
       
      
      </style>
</head>
<body>
     
<form  class="container">

            
<p><font color="red"><b><font size="5"> Our Service Include:</p></font></b>
<p>___________________________________________</p>
<p class="os"> We offer a comprehensive range of educational services designed to cater to the diverse needs of learners.</p> 
<p>___________________________________________</p>
<p><font color="brown"><b> <font size="5"> <a   style="text-decoration:none" href="online-service.php">online service</a></p></font></b>
<img src="img/oc2.jpg" class="imggg">
<p class="os2">We provide a wide array of online courses on various subjects, from academic disciplines to professional development.<br> Our courses are developed by experienced educators and industry experts, ensuring that learners receive relevant and up-to-date knowledge.</p>
<p>___________________________________________</p>
</img>
<p><font color="brown"><b><font size="5"> Tutoring Service</p></font></b>
<img src="img/ts6-bg.PNG" class="imggg">
<p class="os3">Our dedicated team of qualified tutors is available to provide personalized and tailored support to learners. Whether it's academic tutoring, test preparation, or assistance with specific subjects, our tutors are here to guide and mentor students on their educational journey.
</p>
</img>

<p>___________________________________________</p>

<p><font color="red"><b><font size="5"> <a   style="text-decoration:none" href="learning-resources.php">Learning Resources</p></font></b>
<img src="img/lr2.jpg" class="imggg">
<p class="os4"> We curate and develop a vast collection of learning resources, including textbooks, study guides, interactive materials, and educational apps. These resources are designed to enhance learning outcomes and provide learners with the tools they need to succeed.

</p>
</img>

</form>
				

   
</body>
</html>
