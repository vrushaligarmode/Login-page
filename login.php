
<?php
$conn=new mysqli('localhost','root','','test');
if($conn->connect_error)
{
  echo"registration fail";
}
else
{
echo "registration succesfully";
   
     if(isset($_POST['submit']))
     {
        $email=$_POST['uname'];
        $pass=$_POST['pass'];
              
    
        if($sql="INSERT INTO login(uname,pass)
        VALUES ('$email','$pass')")
        {
    
            //$data = $stmt_result->fetch_assoc();
                echo "<h2>login successfully</h2>";
        }
         else

         {
            echo "<h2>invalid email or pass</h2>";
         }

     }
     
    }
?>
