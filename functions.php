<?php
include_once "config.php";
        $usermame = '';
		$id= '';
        $img ="";
if(isset($_POST['page'])){
    //for fetching post
   $sql = " SELECT * FROM toon ORDER BY id DESC ";
		$query = $db->query($sql); 
    if($query){
        while($row= mysqli_fetch_object($query)){
                //for fetching poster img
            $sqlz = " SELECT * FROM toonist WHERE id=".$row->toonist_id ;
            $queryz = $db->query($sqlz); 
        if($query){
            while($rowz= mysqli_fetch_object($queryz)){
                if($row->extension != ""){
                    $ext = $row->extension ;
                    $allowed = ['mp4','mpg','mpeg',"m4v"];
    if(!in_array($ext,$allowed)){
        if($rowz->logo != ""){
            $temp = '
            <div class="card mb-1">
            <a href="viewpost.php?post_id='.$row->id.'">
            <div class="card-body">
            <img src="./toonstore/'.$row->toon.'">
            </div>
            <div class="card-footer">
            <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/'.$rowz->logo.'" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                          <p class="p-2">'.$row->caption.'</p><hr>
                          <ol>
                          <li><i class="fa fa-heart"></i></li>
                          <li><i class="fa fa-comment"></i></li>
                            <li><i class="fa fa-share"></i></li>
                        </ol>
                        <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
            </div>
            </a>
            </div>
            ';
            echo $temp;
            }else{
                $temp = '
                <div class="card mb-1">
                <a href="viewpost.php?post_id='.$row->id.'">
                <div class="card-body">
                <img src="./toonstore/'.$row->toon.'">
                </div>
                <div class="card-footer">
                <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/man.png" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                <p class="p-2">'.$row->caption.'</p><hr>
                              <ol>
                              <li><i class="fa fa-heart"></i></li>
                              <li><i class="fa fa-comment"></i></li>
                                <li><i class="fa fa-share"></i></li>
                            </ol>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                </div>
                </a>
                </div>
                ';
                echo $temp;
            }
    }else{
        if($rowz->logo != ""){
            $temp = '
            <div class="card mb-1">
            <a href="viewpost.php?post_id='.$row->id.'">
            <div class="card-body">
            <video src="./toonstore/'.$row->toon.'" controls>
            </div>
            <div class="card-footer">
            <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/'.$rowz->logo.'" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                          <p class="p-2">'.$row->caption.'</p><hr>
                          <ol>
                          <li><i class="fa fa-heart"></i></li>
                          <li><i class="fa fa-comment"></i></li>
                            <li><i class="fa fa-share"></i></li>
                        </ol>
                        <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
            </div>
            </a>
            </div>
            ';
            echo $temp;
            }else{
                $temp = '
                <div class="card mb-1">
                <a href="viewpost.php?post_id='.$row->id.'">
                <div class="card-body">
                <video src="./toonstore/'.$row->toon.'" controls>
                </div>
                <div class="card-footer">
                <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/man.png" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                <p class="p-2">'.$row->caption.'</p><hr>
                              <ol>
                              <li><i class="fa fa-heart"></i></li>
                              <li><i class="fa fa-comment"></i></li>
                                <li><i class="fa fa-share"></i></li>
                            </ol>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                </div>
                </a>
                </div>
                ';
                echo $temp;
            }
    }
    }else{
                }

        }
    }else{
        echo " error fetching users details<br>".mysqli_error($db);
    }
        }
    }else{
        echo " error fetching posts<br>".mysqli_error($db);
    }
}else if(isset($_POST['dash'])){
    // profile post
    $sql = ' SELECT * FROM toon WHERE toonist_id= '. $_SESSION["id"] .' ORDER BY id DESC ';
		$query = $db->query($sql); 
    if($query){
        while($row= mysqli_fetch_object($query)){
                //for fetching poster img
            $sqlz = " SELECT * FROM toonist WHERE id=".$row->toonist_id ;
            $queryz = $db->query($sqlz); 
        if($query){
            while($rowz= mysqli_fetch_object($queryz)){
                if($row->extension != ""){
                    $ext = $row->extension ;
                    $allowed = ['mp4','mpg','mpeg',"m4v"];
    if(!in_array($ext,$allowed)){
        if($rowz->logo != ""){
            $temp = '
            <a href="viewpost.php?post_id='.$row->id.'" class="mb-3">
            <div class="main">
            <div class="rounded img-thumbnail mt-2 p-2">
            <img src="./toonstore/'.$row->toon.'">
            </div>
                    <div class="second">
                          <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/'.$rowz->logo.'" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                          <p class="p-2">'.$row->caption.'</p><hr>
                          <ol>
                          <li><i class="fa fa-heart p-2 i"></i></li>
                          <li><i class="fa fa-comment p-2 i"></i></li>
                            <li><i class="fa fa-share p-2 i"></i></li>
                        </ol><hr>
                        <form class="form-inline" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="postid" value="'.$row->id.'">
                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                        </form>
                    </div>
                    </div></a><br>
            ';
            echo $temp;
            }else{
                $temp = '
                <a href="viewpost.php?post_id='.$row->id.'" class="mb-3">
                <div class="main">
                <div class="rounded img-thumbnail p-2 mt-2">
                <img src="./toonstore/'.$row->toon.'">
                </div>
                        <div class="second p-3">
                              <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/man.png" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                              <p class="p-2">'.$row->caption.'</p><hr>
                              <ol>
                              <li><i class="fa fa-heart p-2 i"></i></li>
                              <li><i class="fa fa-comment p-2 i"></i></li>
                                <li><i class="fa fa-share p-2 i"></i></li>
                            </ol><hr>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                        </div>
                        </div></a><br>
                ';
                echo $temp;
            }
    }else{
        if($rowz->logo != ""){
            $temp = '
            <a href="viewpost.php?post_id='.$row->id.'" class="mb-3">
            <div class="main">
            <div class="rounded img-thumbnail">
            <center>
            <video src="./toonstore/'.$row->toon.'" controls>
            </center>
            </div>
                    <div class="second p-3">
                          <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/'.$rowz->logo.'" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                          <p class="p-2">'.$row->caption.'</p>
                          <hr>
                          <ol>
                          <li><i class="fa fa-heart p-2 i"></i></li>
                          <li><i class="fa fa-comment p-2 i"></i></li>
                            <li><i class="fa fa-share p-2 i"></i></li>
                        </ol>
                        <hr>
                        <form class="form-inline" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="postid" value="'.$row->id.'">
                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                        </form>
                    </div>
                    </div></a><br>
            ';
            echo $temp;
            }else{
                $temp = '
                <a href="viewpost.php?post_id='.$row->id.'" class="mb-3">
                <div class="main">
                <div class="rounded img-thumbnail "><center>
                <video src="./toonstore/'.$row->toon.'" controls></center>
                </div>
                        <div class="second p-3">
                              <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/man.png" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                              <p class="p-2">'.$row->caption.'</p>
                              <hr>
                              <ol>
                              <li><i class="fa fa-heart p-2 i"></i></li>
                              <li><i class="fa fa-comment p-2 i"></i></li>
                                <li><i class="fa fa-share p-2 i"></i></li>
                            </ol><hr>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                        </div>
                        </div></a><br>
                ';
                echo $temp;
            }
    }
    }else{
                }

        }
    }else{
        echo " error fetching users details<br>".mysqli_error($db);
    }
        }
    }else{
        echo " error fetching posts<br>".mysqli_error($db);
    }
}else if(isset($_POST['dashuser'])){
                 $sql = "SELECT * FROM toonist WHERE id=".$_SESSION["id"];
                 $q = $db->query($sql);
                 if($q){
                        $row = $q->fetch_object();
                        if(!empty($row->logo)){
                             $output = '
                             <li class="profi">                    <img src="./toonstore/'.$row->logo.'" class="img-thumbnail" style="width:100%;height:120px;">
                             </li>
                             <center>
                             <li class="profi">
                             <h2>'.$row->username.'</h2>
                         </li>
                         <li class="btn dropdown-toggle profi" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h2> Info</h2>
                         </li>
  <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton">
  <center><p><h4>Contacts</h4></p></center>
    <a class="dropdown-item" href="#"><i class="fa fa-phone"></i>phone : +'.$row->phone.'</a>
    <a class="dropdown-item" href="#">others : '.$row->facebook.'</a>
    <center><p><h4>Address</h4></p></center>
    <a class="dropdown-item" href="#">Home  </a>
    <a class="dropdown-item" href="#">Office  </a>
  </div> 
                             ';
                             echo $output;
                        }else{
                            $output = '
                            <li>                    <img src="./toonstore/man.png" class="img-thumbnail" style="width:100%;height:120px;">
                            </li>
                            <center>
                            <li>
                            <h2>'.$row->username.'</h2>
                        </li>
                        <li class="btn dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <h2> Info</h2>
                        </li>
 <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton">
 <center><p><h4>Contacts</h4></p></center>
   <a class="dropdown-item" href="#">phone : +'.$row->phone.'</a>
   <a class="dropdown-item" href="#">others : '.$row->facebook.'</a>
   <center><p><h4>Address</h4></p></center>
   <a class="dropdown-item" href="#">Home  </a>
   <a class="dropdown-item" href="#">Office  </a>
 </div> 
                            ';
                            echo $output;
                        }  
                 }else{
                     echo "query didnt work<br>".$db->error;
                 }

}else if(isset($_POST['q'])){
    //search cartoonist
      $q = $_POST['q'];
   $sql = " SELECT * FROM toon WHERE username LIKE%q% ";
		$query = $db->query($sql); 
    if($query){
        while($row= mysqli_fetch_object($query)){
            $temp = '
                     <div class="profile">
                    <img src="./toonstore/'.$row->toon.'" class="img-fluid" style="width:200px;">
                                                <h6>'.$row->username.'</h6>
                    <ul id="profile">
                        <li>
                        '.$row->caption.'
                        </li>
                        <li>'.$row->date1.'</li>
                    </ul>
                </div>
            ';
            echo $temp;
        }
    }else {
                    $temp = '
                     <div class="profile">
                        <h5>no result found</h5>
                </div>
            ';
        echo $temp;
    }
}elseif (isset($_POST['upload'])) {
    //upload post
         if ( !empty($_POST["caption"])   || !empty($_FILES["photo"])  ) {
             if(check_extension($_FILES["photo"]["name"])){
                 $ext = check_extension($_FILES["photo"]["name"]);
                $path = "./toonstore/". basename($_FILES["photo"]["name"]);
        $toon = $_FILES["photo"]["name"];
        $caption = hack($_POST['caption']);
        $id = $_SESSION['id'];
        $move = move_uploaded_file($_FILES["photo"]["tmp_name"], $path);
		$sql = "INSERT INTO toon (caption,toon,toonist_id,extension) VALUES('$caption','$toon','$id','$ext')";
		$query = $db->query($sql);
		if ( $move) {
			if ($query ) {
                header("location:dash.html");
			} else {
                echo 'query error<br>'. mysqli_error($db);
			}
		} else {
            				
            echo '<script> alert("error moving file"); </script>';
            header("location:dash.html");
        }
    }else{
        echo '<script> alert("only upload the following types of allowed files gif,png,jpeg,jpg,mp4,mpg,mpeg,m4v");
        window.location="dash.html";
        </script>';
    }
	}else{
          
        echo  basename($_FILES["photo"]["name"]);
        echo $_POST['caption'];
             
		}
    }elseif( isset($_POST["status"]) ){
    if(isset($_SESSION["username"])){
        $stat = '
                                <li>
                            <a href="dash.html" class=" btn text-white"> profile</a></li>
                        <li><<br href="functions.php?action=logout" class=" text-white">log out</li>
        ';
        echo $stat;
    }else{
                $stat =  '
                                <li>
                            <a href="login.html" class=" btn text-white"> profile</a></li>
                        <li><a href="signup.html" class=" text-white">signup</li>
        
        ';
        echo $stat;
    }
   
}elseif(isset($_POST['signup'])){
       //signup
    if(!empty($_FILES['logo']['name']) && !empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['fb']) ){
         $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass == $cpass){
    $username = hack($_POST['username']);
    $pass = password_hash(hack($_POST['pass']),PASSWORD_BCRYPT);
    $phone = hack($_POST['phone']);
    $ocontact = hack($_POST['fb']);
    $image = $_FILES['logo']['name'];
    $path = "./toonstore/".basename($_FILES['logo']['name']);
    $move = move_uploaded_file($_FILES['logo']['tmp_name'],$path);
    $sql = "INSERT INTO toonist(username,phone,pass,facebook,logo) VALUES('$username','$phone','$pass','$ocontact','$image')";
    $query = $db->query($sql);
    if( $move){
        if($query){
        $username = $_SESSION["username"]= $username;
		$id = $_SESSION["id"]=$db->insert_id;
        header('location:dash.html');      
        }else{
echo 'query error'.mysqli_error($query);
        }
    }else{
                                        echo 'image could not be moved';
    

    }
         }else{
        echo "<script>alert('passwords doesnt match !');</script>";
    }
}else{
                echo "<script>alert('some fields are empty !'$db->error()'');</script>";
    }
   
}elseif(isset($_POST['login'])){
    //login
     $username = hack($_POST['username']);
    $pass = hack($_POST['pass']);
    $sql = "SELECT * FROM toonist WHERE username=".$username;
    $query = $db->query($sql);
    if($query){
        while($row = $query->fetch_object()){
    if(password_verify($pass,$row->pass)){
         $username =$_SESSION["username"]= $row->username;
		$id = $_SESSION["id"]=$row->id;
        header('location:dash.html');
    }else{
        echo "<script>alert(incorrect pass\n".mysqli_error($db)."');
        window.location='login.html';
        </script>";
    }
        }
    }else{
        echo "<script>alert(incorrect username\n".mysqli_error($db)."');
        window.location='login.html';
        </script>";
    }
}elseif(isset($_GET['action'])){
    //logout
    if($_GET['action'] == 'logout'){
    session_destroy();
            header('location:login.html');
    }
}elseif(isset($_POST['users'])){
   /*suggested users*/
    //fetch users
   $sql = "SELECT *  FROM friends";
   $q = $db->query($sql);
    if(mysqli_num_rows($q)>0){
             while($rw = mysqli_fetch_object($q)){
                 $sql2 = "SELECT * FROM toonist WHERE id!='$rw->person_id' AND id !='$rw->friend_id' || 
                 id!='$rw->friend_id' AND id !='$rw->person_id' ";
                 $q2 = $db->query($sql2);
                 if($q2){
                    if(mysqli_num_rows($q2)>0){
                            while($row = mysqli_fetch_object($q2)){
                                 if($row->logo != ""){
                        $output = ' 
                        <div class="card mb-2">
                        <div class="card-body">
                        <img src="./toonstore/'.$row->logo.'" class="img-thumbnail rounded">
                        </div>
                        <div class="card-footer">
                            <h5 class="">'.$row->username.'</h5><center>
                            <button class="btn"><a href="functions.php?add='.$row->id.'"><i class="fa fa-user-plus pr-1"></i>Follow</a></button>
                        </div>
                        </div>
                        ';
                        echo $output;
                     }else{
                        $output = ' 
                        <div class="card mb-2">
                        <div class="card-body">
                        <img src="./toonstore/man.png" class="img-thumbnail rounded">
                        </div>
                        <div class="card-footer">
                            <h5 class="">'.$row->username.'</h5><center>
                            <button class="btn"><a href="functions.php?add='.$row->id.'"><i class="fa fa-user-plus pr-1"></i>Follow</a></button>
                        </div>
                        </div>
                        ';
                        echo $output;
                     }
                            }
                    }else{

                    }
                 }else{
                    echo "error done happen where i dy fetch people from toonist table </br>".mysqli_error($db);
                 }
             }
    }else{
        echo "error done happen where i dy fetch people from friends table </br>".mysqli_error($db);
    }
  
}elseif (isset($_GET["add"])) {
    # add friend on the main page
    $receiver = $_GET["add"];
    $sender =$_SESSION["id"];
    if($_SESSION["username"] != ""){
        $msql = "SELECT * FROM friend_request WHERE sender='$sender' AND receiver=".$receiver;
        $mq=$db->query($msql);
        if(mysqli_num_rows($mq)==0){
            $sql1 = "SELECT * FROM friends WHERE friend_id='$sender' AND person_id=".$receiver." || friend_id='$receiver' AND person_id=".$sender;
            $mq1=$db->query($sql1);
            if($mq1){
            if(mysqli_num_rows($mq1)==0){ 
            $sql = "INSERT INTO friend_request (sender,receiver) VALUES ('$sender','$receiver')";
            $q = $db->query($sql);
            if($q){
                echo "<script>alert('friend added successful');
                window.location='index.html';
                </script>";
            }else{
                echo "<script>alert('unable to add friend\n".mysqli_error($db)."');
                window.location='index.html';
                </script>";
            }
        }else{
            echo "<script>alert('already friends');
            window.location='index.html';
            </script>";
        }
        }else{
            echo "<script>alert('query to check if already friends didnt run oh  \n".mysqli_error($db)."');
            window.location='index.html';
            </script>";
        }

        }else {
            echo "<script>alert('you have sent friend request to this person before just chill eh!');
            window.location='index.html';
            </script>";
         }
   
}else{
    echo "<script>alert('you must be logged in to be able to send friend request');
    window.location='index.html';
    </script>";
}
}elseif (isset($_POST["friends"])) {
    #fetch friends on the main page
    $output="";
    $sql = "SELECT * FROM friends WHERE person_id=".$_SESSION["id"];
    $q = $db->query($sql);
    if($q){
        while ($rw = mysqli_fetch_object($q)) {
        $subsql = "SELECT * FROM toonist WHERE id=".$rw->friend_id;
        $subq = $db->query($subsql);
        if($subq){
            if(mysqli_num_rows($subq)>0){
            while ($row = mysqli_fetch_object($subq)) {
                if($row->logo != ""){
                  echo $output = ' 
                <div class="people" style="margin-top: 2px;">
                                <a href="">
                                    <img src="./toonstore/'.$row->logo.'" class="img-thumbnail rounded">
                                    <div class="seconds">
                                        <h5 class="">'.$row->username.'</h5><center>
                                        <button class="btn btn-xs"><a href="chatpage.php?id='.$row->id.'"><i class="fa fa-envelope"></i>
                                        </a></button>
                                        <button class="btn btn-xs" id=""><a href="chatpage.php?id='.$row->id.'"><i class="fa fa-user"></i>
                                        </a></button></center>
                                    </div>
                                </a>
                            </div><br><br>
                '; 
                }else{
                    echo $output = ' 
                    <div class="people" style="margin-top: 2px;">
                                    <a href="">
                                        <img src="./toonstore/man.png" class="img-thumbnail rounded">
                                        <div class="seconds">
                                            <h5 class="">'.$row->username.'</h5><center>
                                            <button class="btn btn-xs"><a href="chatpage.php?id='.$row->id.'"><i class="fa fa-envelope"></i>
                                            </a></button>
                                            <button class="btn btn-xs" id=""><a href="profile.php?id='.$row->id.'"><i class="fa fa-user"></i>
                                            </a></button></center>
                                        </div>
                                    </a>
                                </div><br><br>
                    '; 
                }  
          }
        }else{
          echo   $output= " <h6>you have to make friends first before you can see any friend here..</h6>".mysqli_error($db);
        }
        }else{
           echo  $output= " <h6>error fetching friends</h6>".mysqli_error($db);
        }
    }
    }else {
        echo $output= " <h6>error getting friends id</h6>".mysqli_error($db);
    }
}elseif(isset($_POST['chatpage_friends'])){
   #fetch friends on the chat page
   $output="";
   $sql = "SELECT * FROM friends WHERE person_id=".$_SESSION["id"];
   $q = $db->query($sql);
   if($q){
       while ($rw = mysqli_fetch_object($q)) {
       $subsql = "SELECT * FROM toonist WHERE id=".$rw->friend_id;
       $subq = $db->query($subsql);
       if($subq){
           if(mysqli_num_rows($subq)>0){
           while ($row = mysqli_fetch_object($subq)) {
               if($row->logo != ""){
                 echo $output = ' 
                 <a href="chatpage.php?id='.$row->id.'" style="display:flex;align-items:center;" class="mb-2">
                 <img src="./toonstore/'.$row->logo.'" class="thumbnail p-2 mr-2 bg-white" width="80px" style="border-radius:100000px;">
                                       <h6 class="">'.$row->username.'</h6>
                                       </a><hr>
               '; 
               }else{
                   echo $output = ' 
                   <a href="chatpage.php?id='.$row->id.'" style="display:flex;align-items:center;" class="mb-2">
                   <img src="./toonstore/man.png" class="thumbnail p-2 mr-2 bg-white" width="80px" style="border-radius:100000px;">
                                           <h6 class="">'.$row->username.'</h6>
                                           </a><hr>

                   '; 
               }  
         }
       }else{
         echo   $output= " <h6>you have to make friends first before you can see any friend here..</h6>".mysqli_error($db);
       }
       }else{
          echo  $output= " <h6>error fetching friends</h6>".mysqli_error($db);
       }
   }
   }else {
       echo $output= " <h6>error getting friends id</h6>".mysqli_error($db);
   }
}elseif(isset($_POST["request"])){
    #show friend request
    echo friend_request ($db);
}elseif (isset($_GET["accept"])) {
    #accept friend request
    echo accept($db);
}elseif (isset($_GET["decline"])) {
    #decline friend request
    echo decline($db);
}elseif(isset($_POST["sendchat"])){
    #send chat message
    $id = $_POST["receiverid"] ;
    if(!empty($_POST["receiverid"])){
    if( !empty($_FILES["capture"]["name"]) || !empty($_POST["message"]) ){
        if(!empty($_FILES["capture"]["name"])){
        if(check_extension($_FILES["capture"]["name"])){   
           $ext = check_extension($_FILES["capture"]["name"]);
          # $filename = $_FILES["capture"]["name"];
           $path = "toonstore/".$_FILES["capture"]["name"];
           $receiverid = $_POST["receiverid"];
           $senderid  =$_SESSION["id"];
           $msg = $_POST["message"];
           if(move_uploaded_file($_FILES["capture"]["tmp_name"],$path)){
                   $sql = "INSERT INTO chats(sender,receiver,mssg,files,extension) VALUES ('$senderid','$receiverid','$msg','$path','$ext')";
                    $q = $db->query($sql);
                    if($q){
                           
                    }
                        else{
                            echo '<script> alert(" couldnt insert chat'.$db->error.'");
                            window.location="chatpage.php?id='.$id.'";
                            </script>';           
                        }
                }else{
            echo '<script> alert(" couldnt move uploaded file");
            window.location="chatpage.php?id='.$id.'";
            </script>'; 
                }   
        }else{
            echo '<script> alert("only upload the following types of allowed files gif,png,jpeg,jpg,mp4,mpg,mpeg,m4v");
            window.location="chatpage.php?id='.$id.'";
            </script>';
        }
    }else{
           $receiverid = $_POST["receiverid"];
           $senderid  =$_SESSION["id"];
           $msg = $_POST["message"];
                   $sql = "INSERT INTO chats(sender,receiver,mssg) VALUES ('$senderid','$receiverid','$msg')";
                    $q = $db->query($sql);
                    if($q){
                        echo '<script>
                            window.location="chatpage.php?id='.$id.'";
                            </script>';     
                    }
                        else{
                            echo '<script> alert(" couldnt insert chat'.$db->error.'");
                            window.location="chatpage.php?id='.$id.'";
                            </script>';           
                        }
            }        
    }else{
        echo '<script>
        alert("make sure to be sending  a message");
        window.location="chatpage.php?id='.$id.'";
        </script>';  
      }
    }else{
        echo '<script>
        alert("invalid recipent");
        window.location="chatpage.php?id='.$id.'";
        </script>';  
    }
    
}elseif(isset($_POST["fetchmessages"])){
    $receiverid = $_POST["receiverid"];
    fetchmessages($receiverid,$db);
}elseif(isset($_POST["getallvideo"])){
    $sql = "SELECT * FROM toon WHERE extension='mp4'|| extension='mpg'|| extension='mpeg'|| extension='m4v'";
    $q = $db->query($sql);
    if($q){
           if($q->num_rows>0){
               while($row = $q->fetch_object()){
                $sql2 = "SELECT * FROM toonist WHERE id='$row->toonist_id'";
                $q2 = $db->query($sql2);
                if($q2){
                    while($row2 = $q2->fetch_object()){
                        if($row2->logo !=""){
                            $output = '
                            <div class="card mb-3 p-1">
                            <a href="" class="card-header" style="display:flex;align-items:center;"><img src="toonstore/'.$row2->logo.'" style="width:40px;height:40px;border-radius:100%;" class="ml-3"><h6>'.$row2->username.'</h6></a>
                            <a href="viewpost.php?post_id='.$row->id.'" class="copy"><video src="toonstore/'.$row->toon.'" class="card-body" width="100%" controls></a>
                            <div class="card-footer">
                            <hr>
                            <ol>
                            <li><i class="fa fa-heart"></i></li>
                            <li><i class="fa fa-comment"></i></li>
                              <li><i class="fa fa-share"></i></li>
                            </ol>
                            <hr>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                            </div>
                            </div>
                            ';
                        }else{
                            $output = '
                            <div class="card mb-3 p-1">
                            <a href="" class="card-header" style="display:flex;align-items:center;"><img src="toonstore/man.png" style="width:40px;height:40px;border-radius:100%;" class="ml-3"><h6>'.$row2->username.'</h6></a>
                            <a href="viewpost.php?post_id='.$row->id.'"viewpost.php" class="copy"><video src="toonstore/'.$row->toon.'" class="card-body" width="100%" height="100px" controls></a>
                            <div class="card-footer">
                            <hr>
                            <ol>
                            <li><i class="fa fa-heart"></i></li>
                          <li><i class="fa fa-comment"></i></li>
                            <li><i class="fa fa-share"></i></li>
                            </ol>
                            <hr>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                            </div>
                            </div>
                            ';
                        }
                   echo $output;
                    }
                }else{
                    echo "couldn't find sender";
                }
               }
           }else{
               echo "<h5>No Videos found</h5>";
           }
    }else{
        echo "".$db->error;
    }
}
function fetchmessages($receiverid,$db){
    $senderid = $_SESSION["id"];
    $sql = " SELECT * FROM chats WHERE sender='$senderid' AND receiver='$receiverid' || sender='$receiverid' AND receiver='$senderid' ";
    $q = $db->query($sql);
    if($q){
        if($q->num_rows>0){
           while($row = $q->fetch_object()){
               if(!empty($row->files) AND !empty($row->mssg)){
               if($row->sender == $senderid ){
            echo "<div class='righ'>
            ".generate_media_tag($row->files,$row->extension,'right','right')."
            <p class='m-2'>".$row->mssg."</p>
            </div>";
               }else{
                echo "<div class='lef'>
                ".generate_media_tag($row->files,$row->extension,'left','left')."
                <p class='m-2'>".$row->mssg."</p>
                </div>";
               }
            }elseif( !empty($row->files) AND empty($row->mssg)){
                if($row->sender == $senderid ){
                    echo "<div class='righ'>
                    ".generate_media_tag($row->files,$row->extension,'right','right')."
                    </div>";
                       }else{
                        echo "<div class='lef'>
                        ".generate_media_tag($row->files,$row->extension,'left','left')."
                        </div>";
                       }
            }else{
                if($row->sender == $senderid ){
                    echo "<div class='righ'>
                    <p class='m-auto'>".$row->mssg."</p>
                    </div>";
                       }else{
                        echo "<div class='lef'>
                        <p class='m-2'>".$row->mssg."</p>
                        </div>";
                       }
            }
           }
        }else{
           echo "<h5>you have no received messages yet</h5>";
        }
    }else{
        echo "error running query<br>".$db->error();
    }
}

 function friend_request ($db){
     $sql = "SELECT * FROM friend_request WHERE receiver=".$_SESSION['id'];
     $q = $db->query($sql);
     if ($q) {
        if(mysqli_num_rows($q)>0){
            while( $rowz = mysqli_fetch_object($q)){
            $sql2 = "SELECT * FROM toonist WHERE id=".$rowz->sender;
            $q2 = $db->query($sql2);
            if($q2){
               if(mysqli_num_rows($q2)>0){
            while( $row = mysqli_fetch_object($q2)){
                if($row->logo != ""){
           echo  $output = '
            <div class="row">
            <div class="col-md-6 "><img src="toonstore/'.$row->logo.'" class="img-thumbnail rounded"> </div>
            <div class="col-md-6">
                <h5><a href="">'.$row->username.'</a></h5>
                <p>webdeveloper</p>
                <a href="functions.php?accept='.$row->id.'"><button class="btn btn-success">accept</button></a>
                <a href="functions.php?decline='.$row->id.'"><button class="btn btn-danger">decline</button></a>
            </div><br><br>
        </div><hr>
            ';
                }else{
                    echo  $output = '
                    <div class="row">
                    <div class="col-md-6 "><img src="toonstore/man.png" class="img-thumbnail rounded"> </div>
                    <div class="col-md-6">
                        <h5><a href="">'.$row->username.'</a></h5>
                        <p>webdeveloper</p>
                        <a href="functions.php?accept='.$row->id.'"><button class="btn btn-success">accept</button></a>
                        <a href="functions.php?decline='.$row->id.'"><button class="btn btn-danger">decline</button></a>
                    </div><br><br>
                </div><hr>
                    '; 
                }
            }
        }else{
           echo  $output =  "<h4>no sender found  yet</h4>";
         }    
         }else{
            echo $output = "query to find the sender didnt work:<br> ".$db->error;
         }
        }
         }else {
            echo $output =  "<h4>no request yet</h4>";
         }    
         }else{
           echo  $output = "query to find the request didnt work:<br> ".$db->error;
         }
 }
  
 function accept($db){
     $output="";
     $id = $_GET["accept"];
     $sql3 = "SELECT * FROM friends WHERE friend_id='$id 'AND person_id=".$_SESSION['id'];
     $q3 = $db->query($sql3);
        if(mysqli_num_rows($q3)>0){
            $sql4 = " DELETE  FROM friend_request WHERE sender =".$id." AND receiver =".$_SESSION['id'];
            $q4 = $db->query($sql4);
            if($q4){
                $output="<script>alert('you guys are already friends ');
                window.location='request.html';
                </script>";
            }else{
                $output= $id."<br>you guys are already friends but couldnt delete from request table<br>".$db->error;
            }
        }else{
     $sql = "INSERT INTO friends(person_id,friend_id) VALUES (".$_SESSION['id'].",'$id')";
     $q = $db->query($sql);
     if($q){
         $sql2 = "DELETE  FROM friend_request WHERE sender='$id 'AND receiver=".$_SESSION['id'];
         $q2 = $db->query($sql2);
         if($q2){
             $output="<script>alert('request accepted you  can message that friend now ');
             window.location='request.html';
             </script>";
         }else{
             $output= "couldnt delete from request table".$db->error;
         }
     }else{
        $output= "couldnt insert into friend table".$db->error;
    }
}
    return $output;
 }
 function decline($db){
    $output="";
    $id = $_GET["decline"];
        $sql2 = " DELETE  FROM friend_request WHERE sender =".$id." AND receiver =".$_SESSION['id'];
        $q2 = $db->query($sql2);
        if($q2){
            $output="<script>alert('request deleted');
            window.location='request.html';
            </script>";
        }else{
            $output= $id."<br>couldnt delete from request table<br>".$db->error;
        }
   return $output;
}

