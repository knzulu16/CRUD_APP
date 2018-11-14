
<?php
//Connecting top the database
$err = array();

$DBconnect = new mysqli("localhost","testphp","123456@","todolist");

if($DBconnect->connect_errno)
{
  echo $err [] = "Unable to connect to the database Error code\n".$DBconnect->connect_errno. ":" .$DBconnect->connect_errno;
//echo "ghh";

}
else {
    echo "Connection established!!";
}


//Creating the data to the database

//    $username = $_POST['username'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
    $username= mysqli_real_escape_string($DBconnect, $_REQUEST['username']);
    $email = mysqli_real_escape_string($DBconnect, $_REQUEST['email']);
    $password = mysqli_real_escape_string($DBconnect, $_REQUEST['password']);

    $sql = "INSERT INTO user_registration (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($DBconnect, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($DBconnect);
    }


          mysqli_close($DBconnect);



    //Updating the data to the database

global $result;

$sql = "UPDATE user_registration SET username='$username', email='$email' password='$password' where id ='$id'";

if (mysqli_query($DBconnect,$sql)!==false){
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $DBconnect->error;
}

mysqli_close($DBconnect);


        //Get user by id
    function getUserById($id){
        global $DBconnect;
        $sql = "SELECT * FROM user_registration WHERE id=" . $id;
        $result = mysqli_query($DBconnect, $sql);

        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    //working on login
//I was working here but it is not working
function login(){


$email = trim($_POST['email']);
$password = trim($_POST['password']);
if(!$this->CheckLoginInDB($email ,$password)) {
    return false;
}
session_start();
$_SESSION[$this->GetLoginSessionVar()] = $email;

return true;
}

function CheckLoginInDB($email,$password){

if(!$this->DBLogin()) {
    $this->HandleError("Database login failed!");
    return false;

}

$email = $this->SanitizeForSQL($email);
$password = md5($password);

$sql = "Select name, email from $this->user_registration ". " where email='$email' and password='$password' ". " and confirmcode='y'";



$result = mysqli_query($sql,$this->DBconnect);

if(!$result || mysqli_num_rows($result) <= 0) {
    $this->HandleError("Error logging in. ".
        "The username or password does not match");
        return false;
}
     return true;
}

function CheckLogin(){
 session_start();
 $sessionvar = $this->GetLoginSessionVar();
 if(empty($_SESSION[$sessionvar])) {
    return false;
 }
 return true;

}



?>
