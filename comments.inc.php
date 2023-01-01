<?php

function setComment($conn) {
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
}

function getComment($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $id =$row['uid'];
        $sql2 = "SELECT * FROM user WHERE id='$id'";
        $result2 = $conn->query($sql2);

        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo $row2['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
            echo "</p></div>";
        }   
    }
}

function getLogin($conn) {
    ob_start();
    if(isset($_POST['loginSubmit'])){
        $uid=$_POST['uid'];
        $pwd=$_POST['pwd'];

        $sql = "SELECT * FROM user where uid='$uid' AND pwd='$pwd'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result)>0){
            if ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                    header("location: index.php?successlogin");
                exit();
            } else {
                    header("location: login.php?failedlogin");
                exit();
            }
        }
    }
    ob_end_flush();
}

function userLogout(){
    ob_start();
    if(isset($_POST['logoutSubmit'])){
        session_start();
        session_destroy();
        header("Location: nasilemak.php");
        exit();
        ob_end_flush();
    }
}

function getSignup($conn) {
    
    if(isset($_POST['signupSubmit'])){
        $uid=$_POST['uid'];
        $pwd=$_POST['pwd'];
        $cwd=$_POST['cpwd'];
        $email=$_POST['email'];

            $sql = "INSERT INTO user (uid, pwd, email) VALUES ('$uid', '$pwd', '$email')";
            $result = $conn->query($sql);
            header("location: login.php?success");
            exit();
        }
    }


