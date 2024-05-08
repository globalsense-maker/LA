<html>
    <head>

    </head>
<body>
<center>
    <h1> how to get selected item</h1>
    <form method="POST">
        <select name="cars">
            <option selected disabled>-select exam-</option>
            <option value="5000"> IGCSE</option>
            <option value="7000"> CHECKPOINT</option>
            <option value="9000"> A-LEVEL</option>
            <option value="11000"> OTHERS</option>
        </select>
        <input type="submit"name="submit" value="calculate"/>





        <select type="text" class="f-status" name="first"  placeholder=" status"  required="required">
						    <option value="None">Select Duration/week</option>
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

    </form>

<?php
    if (isset($_POST['submit'])){
        $fullname = $_POST['first'];
        $getcar=$_POST['cars'];
        $ans=$fullname * $getcar;
        echo 'The amount is:'.'NGN'.$ans;
    }

?>
                                
</center>
</body>
</html>