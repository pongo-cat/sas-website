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
                <p>add contact info and also section to input email, name, & message!</p>
            </div>

            <div class = "contact-form">
                <form action = "contact_sql.php" method = "post">
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