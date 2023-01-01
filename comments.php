
<?php
    date_default_timezone_set('Asia/Kuala_Lumpur');
    include 'dba.inc.php';
    include 'comments.inc.php';
    session_start();
    
?>
<br><br><h3>Komen</h3>
        <?php
    
        if (isset($_SESSION['id'])){
            echo "<form method='post' action='".setComment($conn)."'>
             <input type='hidden' name='uid' value='".$_SESSION['id']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s' )."'>
            <textarea name='message'></textarea></br>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form></br>";
        } else {
            echo "<br><br>Anda tidak Log masuk. Untuk komen sila <a href=login.php>Log masuk di sini!</a> <br><br>" ;
        }

        getComment($conn);
?>