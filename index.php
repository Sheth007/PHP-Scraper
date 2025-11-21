<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Share & Indices Price</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap');
    </style>
</head>
<style>
    body {
        font-size: 20px;
    }

    .container {
        display: grid;
        grid-template-columns: auto auto auto;
        justify-content: center;
    }

    .container div {
        background-color: #f1f1f1;
        border: 1px solid black;
        padding: 10px;
        font-size: 20px;
        text-align: center;
    }

    .status {
        font-family: "Nunito Sans", sans-serif;
    }

    .i .e {
        font-family: "Roboto Serif", serif;
    }
</style>

<body>
    <div class="status">
        <?php include "market_status.php"; ?>
    </div>

    <div class="container">
        <div class="i">
            <?php require "indices/indices.php"; ?>
        </div>

        <div class="e">
            <?php require "equity/equity.php"; ?>
        </div>
    </div>
</body>

</html>