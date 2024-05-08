

<html>
<head></head>
<title>my calculator</title>
<body>
                        <input id="numb">   <input id="numb2"> 
                              <p id="result"></p>
                            

                        <script>
                            function product(){
                           
                            var a,b,text;

                            // Get the value of the input field with id="numb"
                            a = document.getElementById("numb").value;
                            b = document.getElementById("numb2").value;
                            //text=(a*b);

                                                           
                           // document.write(text).InnerHTML=text; 
                           document.getElementById("result").innerHTML = a * b;
                            }
                            
                        </script>

                            <button type="button" onclick="product()">calculate </button>

</body>
<html>
                            