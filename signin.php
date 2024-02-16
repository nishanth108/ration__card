<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AND MYSQL ADMIN PANNEL</title>
    <!-- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="<?= ROOT_URL?>css/style.css">
    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font(montse) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800;900&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<section class="form__section">
    <div class="container form__Section-container">
        <h2>Sign in</h2>
        <div class="alert__message error">
            <p>This is an success message</p>
        </div>
        <form action="">
            <input type="text" placeholder="Username or Email">
            <input type="password" placeholder="password">
            <button type="submit" class="btn">Sign In</button>
            <small>Don't have an Account? <a href="signup.html"></a></small>
        </form>
    </div>
</section>
</body>
</html>