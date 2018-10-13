<?php session_start(); ?>
<?php include 'connect.php'; ?>


<?php


if (isset($_SESSION['counselor_id'])){

    header('Location: index.php');
}

?>
<?php

if (isset($_POST['login'])){

    if (isset($_POST['email']) && isset($_POST['password'])){


        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password)){

            $query = "select * from counselor WHERE email= '$email' AND password='$password'";

            if ($connect->query($query)->num_rows > 0){


                $ans  = $connect->query($query)->fetch_assoc();


                $_SESSION['counselor_id'] = $ans['id'];
                $_SESSION['counselor_name'] = $ans['name'];
                $_SESSION['counselor_phone'] = $ans['phone'];

                header('Location: index.php');

            }

        }



    }

}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="materialize/css/materialize.css">

    <style>
        html,
        body,
        .login-box {
            height: 100%;
        }


    </style>
</head>
<body>

<div class="container ">

    <div class="valign-wrapper row login-box">
        <div class="col card hoverable s12 pull-s0 m7 l6 pull-m3 l4 pull-l3">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="card-content">
                    <span class="card-title center-align">Enter credentials</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="email " class="blue-text">Email address</label>
                            <input type="email" class="validate" name="email" id="email" required/>
                        </div>
                        <div class="input-field col s12">
                            <label for="password" class="blue-text">Password </label>
                            <input type="password" class="validate" name="password" id="password" required/>
                        </div>
                    </div>
                </div>
                <div class="card-action center-align">

                    <input type="submit" name="login" class="btn yellow btn-block waves-effect waves-light" value="Login">
                </div>
            </form>
        </div>
    </div>

</div>



<script src="js/jquery.js"></script>
<script src="materialize/js/materialize.js"></script>

<script>


    $(document).ready(function(){

    });

</script>


</body>
</html>