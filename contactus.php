<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customised Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/_contactc.css">
    <link rel="stylesheet" href="css/_style.css">
</head>
<style>
    body{
        background-color: black;
    }
</style>
<body>
    <?php
    require 'partials/_nav.php';
    require 'partials/_menu.php';
    ?>


    <!--  Writing Section -->
    <section class="contact my-4 container"  id="contact">
        <form action="mailto:sinsinwargirendra003@gmail.com" method="post" enctype="text/plain">
            <div class="input-box">
                <input type="text" id="name" name="name" placeholder="Full Name">
                <input type="email" id="email" name="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" id="mob" name="mob" placeholder="Mobile Number">
                <input type="text" id="subject" name="subject" placeholder="Email Subject">
            </div>
            <textarea id="message" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section> 



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