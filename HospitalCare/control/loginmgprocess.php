<?php
session_start();
$errl="";
if(isset($_POST["login"]))
{
    $username= $_POST['us'];
 
    $password = $_POST['pass'];



    if($username != "" && $password != "")

    {

        if($_SERVER["REQUEST_METHOD"] == "POST")

        {

            $f = 0;

            $userdata = file_get_contents('../data/data.json');

            $userdata_array = json_decode($userdata, true);


            if($userdata_array != NULL)

            {

                foreach($userdata_array as $user)

                {
                   // echo $user['Username'];

                    if($user["UserName"] == $_POST["us"] &&    $user["Password"] == $_POST["pass"])

                    {

                        $_SESSION['us'] = $user["UserName"];

                        $_SESSION['pass'] = $user["Password"];



                       /* if (!empty($_POST["remember"]))
 
                        {

                        setcookie("username404", $_SESSION['us'], time() + 86000); # fault maybe

                        setcookie("password", $_SESSION['pass'], time() + 86000);

                        echo "";

                        }*/
                        header("location: ../view/dash.php");
 
                    }
                    else
                    {
                        $errl="Wrong username or password";
                    }

                }

               }
           }

        }
        else
        {
            $errl="Enter Credentials correctly";
        }

}
?>