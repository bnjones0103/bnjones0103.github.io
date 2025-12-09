<!Doctype HTML>
<html lang="en">
    <!--
    Name: Brittani Jones
    Date: September 11, 2025
    Page: Boilerplate
    Description: Starter template
    -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,inital-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="nav.css">
        <!-- I will link to external CSS for styling of pages-->
         <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--custom font link-->
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
         require_once("header.php");
         ?>
        <h1>Contact Me</h1>
        <!--This is a sample heading for the beginning of content. This is where all content will lie.
        -->
            <form>
                <p><label>Title: 
                    <select name="titlename" required>
                        <option disabled selected>Select an option</option>
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Miss</option>
                        <option>Dr.</option>
                        <option>Ms.</option>
                        <option>Mx.</option>
                        <option>None/Prefer not to say</option>
                    </select></label></p>
                <p><label>Full Name: <input type="text" name="fullname" placeholder="Enter your name" required></label></p>
                <p><label>Email Address: <input type="email" name="emailaddress" placeholder="Enter your email address" required></label></p>
                <p><label>Message: 
                    <textarea name="message" placeholder="How can I help you?" rows="5" cols="50" required></textarea>
                </label></p>
                <p><label>Inquiry Type: 
                    <select name="inquiry" required>
                        <option disabled selected>Select an option</option>
                        <option>Job Opportunity</option>
                        <option>Collaboration</option>
                        <option>Freelance Project</option>
                        <option>Speaking or Workshop</option>
                        <option>Other</option>
                    </select></label></p>
            
                <p><input type="submit" value="Submit"></p>
            </form>


        <?php
         require_once("footer.php");
         ?>
    </body>
</html>
<!--
This will close the code and complete the page
-->