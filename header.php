<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Header</title>

    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/header-fixed.css">
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='icon' href='favicon.ico' type='photos/VFL.jpg'>
    <link rel="shortcut icon" href="photos/VFL.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="photos/VFL.jpg">
</head>

<style>
    body {
        margin: 0;
        border: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .header-fixed {
        background-color: #292c2f;
        box-shadow: 0 1px 1px #222;
        padding: 20px 40px;
        height: 80px;
        color: #ffffff;
        box-sizing: border-box;
        top: -100px;

        -webkit-transition: top 0.3s;
        transition: top 0.3s;
    }

    .header-fixed .header-limiter {
        max-width: 1200px;
        text-align: center;
        margin: 0 auto;
    }


    .header-fixed-placeholder {
        height: 80px;
        display: none;
    }

    .header-fixed .header-limiter h1 {
        float: left;
        font: normal 28px Cookie, Arial, Helvetica, sans-serif;
        line-height: 40px;
        margin: 0;
    }

    .header-fixed .header-limiter h1 span {
        color: #5383d3;
    }

    .header-fixed .header-limiter a {
        color: #ffffff;
        text-decoration: none;
    }

    .header-fixed .header-limiter nav {
        font: 16px Arial, Helvetica, sans-serif;
        line-height: 40px;
        float: right;
    }

    .header-fixed .header-limiter nav a {
        display: inline-block;
        padding: 0 5px;
        text-decoration: none;
        color: #ffffff;
        opacity: 0.9;
    }

    .header-fixed .header-limiter nav a:hover {
        opacity: 1;
    }

    .header-fixed .header-limiter nav a.selected {
        color: #608bd2;
        pointer-events: none;
        opacity: 1;
    }

    body.fixed .header-fixed {
        padding: 10px 40px;
        height: 50px;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1;
    }

    body.fixed .header-fixed-placeholder {
        display: block;
    }

    body.fixed .header-fixed .header-limiter h1 {
        font-size: 24px;
        line-height: 30px;
    }

    body.fixed .header-fixed .header-limiter nav {
        line-height: 28px;
        font-size: 13px;
    }


    @media all and (max-width: 600px) {

        .header-fixed {
            padding: 20px 0;
            height: 75px;
        }

        .header-fixed .header-limiter h1 {
            float: none;
            margin: -8px 0 10px;
            text-align: center;
            font-size: 24px;
            line-height: 1;
        }

        .header-fixed .header-limiter nav {
            line-height: 1;
            float: none;
        }

        .header-fixed .header-limiter nav a {
            font-size: 13px;
        }

        body.fixed .header-fixed {
            display: none;
        }

    }
</style>


<header class="header-fixed">

    <div class="header-limiter">

        <h1><a href="index.php"><span>Vocal</span>For<span>Local</span></a></h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
        </nav>

    </div>

</header>
<div class="header-fixed-placeholder"></div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        var showHeaderAt = 150;

        var win = $(window),
            body = $('body');


        if (win.width() > 400) {

            win.on('scroll', function(e) {

                if (win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                } else {
                    body.removeClass('fixed');
                }
            });

        }

    });
</script>

</html>