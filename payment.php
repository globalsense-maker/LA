
<!DOCTYPE html>
<html lang="en">

  <head>
    
    <link rel="stylesheet" href="style.css">
    <title>payments</title>
    <style>
        body{
            background-image: url('img/oc2.JPG');
            background-repeat:no-repeat;
            background-size: cover;
        }
        
          
         
            .btn{
                padding: 10px;
                background-color: green;
                font-weight: bolder;
                font-size: 1.0em;
                font-family: Georgia, 'Times New Roman', Times, serif;
                cursor: pointer;
                color: white;
                border-radius: 5px;
                position: relative;
                left:300px;
                top: 100px;

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
    background-color: #355A03;
    position: absolute;
    top:0px;
    right: 0px;
    width: 100%;
    padding: 10px 0px 0px 0px;
    margin: 0 auto;
    border: 0px solid rgba(7, 22, 92, 0.774);
    
    
}

.btn {
            background: rgb(48, 155, 226);
            border: 0px;
            color: rgb(17, 17, 17);
            left: 500px;
            width:20%;
            
            position: absolute;
            top: 300px;
            font-weight: bolder;
            font-size: 15px;
            font-family: Georgia;
            padding:25px;
            height: 10%;
            border-radius: 5px;
            box-shadow:2px 2px 2px 2px black;
            cursor: pointer;

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
        .container{
        padding: 30px;
        height: 300px;
        width: 90%;
        background-color:#E3DDCE ;
        border-radius: 5px;
        position: relative;
        top:100px;
        position: absolute;
        left: 20px;
        color:black;
        
        }
    
  .form-footer{
      position: absolute;
      bottom:800px;
      left:100px;
      
  }
 
    </style>      
  </head>
  <body>
  <div class="wrapper-main"></div>
    <nav class="navbar">
                    <ul>
                        <li><a href="#" class="nvh">Home</a></li>
                        <li><a href="#" class="nva">About</a></li>
                        <li><a href="#" class="nvs">Service</a></li>
                        
                            
                     
                        <li class="logo-align">
                            <a href="#"><img src="img/s-logoii.JPG" class="img-size" ></a>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Online Courses</a></li>
                                <li><a href="#">Tutoring Service</a></li>
                                <li><a href="#">Learning Resources</a></li>
                                <li><a href="#">Learning Community</a></li>
                                <li><a href="#">FAQ</a></li>

                            </ul>

                                   
                              
                        </li>

    </nav>
         

    <form>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <button type="button" class="btn" onclick="payWithPaystack()"> Make Payment Now </button> 

    

    <!-- place below the html form -->
        <script>
        function payWithPaystack(){
            var handler = PaystackPop.setup({
            key: 'pk_live_b68116dfd2e2d1408533a6e481e4f2218b8d26a0',
            //pk_live_b68116dfd2e2d1408533a6e481e4f2218b8d26a0
            email: 'customer@email.com',
            amount: 10000,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "LearnersAnchor",
                        variable_name: "Mr Solomon",
                        value: "+2347066233903"
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
    </form>
  
    
</body>
</html>