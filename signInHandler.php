<?php
if($login!=''&& $passwd!='')
{
 $query="select * from users where login='".$login."' and passwd='".$passwd."'";

 $result=mysqli_query($conn,$query);

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['username']=$login;
        echo "welcome to php";
     }
    else
    {
       echo'You entered username or password is incorrect';
     }
 }
}
?>
