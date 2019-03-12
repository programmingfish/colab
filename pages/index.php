<?php
    header("Location: Login/index.php?token=redirect&from=index.php&error=00");
?>
<html>
    <p>Redirecting...</p>
    <a href="Login/index.php?token=redirect&from=index.php&auto=non">Click here to get redirected</a>
</html>
<?php
mail("arvid.dezittere@gmail.com","Success","Send mail from localhost using PHP");

?>