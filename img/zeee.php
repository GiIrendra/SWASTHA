<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            position: relative;
            height: 100vh;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: cross-fade(
                    url('img1.jpeg') 50%,
                    url('/img2.jpeg') 100%);
        }

        .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            color: black;

            /* add any other styles you want for your text */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="background"></div>
        <div class="text">
            <h2>Your text goes here</h2>
            <p>Your description goes here</p>
        </div>
    </div>

</body>

</html>