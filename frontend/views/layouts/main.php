<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigFamily</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="../css/all.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/lightslider.min.css"> -->
    <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
    <style>
        .link__Social{
            text-decoration: none;
            color: #8a8a8a;

        }
        .footer-col-4 li{
            padding: 5px;
        }

    </style>
</head>
<body>
    <?php require_once 'header.php';?>

    <?php
        echo $this->content
    ?>

    <?php require_once 'footer.php';?>

    <script>
        var menuitems = document.getElementById("menuitems");
        menuitems.style.maxHeight = "0px";
        function menutoggle() {
            if (menuitems.style.maxHeight=="0px"){
                menuitems.style.maxHeight = "200px";
            } else {
                menuitems.style.maxHeight = "0px";
            }
        }
        var mybutton = document.getElementById("top-btn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        // function topFunction() {
        //     document.body.scrollTop = 0;
        //     document.documentElement.scrollTop = 0;
        // }
        // $(document).ready(function() {
        //     var autoplaySlider = $('#autoplay').lightSlider({
        //         adaptiveHeight:true,
        //         item:1,
        //         slideMargin:0,
        //         auto:true,
        //         loop:true,
        //         pauseOnHover: true,
        //         onBeforeSlide: function (el) {
        //             $('#current').text(el.getCurrentSlideCount());
        //         }
        //     });
        //     $('#total').text(autoplaySlider.getTotalSlideCount());
        // });
    </script>
</body>
</html>