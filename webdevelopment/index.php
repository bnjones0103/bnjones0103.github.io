<?php
session_start();
?>


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
        <title>B. Jones</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="nav.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--custom font link-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- end of base -->
         <?php
         include 'header.php';
         ?>
        <!-- start of base -->
        <section class="hero">
            
            <div class="container">
                <div class="info">
                    <h1>Welcome, and thanks for visiting my portfolio!</h1>
                        <!--This is a sample heading for the beginning of content. This is where all content will lie.
                        -->
                    <!--going to remove this header
                    <h3>
                        Objective
                    </h3>
                    -->
                        <!--Subheading for page-->
                     <p>
                        <!--paragraph 1-->
                I’m excited to share my work with you and give you a glimpse into the skills I bring to the 
                table. With a background in learning technologies, instructional design, project 
                management, and organizational development, I love finding creative ways to make 
                learning engaging, processes smoother, and projects more impactful.
                    </p>
                    <blockquote>
                        <!--external quote relating to my goals-->
                    <!--"Instructional design is the systematic process of creating, developing, 
                    and delivering learning experiences. Its core purpose is to make training 
                    effective and efficient, helping people learn new skills and improve performance 
                    by clearly defining learning goals and designing purposeful interventions."
                    <footer>— Neovation</footer>-->
                    "Rejection is Redirection" 
                    <footer>- Me</footer>
                    
                    </blockquote>
                    <p>
                        <!--paragraph 2-->
                My goal is to partner with clients who want flexible, reliable support to bring their ideas to 
                life. Whether it’s building effective training, streamlining systems, or managing complex 
                projects, I aim to deliver solutions that truly make a difference. Take a look around, and let’s 
                connect to explore how we can create something meaningful together.
                    </p>
                    <a href="about.html">Learn More</a>
                </div>
            </div>
        </section>
        <!-- end of base -->
         <?php
          include 'footer.html';
         ?>
    </body>
</html>
<!--
This will close the code and complete the page
-->