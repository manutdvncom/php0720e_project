 <!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigFamily</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <style>
        .link__Social{
            text-decoration: none;
            color: #8a8a8a;
        }
        .footer-col-4 li{
            padding: 5px;
        }
        @-webkit-keyframes popUpEntrada {
            0%{opacity: 0; margin-top: -20%;}
            75%{margin-top: 5%;}
            100%{opacity: 1;}
        }
        @keyframes popUpEntrada {
            0%{opacity: 0; margin-top: -20%;}
            75%{margin-top: 5%;}
            100%{opacity: 1;}
        }
        @-webkit-keyframes popUpSaida {
            0%{opacity: 1;}
            75%{opacity: 1; margin-top: -20%;}
            100%{opacity: 0;margin-top: 40%;}
        }
        @keyframes popUpSaida {
            0%{opacity: 1;}
            75%{opacity: 1; margin-top: -20%;}
            100%{opacity: 0;margin-top: 40%;}
        }
        .popUpEntrada{
            display: block !important;
            animation: popUpEntrada 0.5s;
            -webkit-animation: popUpEntrada 0.5s;
        }
        .popUpSaida{
            display: block !important;
            animation: popUpSaida 0.5s;
            -webkit-animation: popUpSaida 0.5s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
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
        var topbutton = document.getElementById("top-btn");
        var cartbutton = document.getElementById("btn-cart");
        var notification = document.getElementById("notification");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                topbutton.style.display = "block";
                cartbutton.style.display = "block"
                notification.style.display = "block"
            } else {
                topbutton.style.display = "none";
                cartbutton.style.display = "none"
                notification.style.display = "none"

            }
        }

    </script>
</body>
</html>