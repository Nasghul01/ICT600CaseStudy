
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnekaResipi.com Log In Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php 
    ob_start();
    session_start();
    include 'comments.inc.php';
    include 'dba.inc.php';
?>
    <style>
                
            
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
                
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #b08968;
            color: #1c1e21;
        }

        main {
            height: 90vh;
            width: 100vw;
            position: relative;
            margin: 0 auto;
        }

        footer {
            height: 10vh;
            background-color: #ffffff;
        }

        .row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            max-width: 1000px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .colm-logo {
            flex: 0 0 50%;
            text-align: left;
        }

        .colm-form {
            flex: 0 0 40%;
            text-align: center;
        }

        p {
            font-size: 14px;
            text-decoration: none;
            color: #1c1e21;
            font-weight: 600;
            padding : 20px;
        }

        .colm-logo h2 {
            font: 26px;
            font-weight: 400;
            padding: 0 30px;
            line-height: 32px;
        }

        .colm-form .form-container {
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            padding: 20px;
            max-width: 400px;
        }

        .colm-form .form-container input, .colm-form .form-container .btn-login {
            width: 100%;
            margin: 5px 0;
            height: 45px;
            vertical-align: middle;
            font-size: 16px;
        }

        .colm-form .form-container input {
            border: 1px solid #dddfe2;
            color: #1d2129;
            padding: 0 8px;
            outline: none;
        }

        .colm-form .form-container input:focus {
            border-color: #1877f2;
            box-shadow: 0 0 0 2px #e7f3ff;
        }

        .colm-form .form-container .btn-login {
            background-color: #ddbea9;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            padding: 0 16px;
            color: black;
            font-weight: 700;
        }

        .colm-form .form-container a {
            display: block;
            color: #1877f2;
            font-size: 14px;
            text-decoration: none;
            padding: 0px;
        }

        .colm-form .form-container a:hover {
            /* text-decoration: underline; */
        }

        .colm-form .form-container .btn-new {
            background-color: #42b72a;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            line-height: 48px;
            padding: 0 16px;
            color: #ffffff;
            font-weight: 700;
            margin-top: 20px; 
        }
        .btn-logout {
        background-color: black;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            line-height: 48px;
            padding: 0 16px;
            color: #ffffff;
            font-weight: 700;
        }

        .colm-form p {
            font-size: 14px;
        }

        .colm-form p a {
            text-decoration: none;
            color: #1c1e21;
            font-weight: 600;
        }

        .colm-form p a:hover {
            text-decoration: underline;
        }

    </style>
        <title>Log In Page</title>
    </head>
<body style="background-color:#b08968">
    <main>
        <div class="row">
            <div class="colm-form" >
                <?php
                echo   "<form method='POST' action='".getSignup($conn)."' >
                    <div class='form-container'>
                        <input type='text' placeholder='Username anda ...' name='uid'>
                        <input type='password' placeholder='Kata laluan anda ... ' name='pwd'>
                        <input type='password' placeholder='Konfirm kata laluan anda ... ' name='cpwd'>
                        <input type='email' placeholder='Email anda ...' name='email'>
                        <button class='btn-login' type='submit' name='signupSubmit'>Daftar</button>
                    </div>
                </form>";
        
                ?>
            </div>
        </div>
    </main>

</body>