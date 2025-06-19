<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/account/login/account.css">
</head>
<body>
    <div class="container">
        <h1>welcome back</h1>
        <form action="" id="login-form" class="login-form">
            <div class="form-group">
                <label for="login-email">email address</label>
                <input type="email" name="login-email" id="login-email">
                <span id="login-email-error"></span>
            </div>
            <div class="form-group">
                <label for="login-password">password</label>
                <input type="password" name="login-password" id="login-password">
                <span id="login-password-error"></span>
            </div>
            <input type="button" value="login">
        </form>
    </div>
</body>
</html>