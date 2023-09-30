<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rich protein</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/_style.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <style>
    body {
        background: grey;
    }
    </style>
</head>

<body>
    <?php
	require 'partials/_nav.php';
	require 'partials/_menu.php';
	?>


    <!------------------------------------------------- Writing Section -------------------------------->
    <div class="panel container text-center h-5 mt-3">
        <h1>Swasth</h1>
        <p>Welcome to our heavy Protein rich food</p>
    </div>

    <!-----------------------------------------------Food items -------------------------------->

    <div class="container ">
        <div class="row">
            <div class="card my-4 h-20 col-md-8 p-4 m-4" style="width: 25rem;">
                <img src="img/Fried eggs and toasted breads.jpeg" class="card-img-top h-250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fried eggs and toasted breads</h5>
                    <p class="card-text">
                    <ul>
                        <li>protein 10%</li>
                        <li>fat 10%</li>
                        <li>₹100</li>
                    </ul>
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="card my-4 h-20 row- col-md-6" style="width: 25rem;">
                <img src="img/roasted sea bream fish with lemon slices.jpeg"
                    class="card-img-top h-250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Roasted sea bream fish with lemon slices</h5>
                    <p class="card-text">
                    <ul>
                        <li>protein 10%</li>
                        <li>fat 10%</li>
                        <li>₹100</li>
                    </ul>
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="card my-4 h-20 col-md-6 m-4" style="width: 25rem;">
                <img src="img/Grilled Tofu Buddha Bowl.jpeg" class="card-img-top h-250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Grilled Tofu Buddha Bowl</h5>
                    <p class="card-text">
                    <ul>
                        <li>protein 10%</li>
                        <li>fat 10%</li>
                        <li>₹100</li>
                    </ul>
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>
    </div>

<!-----------------------------------------------Script -------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <!---------------------- Script to show menue pannel feom right of website------------------->
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