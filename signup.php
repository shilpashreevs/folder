<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","","shilpashree123");
$first_name = $last_name =$user_name = $password = $email = $address =$state = $country = $dist = $pin = $dob = "";
//if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $dist = $_POST['district'];
    $pin = $_POST['pincode'];
    $dob = $_POST['dob'];
    //$first_name = $_POST['firstname'];

    $user_register = "INSERT INTO `signup`(`first_name`, `last_name`, `user_name`, `password`, `email_id`, `address`, `country`, `state`, `city`, `pincode`, `d_o_b`) VALUES ('$first_name', '$last_name', '$user_name', '$password', '$email', '$address', '$country', '$state', '$dist', $pin, '$dob')";
    //$user_register = "INSERT INTO `signup`(`first_name`, `last_name`, `user_name`, `password`, `email_id`, `address`, `country`, `state`, `city`, `pincode`, `d_o_b`) VALUES (`Nitesh`,'Vaidya','css119028','css119028','niteshvaidya591@gmail.com','shimoga','India','Karnataka','shimoga',577435,'1995-05-16')";
    $status = $con->query($user_register);

//}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="signup.js"></script>
        <script src="assignment.js"></script>

    </head>
    <body>
       
        <section>
            <div class="heading">
                <div class="head-container">
                    <div class="signup-container">
                        <h1>new user!! login here</h1>
                        <form  action="" method="post">
                            <table>
                                <tr>
                                    <td><label for="name">First Name </label></td>
                                    <td> <input id="firstname"type="text" name="firstname" ></td>
                                </tr>
                                <tr>
                                    <td><label for="name">Last Name </label></td>
                                    <td> <input id="lastname"type="text" name="lastname" ><br></td>
                                </tr> 
                                <tr>
                                    <td><label for="username">Username<span>*</span> </label></td>
                                    <td> <input id="name"type="text" name="username" required><br></td>
                                </tr>
                                <tr>
                                    <td><label for="password">password<span>*</span> </label></td>
                                    <td><input id="password" type="password" name="password" required pattern="[a-zA-Z0-9]+"><br></td><td><img id="p" class="cautions" src=" "></td></td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email Id<span>*</span> </label></td>
                                    <td><input id="email"type="email" name="email"required><br></td><td><img id="e" class="cautions" src=" " ></td></td>
                                </tr>
                                <tr>
                                    <td><label for="address">Address<span>*</span> </label></td>
                                    <td><input id="address"type="text" name="address"required><br></td><td></td></td>
                                </tr>
                              
                                <tr>
                                    <td class="padding-left">Country</td> <td><select name="state" id="countySel" size="1"required>
                                            <option value="" selected="selected">Select Country</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="padding-left">State</td><td><select name="country" id="stateSel" size="1" required>
                                            <option value="" selected="selected">Please select Country first</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="padding-left">City</td><td><select  name="district" id="districtSel" size="1" required>
                                            <option value="" selected="selected">Please select State first</option>
                                        </select><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="pincode">Pincode<span>*</span> </label></td>
                                    <td><input id="pincode"type="number" minlength="6" maxlength="6" value="577435" name="pincode"required><br></td><td><img id="pin"  class="cautions" src=" "></td></td>
                                </tr>
                                <tr>
                                    <td><label for="dob">Date of Birth </label></td>
                                    <td><input id="dob"type="date" name="dob"required><br></td><td><img id="d"  class="cautions" src=" "></td></td>
                                </tr>         
                                <tr>                                   
                                    <td><input type="submit" value="submit" class="signup-button "  name="submit" ><br></td>
                                    <td><button type="button" class="account" onclick="location.href='login.php'">Already Registered?</button></td>  
                                </tr><br>
                            </table>
                        </form>
                   
            
        </section>
    </body>
</html>