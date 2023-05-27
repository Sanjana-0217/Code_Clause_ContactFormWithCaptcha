<!DOCTYPE html>
<html>
<head>
    <title>Contact Form with CAPTCHA</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Contact Form</h2>
    <form method="post" action="submit_form.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <label for="captcha">CAPTCHA:</label>
        <input type="text" id="captcha" name="captcha" required><br>
        <img src="generate_captcha.php" alt="CAPTCHA"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
