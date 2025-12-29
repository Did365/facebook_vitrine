<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info</title>
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
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p class="contact-subtitle">
            Have a question or want to work with us?  
            Fill in the form below and we’ll get back to you.
        </p>

        <form class="contact-form">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label>Your Email</label>
                <input type="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>Your Message</label>
                <textarea rows="5" placeholder="Write your message here..." required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>
</main>


<footer class="site-footer">
    <p>© 2025 Facebook | All rights reserved to Official Facebook </p>
</footer>

</body>
</html>
