<title>Login - Colab</title>
<style>
    body{
        font-family: sans-serif;
    }
</style>
<div>
    <h1>Welcome to Colab - please login to continue.</h1>
    <form action="valid/validate.php?" method="post">
        <label>Your username:</label><br>
        <input type="text" name="user"><br>
        <label>Your password:</label><br>
        <input type="password" name="psw"><br>
        <button>Login</button>
    </form>
    <p>This website is still in beta! This is only created for testing purposes. Do not download or edit!</p>
    <?php
        if($_GET["error"] == "01"){
            echo "Password or username error<br>";
        }else{
            echo "no errors";
        }
        //debugging lines for developers
    ?>
</div>