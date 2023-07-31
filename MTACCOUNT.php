<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Account</title>
    <link rel="stylesheet" href="./css/MTSTYLE_Acccount.css">
    <link rel="stylesheet" href="./css/MINIMALTECH.css">
</head>

<body>
    <header class="page-header">
    <?php
        include './header.php';
        ?>
    </header>
    <main class="main-container">
        <div class="signup-container">
         
            <div class="signup-header">
                <h1>Sign Up</h1>
            </div>

            <form method="post" class="signup-form" action="./MT_Add_User.php">
            <div id="NameInputBox"> 
                <div class="namesBox"> 
                <label for="firstName">First Name</label>
                <input id="firstName" type="text"name="firstName">
                
                </div>
                <div class="namesBox"> 
                <label for="lastName">Last Name</label>
                <input id="lastName" type="text"name="lastName">
                </div>
            </div>
          
                <p id="nameErrorMessage"> </p>
                <label for="email">Email</label>
                <input id="email" type="text"name="email">
                <p id="emailErrorMessage"> </p>
                <label for="password">Password</label>
                <input id="password" type="password">
                <p id="passwordErrorMessage"> </p>
                <label for="retype-password">Retype Password</label>
                <input id="retype-password" type="password">
          
                <button disabled id="signupButton" type="submit">Sign up</button>

            </form>

        </div>
    </main>
    <footer class="page-footer">
        <?php
        include './footer.php';
        ?>
    </footer>
    <script src="./js/MTSCRIPT.js"></script>
</body>

</html>