<?php
      include_once'functions.php';
      $usermame = "";
      $id = "";
      $dp= "";
      $phone = "";
      $other_contact = "";
        $id = $_SESSION["id"]; 
        $sql = "SELECT * FROM toonist WHERE id=".$id;
        $q = $db->query($sql);
        if($q){
              if(mysqli_num_rows($q)>0){
                  $row = mysqli_fetch_object($q);
                      $usermame=  $row->username;
                      $phone = $row->phone;
                      $other_contact = $row->facebook;
                      if($row->logo != ""){
                        $dp = "toonstore/".$row->logo;
                      }else{
                        $dp = "toonstore/man.png";
                      }
                  
              }else{

              }
        }else{

        }
        ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="emojionearea-master/dist/emojionearea.min.css" rel="stylesheet">
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
            
            .fa {
                color: teal;
            }
            
            @media only screen and (max-width:500px) {
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
                padding-left: 20px;
                padding-right: 20px;
                color: whitesmoke;
                align-items: center;
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
                .contain{
                    position: static;
                    height:85vh;
                    overflow-y: scroll;
                }
                .lef  a img  {
                       margin-right:10%;
                       width:200px;height:150px;
                   }
                .righ  a img {
                       margin-left:10%;
                       width:200px;height:150px;
                   }
                   .lef  a video {
                       margin-right:10%;
                       width:200px;height:150px;
                   }
                .righ a video {
                       margin-left:10%;
                       width:200px;height:150px;
                   }
                   .col-md-3{
                       display: none;
                   }
            }
            
            @media only screen and (min-width:500px) {
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
                padding-left: 100px;
                color: whitesmoke;
            }
            ul li a {
                display: flex;
                align-items: center;
                padding-left: 70px;
                color: whitesmoke;
            }
            ul li a i:hover {
                display: flex;
                text-decoration: none;
                background-color: whitesmoke;
                color: tomato;
            }
                .contain{
                    display: block;
                    position: static;
                    height:87vh;
                    overflow-y: scroll;
                    border-right: 2px solid teal;
                    border-left: 2px solid teal;
                }
            }
            #message{
                       width:80%;
                }
                
                form{
                    display:flex;
                    align-items: center;
                    margin-top:4px;
                }
                form i {
                    padding: 3px;
                    margin:2px;
                }
                form button{
                    margin-right:-10px; 
                }
               .chathead{
                background-color:green; 
                background: linear-gradient(90deg ,rgba(32,129,108,1),rgba(32, 71, 129,1));
                color:white;font-weight:bolder;display:flex; align-items:center; align-content:center;
               }
               #chatheaditemcontainer{
                font-weight:bolder;
                display:flex; 
                align-items:center;
                 align-content:center;
                margin: auto;
                padding:2px; 
               }
               .nametag{
                   padding-right:10px;
               }
                   li .fa{
                       color: whitesmoke;
                   }  

        </style>
    </head>
    <body>
    <div class="chathead">
<?php echo "<center id='chatheaditemcontainer'><h4 class='nametag'>$usermame</h4><img src='$dp' class='img-thumbnail' style='width:40px;height:30px;border-radius:10000px;'></center>" ?>
     </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 m-auto">
                    <div class="contain bg-light">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="headers" style="display:flex;align-items:center;">
                    <?php echo "<img src='$dp' class='img-thumbnail m-2' style='width:110px;height:90px;'><h4 class='text-warning'>$usermame</h4>"; ?>
                    </div>
                    <div>
                    <h5><i class="fa fa-phone-square" style="font-weight:bolder;margin-right:5px; margin-left:10px; color:orange;"></i><?php echo $phone; ?></h5>
                    <h5><i class="fa fa-address-book" style="font-weight:bolder;margin-right:5px; margin-left:10px; color:orange;"></i><?php echo $other_contact; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer fixed-bottom">
            <ul>
                <li><a href="index.html"><i class="fa fa-home pr-2 i"></i></a></li>
                <li><a href="request.html"><i class="fa fa-user-plus pr-2 i"></i></a></li>
                <li>
                    <a href="ad.html"><i class="fa fa-warehouse pr-2 i"></i>Store</a>
                </li>
                <li>
                    <a href="groups.html"><i class="fa fa-users pr-2 i"></i></a>
                </li>
                <li>
                    <a href="dash.html"><i class="fa fa-user pr-2 i"></i></a>
                </li>
            </ul>
            </div>
        </footer>
    </body>
    <script src="./jquery-3.4.0.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <script src="emojionearea-master\dist\emojionearea.min.js"></script>
    <script>
        $(document).ready(() => {
            $.ajax({
                    url: 'functions.php',
                    method: 'post',
                    data: {
                        'chatpage_friends': 'chatpage_friends'
                    },
                    success: (data) => {
                        $('.contain').html(data);
                    }
                });
        });
    </script>

    </html>