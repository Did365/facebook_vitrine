<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
    <h1>Facebook</h1>
   <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php" class="active">Contact</a>
</nav>

</header>


<main>
<div class="form-container">
    <h2> Authentication </h2>
    

<?php if (isset($_GET["success"])): ?>
    <div style="
        background: #4CAF50;
        color: white;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        text-align: center;">
        ✅ Register successful
    </div>
<?php endif; ?>



    <form action="register.php" method="POST">
    
    <div class="input-group">
        <label for="username">Username</label>
        <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your name"
            required
        >
    </div>

    <div class="input-group">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
        >
    </div>

    <div class="input-group">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email address"
            required
        >
    </div>

    <button type="submit">Register</button>

</form>

</main>
</div>


<footer class="site-footer">
    <p>© 2025 Facebook | All rights reserved</p>
</footer>

</body>
</html>
