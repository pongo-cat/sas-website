<!DOCTYPE html>
<html lang="en">

<!--Include head-->
<?php include 'head.php';?>

<body>
    
    <!--Include side navigation bar-->
    <?php include 'sidebar.php';?>

   <!--Include header-->
    <?php include 'header.php';?>

    <div class = "main-wrapper">

        <div class = "main-content">

            <h1>Contact Info</h1>

            <div class = "text-content">
                <h2>Phone Number: +1 (919) 702-8747</h2>
                <h2>Email: iannuzziart@gmail.com</h2>
                <br/>
                <p>Please allow 1-2 business days for a response.</p>
                <p>Email is preferred.</p>
                <br/>
                <p>If you would like to email directly from the site, please use the form at the bottom of the page, making sure to include your name and email with your message.</p>
                <br/>
                <h2>Thank you for your interest in Iannuzzi Art Studio!</h2>
            </div>

            <div class = "contact-form">
                <form action = "/contact_mailer.php" method = "post">
                    <label for = "name">Name:</label>
                    <input type = "text" id = "name" name = "name" required>
                    <br>
                    <label for = "email">Email:</label>
                    <input type = "email" id = "email" name = "email" required>
                    <br>
                    <label for = "message">Message:</label>
                    <textarea id = "message" name = "message" required></textarea>
                    <input type = "submit" value = "Submit">
                </form>
            
        </div>
    </div>

    <!--Include footer-->
    <?php include 'footer.php';?>

</body>

</html>