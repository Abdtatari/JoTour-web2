
<form id="successForm" action="statistics.php" method="post">
    <input type='hidden' name='Loggedin' value='Success'>
</form>  
<form id="faildForm" action="Login.php" method="post">
        <input type='hidden' name='Loggedin' value='Failed'>
</form>
<?php
    function checkLogin($fname,$password) {
        if ($fname=="abd"&&$password=="123"){
            return true;
        }
        return false;
    }
    if (checkLogin($_POST['username'], $_POST['password'])){
        echo "<script type=\"text/javascript\"> 
                window.onload=function(){
                    document.forms['successForm'].submit();
                }
       </script>";
    }
    else{
       echo "<script type=\"text/javascript\"> 
                window.onload=function(){
                    document.forms['faildForm'].submit();
                }
       </script>";
    }
?>