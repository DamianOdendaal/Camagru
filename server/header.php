// header here bruh 

<html>
    <head>
        <style>
		body {
			background: url('https://images.unsplash.com/photo-1541516160071-4bb0c5af65ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80') no-repeat;
			background-size:cover;
		}
		ul {
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul li {
			float:left;
			width: 200px;
			height: 40px;
			background-color:grey;
			opacity: .8;
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
		}
		ul li ul li {
			display: none;
		}
		ul li:hover ul li {
			display: block
		}
        </style>
    </head>
            <div class = "header" style = "background-color: grey;">
                <h1 style = "margin-top:1%;">Camagru</h1>
                <h4><a href = "">Login</a> &nbsp <a href = "">Register</a></h4>
            </div>
        <div class = "menu_bar">
            <ul>
                <li class = "active" id = "login"><a href = "">Home</a></li>
                <li><a href = "">About us</a>
                    <ul>
                        <li><a href = "">Our Team!</a></li>
                        <li><a href = "">Camagru News!</a></li>
                        <li><a href = ""></a></li>
                	</ul>
                 </li>
                 <li><a href = "">My Gallery</a>
               <li><a href = "https://web.whatsapp.com/">Contact us</a></li>
            </ul>
        </div>
</html>

