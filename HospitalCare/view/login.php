<?php
//session_start();
include("../control/loginmgprocess.php");
?>
<html>
    <body>
        <form action ="" method="POST" enctype="multipart/form-data">
        <center>
            <h1>Welcome To Hospital Care</h1>
            
            <fieldset>
            <table>
                <legend>Enter Login Informations</legend>
           
                <tr>
                    <td>Username:</td>
                    <td><input type="Text" name="us"> </td></tr>
                    <tr>
                        <td>Password:</td>
                    <td><input type="password" name="pass"></td></tr>
                    <tr><td><?php echo $errl ?></td></tr>
                    <!--tr>
                        <td>
                        <a href=""> Forget Password</a>   </td>               
                    </tr-->
            </table>

            </fieldset>
            <br>
           <input type="submit" name="login" value="Login">
           <input type="reset" name="reset" value="Reset">
           <br>
           <p align="left">
           Don't Have an account
           <a href="Registration page.php"> Register Now</a></p>
        </center>
        </form>
    </body>
</html>