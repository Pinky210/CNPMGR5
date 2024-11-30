<?php
session_start();


$con=mysqli_connect("localhost","firebase_login","firebase_login","firebase_login");
if($con){
    //echo "Connected";
}

$email=$_REQUEST['email'];
$provider=$_REQUEST['provider'];
$username=$_REQUEST['username'];
$token=$_REQUEST['token'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=AIzaSyB1JCecFimcT25tPUQzwYWo9XJJhMp7sD0&idToken='.$token,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER=>array("Content-length:0")
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
$array_response=json_decode($response,true);
//print_r($array_response);



if(array_key_exists("users",$array_response)){
  $user_res=$array_response["users"];
  if(count($user_res)>0){
    $user_res_1=$user_res[0];

    if($user_res_1["email"]==$email){
      $facebookProvider=$user_res_1["providerUserInfo"][0]["providerId"];

      if($user_res_1["emailVerified"]=="1" || $user_res_1["emailVerified"]=="true" || $user_res_1["emailVerified"]==true || $facebookProvider=="facebook.com"){

        $check_user=mysqli_query($con,"select * from users where email='".$email."'");
        if(mysqli_num_rows($check_user)>0){
          echo "Login Successful";
          $_SESSION["email"]=$email;
        }
        else{
  
  $qr=mysqli_query($con,"INSERT INTO `users`(`username`, `email`, `token`, `created_at`, `login_type`) VALUES ('".$username."','".$email."','".$token."','".date('Y-m-d H:i:s')."','".$provider."')");

  if($qr){
    echo "User Created";
    $_SESSION["email"]=$email;
  }
  else{
    echo "Failed to Create User";
  }
}
}
else{
  echo "Please Verify Your Email to Get Login";
}
}
else{
  echo "Unknown Email User";
}
}
else{
  echo "Invalid Request User Not Found";
}
}
else{
  echo "Unknown Bad Request";
}
