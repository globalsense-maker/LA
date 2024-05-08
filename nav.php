 <!doctype html>
 <html>
	<head>
        <title>testing nav bar</title>

<style>
        .navbar {
            background-color: #333;
            position: relative;
            z-index: 999;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background: black;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            display: block;
            padding: 10px 20px;
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
        .navbar ul ul li a:hover {
            background-color: #555;
        }


</style>

</head>
<body>

<nav class="navbar">
	<ul>
		<li><a href="#">Home</a></li>
		<li>
			<a href="#">Dropdown</a>
			<ul>
				<li><a href="#">Option 1</a></li>
				<li><a href="#">Option 2</a></li>
				<li><a href="#">Option 3</a></li>
			</ul>
		</li>
		<li><a href="#">Contact</a></li>
	</ul>
</nav>

</body>
</html>
	
	
	
	
	
	
	



