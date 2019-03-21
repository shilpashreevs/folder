<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$status ="";
if(isset($_POST['submit']))
{
    session_start();
    $conn = mysqli_connect("localhost","root","","shilpashree123");
    // Check connection

    if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // Perform queries

    $sql = " SELECT * from signup WHERE `user_name` = '$user' AND `password` = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) 
    {
            while($row = mysqli_fetch_assoc($result)) 
            {
                $_SESSION["first_name"] = $row["first_name"];
                $_SESSION["last_name"] =$row["last_name"];
                 header('Location: home.php');
            }
    }
     else 
    {
        $sql = " SELECT * from signup WHERE `user_name` = '$user'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) 
        {
               // echo "User does not exists";
                $status = "User does not exists";
        }
        else{
          //  echo "Credentials Incorrect";
            $status ="Credentials Incorrect";
        }
    }
    mysqli_close($conn);
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="authentication1.js"></script>

        <script src="assignment.js"></script>
    </head>
    <body  onload="">
        
        <section>
            <div class="heading">
                <div class="head-container">
                    <div class="signup-container">
                        <h1>your page</h1>
                        <form action="" method="post">
                            <table> 
                                <tr>
                                    <td><label for="username">Username :</label></td>
                                    <td> <input id="name"type="text" name="username" required><br><td><img class="cautions" id="n"src="1398913.png" ></td></td>
                                </tr>
                                <tr>
                                    <td><label for="password">password :</label></td>
                                    <td><input id="password" type="password" name="password" required pattern="[a-zA-Z0-9]+"><br></td><td></td></td>
                                </tr>         
                                <tr>                                   
                                    <td><input id="login_but" type="submit" value="submit" name="submit"class="signup-button "   ><br></td>
                                    <td><button type="button" class="account1" onclick="location.href='signup.php'">Create acount</button></td>  
                                </tr><br>
                            </table>
                        </form>
                  
        </section>

    </body>
</html>