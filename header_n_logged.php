

<html>
    <head>
        <style>
		body {
			background: url('https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80') no-repeat;
			background-size:cover;
			background-position: center;
		}
		.header {
			background-color: grey;
			opacity: .8;
		}
		ul {
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul li {
			float:left;
			width: 200px;
			height: 37px;
			background-color:grey;
			opacity: .7;
			line-height: 40px;
			text-align: center;
			font-size: 20px;
		}
		ul li a {
			text-decoration: none;
			color: white;
			display; block;
		}
		ul li a:hover {
			display:block;
			background-color:green;
			height: 37px;
		}
		ul li ul li {
			display: none;
		}
		ul li:hover ul li {
			display: block
		}
		h1 {
			text-align: center;
		}
		h4 {
			font-size: 125%;
			text-align:right;
			margin-right: 3%;
		}
		h4 a {
			color: black;
		}
        </style>
    </head>
            <div class = "header" style = "background-color: grey;">
                <h1 style = "margin-top:1%;">Camagru</h1>
                <h4><a href = "login.php">Login</a> &nbsp <a href = "sign_up.php">Register</a></h4>
        <div class = "menu_bar">
            <ul>
                 <li><a href = "gallery.php">My Gallery</a>
                <li><a href = "">About us</a>
                    <ul>
                        <li><a href = "members.php">Our Team!</a></li>
                        <li><a href = "camagru_news.php">Camagru News!</a></li>
                	</ul>
                 </li>
               <li><a href = "https://web.whatsapp.com/">Contact us</a></li>
            </ul>
        </div><br/><br/>
            </div>
</html>

