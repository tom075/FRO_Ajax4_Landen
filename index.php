<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>ajax landen</title>
</head>

<script src="js/search.js">
    searchCountry = document.getElementById('searchCountry');
    searchCountry.addEventListener('keyup', function () {
        showList(searchCountry,'list');
    });
</script>
<body>



<p>
    <img src="http://ma-web.nl/static/vector/Logo_blok.svg" width="30">
    Ajax 4: Zoek landen
</p>
<form action="getdata.php?q" >
<input type="text" name="search" id="searchCountry" onkeyup="showList(this.value, 'list')" placeholder="Zoek een land">
</form>
<br>
<div id="txtHint">Hier komt de list</div>
</body>
</html>