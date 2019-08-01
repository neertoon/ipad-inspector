<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
<span id="data">Tu bedzie</span><br>
<a onclick="show()">Inspektuj</a>
</body>
<script>
    
    
    function show() {
        var is_iPad = navigator.userAgent.match(/iPad/i) != null;
        var isMobileScreen = screen.width <= 768;
        // var isMobileCard = (window.mobilecheck() || is_iPad) && isMobileScreen;
        
        var napis = '';
        napis += is_iPad+'<br>';
        napis += isMobileScreen+'<br>';
        // napis += isMobileCard+'<br>';
        napis += navigator.userAgent+'<br>';
        napis += screen.width+'<br>';
        
        $('#data').html(napis);
    }
</script>
</html>