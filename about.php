<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customised Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/_style.css">
</head>

<body>
    <?php
    require 'partials/_nav.php';
    require 'partials/_menu.php';
    ?>


    <!-- Writing Section -->
    <div class="panel container text-center my-5">

        <h1>About Us!</h1>
        <h3 style="text-align: center;">Welcome To <span id="W_Name1">Swasth</span></h3>
        <p><span id="W_Name2">Swasth</span> is a Professional <span id="W_Type1">food e-commerce</span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of <span id="W_Type2">food e-commerce</span>, with a focus on dependability and <span id="W_Spec">customised food delivery</span>. We're working to turn our passion for <span id="W_Type3">food e-commerce</span> into a booming <a href="https://www.blogearns.com/2021/05/free-about-us-page-generator.html" rel="do-follow" style="color: inherit; text-decoration: none;">online website</a>. We hope you enjoy our <span id="W_Type4">food e-commerce</span> as much as we enjoy offering them to you.</p><br>
        <p style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site<br><br>
            <span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a nice day!</span>
        </p>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <!-- Script to show menue pannel feom right of website-->
    <script>
        // Get the menu bar and the menu button
        var menuBar = document.getElementById("menuBar");
        var menuBtn = document.getElementById("menuBtn");

        // Add a click event listener to the menu button
        menuBtn.addEventListener("click", function() {
            // Toggle the menu bar by changing the left position
            if (menuBar.style.left === "-200px") {
                menuBar.style.left = "0";
            } else {
                menuBar.style.left = "-200px";
            }
        });
    </script>

</body>

</html>