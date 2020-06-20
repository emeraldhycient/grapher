<?php
      include_once'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title> welcome to graphers , Where you can make friends to coloborate on projects</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        
        body {
            background-color: rgb(229, 236, 236);
        }        
        ol {
            list-style-type: none;
        }
        
        ol li {
            padding: 2px;
            display: inline-block;
        }
        
        #menu li {
            padding: 2px;
            display: inline-block;
        }
        
        nav {
            background-color: black;
            color: antiquewhite;
            padding: 5px;
        }
       
        
        @media only screen and (max-width:500px) {
          
            img {
                width: 100%;
                height: 200px;
                margin-top: -7.5px;
            }
            footer {
                display: flex;
                background-color: rgb(129, 136, 158);
                padding: 10px;
            }
            .footer {
                display: flex;
                background-color: rgb(129, 136, 158);
                height: 35px;
            }
            ul {
                display: flex;
                padding: 5px;
                margin: auto;
            }
            ul li {
                display: flex;
                align-items: center;
                padding-left: 10px;
                color: whitesmoke;
            }
            ul li a {
                display: flex;
                align-items: center;
                color: whitesmoke;
            }
            ul li a:hover {
                display: flex;
                align-items: center;
                background-color: whitesmoke;
                text-decoration: none;
                color: rgb(148, 93, 165);
            }
            .headicon {
                display: flex;
                padding: 2px;
                align-items: center;
                float: right;
                margin-top: -10%;
            }
        }
        
        @media only screen and (min-width:500px) {
           
            img {
                width: 100%;
                height: 350px;
                margin-top: -7.5px;
            }
           
            footer {
                display: flex;
                background-color: rgb(129, 136, 158);
                padding: 10px;
            }
            .footer {
                display: flex;
                background-color: rgb(129, 136, 158);
                height: 35px;
            }
            ul {
                display: flex;
                padding: 5px;
                margin: auto;
            }
            ul li {
                display: flex;
                align-items:center;
                padding-left: 100px;
                color: whitesmoke;
            }
            ul li a {
                display: flex;
                align-items:center;
                padding-left: 100px;
                color: whitesmoke;
            }
            ul li a:hover {
                display: flex;
                align-items:center;
                text-decoration: none;
                background-color: whitesmoke;
                color: rgb(148, 93, 165);
            }
            .headicon {
                display: flex;
                padding: 2px;
                align-items: center;
                float: right;
                margin-top: -3.5%;
            }
            
        }

        video{
            width:100%;
        }
     .headicon   .fa{
            color: tomato;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar-inverse">
            <div class="container">
            <h4 class="brand"> graphers</h4>
            <div class="headicon">
                <i class="fa fa-search m-2" onclick="openurl('searchpage.html')"></i>
                <i class="fa fa-film m-2" onclick="openurl('videopage.html')"></i>
                <i class="fa fa-envelope m-2" onclick="openurl('messages.php')"></i>
                <i class="fa fa-bell m-2"></i>
            </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
<div class="col-md-6  ml-auto mr-auto">
<?php

if(isset($_GET["post_id"])){
    $id = $_GET["post_id"]; 
   echo   viewpost($id,$db);
}
?>
</div>
        </div>
    </div>
    <footer>
        <div class="footer fixed-bottom">
            <ul>
            <li><a href="index.html"><i class="fa fa-home pr-2 i"></i>Home</a></li>
                <li><a href="request.html"><i class="fa fa-user-plus pr-2 i"></i>Request</a></li>
                <li>
                    <a href="ad.html"><i class="fa fa-warehouse pr-2 i"></i>Store</a>
                </li>
                <li>
                    <a href="groups.html"><i class="fa fa-users pr-2 i"></i>Groups</a>
                </li>
                <li>
                    <a href="dash.html"><i class="fa fa-user pr-2 i"></i>Profile</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
<script src="./jquery-3.4.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script><script>
     function openurl(url) {
        window.location.href = `${url}`;
    }

    $(document).ready(() => {
    /* $.ajax({
            url: 'functions.php',
            method: 'post',
            data: {
                'viewpost': 'viewpost'
            },
            success: (data) => {
                $('.row').html(data);
            }
        });*/
        
        });
</script>

</html>