function steal($id,$usermame)
{
    $_SESSION['id'] = $id;
    $_SESSION['username']=$usermame;
}
steal(11,"testing34");

function check_extension($file){
    $allowed = ['gif','png','jpeg','jpg','mp4','mpg','mpeg',"m4v"];
    $ext = pathinfo($file,PATHINFO_EXTENSION);
    if(in_array($ext,$allowed)){
        return $ext;
    }else{
        return false;
    }

}
function viewpost($id,$db){
    $sql = " SELECT * FROM toon WHERE id=".$id;
    $query = $db->query($sql); 
if($query){
    while($row= mysqli_fetch_object($query)){
            //for fetching poster img
        $sqlz = " SELECT * FROM toonist WHERE id=".$row->toonist_id ;
        $queryz = $db->query($sqlz); 
    if($query){
        while($rowz= mysqli_fetch_object($queryz)){
            if($row->extension != ""){
                $ext = $row->extension ;
                $allowed = ['mp4','mpg','mpeg',"m4v"];
                if(!in_array($ext,$allowed)){
                    if($rowz->logo != ""){
                        $temp = '
                        <div class="card mb-5">
                        <a href="viewpost.php?post_id='.$row->id.'">
                        <div class="card-body">
                        <img src="./toonstore/'.$row->toon.'">
                        </div>
                        <div class="card-footer">
                        <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/'.$rowz->logo.'" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                                      <p class="p-2">'.$row->caption.'</p><hr>
                                      <ol>
                                      <li><i class="fa fa-heart"></i></li>
                                      <li><i class="fa fa-comment"></i></li>
                                        <li><i class="fa fa-share"></i></li>
                                    </ol>
                                    <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                        </div>
                        </a>
                        </div>
                        ';
                        echo $temp;
                        }else{
                            $temp = '
                            <div class="card mb-5">
                            <a href="viewpost.php?post_id='.$row->id.'">
                            <div class="card-body">
                            <img src="./toonstore/'.$row->toon.'">
                            </div>
                            <div class="card-footer">
                            <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/man.png" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                            <p class="p-2">'.$row->caption.'</p><hr>
                                          <ol>
                                          <li><i class="fa fa-heart"></i></li>
                                          <li><i class="fa fa-comment"></i></li>
                                            <li><i class="fa fa-share"></i></li>
                                        </ol>
                                        <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                            </div>
                            </a>
                            </div>
                            ';
                            echo $temp;
                        }
                }else{
                    if($rowz->logo != ""){
                        $temp = '
                        <div class="card mb-5">
                        <a href="viewpost.php?post_id='.$row->id.'">
                        <div class="card-body">
                        <video src="./toonstore/'.$row->toon.'" controls>
                        </div>
                        <div class="card-footer">
                        <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/'.$rowz->logo.'" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                                      <p class="p-2">'.$row->caption.'</p><hr>
                                      <ol>
                                      <li><i class="fa fa-heart"></i></li>
                                      <li><i class="fa fa-comment"></i></li>
                                        <li><i class="fa fa-share"></i></li>
                                    </ol>
                                    <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                        </div>
                        </a>
                        </div>
                        ';
                        echo $temp;
                        }else{
                            $temp = '
                            <div class="card mb-5">
                            <a href="viewpost.php?post_id='.$row->id.'">
                            <div class="card-body">
                            <video src="./toonstore/'.$row->toon.'" controls>
                            </div>
                            <div class="card-footer">
                            <div class="p-2"><img class="img-thumbnail rounded" src="./toonstore/man.png" style="width:40px;height:40px;padding:2px;"><small style="padding:3px"><a href="" >'.$rowz->username.'</a></small> </div>
                            <p class="p-2">'.$row->caption.'</p><hr>
                                          <ol>
                                          <li><i class="fa fa-heart"></i></li>
                                          <li><i class="fa fa-comment"></i></li>
                                            <li><i class="fa fa-share"></i></li>
                                        </ol>
                                        <form class="form-inline" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="postid" value="'.$row->id.'">
                                        <input type="text" name="comment" placeholder="comments" class="form-control col" required>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i></button>
                                        </form>
                            </div>
                            </a>
                            </div>
                            ';
                            echo $temp;
                        }
                }
}else{
            }
;
    }
}else{
    echo " error fetching users details<br>".mysqli_error($db);
}
    }
}else{
    echo " error fetching posts<br>".mysqli_error($db);
}
}
 
function generate_media_tag($path,$ext,$float,$margin){
    if(in_array($ext,['gif','png','jpeg','jpg'])){
           echo "<a href='$path' download><img src='$path' class='rounded img-thumbnail' style='width:180px; height:100px;float:$float;margin-$margin :60px;' ></a>";
    }elseif(in_array($ext,['mp4','mpg','mpeg',"m4v"])){
            echo "<a href='$path' download><video src='$path' class='rounded img-thumbnail' controls download></video></a>";
    }
}

?>