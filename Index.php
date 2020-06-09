<!DOCTYPE html>
<html>
<title>BE INDIAN BUY INDIAN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body {
        margin: 0;
        border: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .mySlides {
        display: none;
    }
</style>

<?php include "header.php" ?>

<body style="background-color: #222;">

    <div class="w3-content w3-display-container">
        <img class="mySlides" src="https://images.unsplash.com/photo-1576666735112-87a8ea71671c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" data-bgfit="cover" style="width:100%">
        <img class="mySlides" src="https://cdn.vanderbilt.edu/vu-news/files/20190418000107/Garment_workers_main.jpg" data-bgfit="cover" style="width:100%">
        <img class="mySlides" src="https://civileats.com/wp-content/uploads/2018/08/180814-restaurant-labor-top3-700x467.jpg" data-bgfit="cover" style="width:100%">
        <img class="mySlides" src="https://assets-maharam-prod.s3.amazonaws.com/images/story_images/large/801/stories_sharma_02_01.jpg?1487966761" data-bgfit="cover" style="width:100%">

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
        <div>
        <br>
        <h1 style="text-align: center; color: white">WHY VOCAL FOR LOCAL</h1>

        <p style="text-align:center; color:whitesmoke; margin: 3%;">Through local for vocal we promote local products and support local business.The key to economic revival of a country lies in rural economy.Rural economy has the potential to create jobs and employment suitable for the region while contributing towards achieving the sustainable development goals As rural employment, entrepreneurship and livelihoods are diversified , skilling rural youth and local populace take centrestage to ensure self-reliance and compete at global level. <br><b>Let’s raise voice to buy promote and preserve local skills and products in India and work towards vocal for local as an opportunity to boost local skills and products in India.</b>
        </p>
    </div>
 </body>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>



<?php
include 'footer.php';
?>

</html>