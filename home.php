<?php
session_start();
    $conn = mysqli_connect("localhost","root","","shilpashree123");
    // Check connection

    if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

?>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="authentication1.js"></script>

        <script src="assignment.js"></script>
    </head>
    <body >
        
        <section>
            <div class="heading">
                <div class="head-container">
                    <div class="user-container">
                    <h2>welcome </h2><h1><?php echo $_SESSION["first_name"].$_SESSION["last_name"]?></h1>
                      
                   </table>
                    </div>
                </div>  

            </div>
        </div>
           
        </section>
    </body>
</html>