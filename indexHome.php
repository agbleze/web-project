<?php
    include('topmenu.php');
?>
<!DOCTYPE html>
<head>

<style>
    #crossfade {
        position: relative;
        height: 350px;
        width: 350px;
        margin-right: 250px;
    }

    #crossfade img {
        position: absolute;
        left: 0;
        -webkit-transition: opacity 1s ease-in-out;
        -moz-transition: opacity 1s ease-in-out;
        -o-transition: opacity 1s ease-in-out;
        transition: opacity 1s ease-in-out;
    }

    @keyframes crossfadeFadeInOut {
        0% {
            opacity: 1;
        }
        45% {
            opacity: 1;
        }
        55% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

    #crossfade img.top {
        animation-name: crossfadeFadeInOut;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        animation-duration: 5s;
        animation-direction: alternate;
    }
</style>
</head>
<body>
<span id="crossfade">
    <a href="itemlist.php?category=CellPhone">
    <img class="bottom" src="images/AppleiPhone4s.jpg"
    style="max-width:350px; max-height: 350px; width: auto; height: auto;" />
    <img class="top" src="images/MicromaxKnight2E471.jpg"
    style="max-width:350px;max-height:350px;width: auto;height: auto;" /></a>
</span>
<span id="crossfade">
    <a href="itemlist.php?category="CellPhone">
    <img class="bottom" src="images/MicrosoftLumia640XL.jpg"
    style="max-width:350px;max-height:350px;width:auto; height: auto;" />
    <img class="top" src="images/XperiaT3White.jpg"
    style="max-width:350px;max-height:350px;width:auto;height:auto;" /></a>
</span>
<span id="crossfade">
    <a href="itemlist.php?category=Laptop">
    <img class="bottom" src="images/DellVostro153558.jpg"
    style="max-width:350px; max-height:350px; width:auto; height: auto;" />
    <img class="top" src="images/HPProbook6570.jpg"
    style="max-width:350px; max-height:350px; width:auto; height:auto;" /></a>
</span>
</body>
</html>