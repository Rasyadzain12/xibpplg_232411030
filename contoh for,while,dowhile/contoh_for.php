<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tanggal Lahir :
    <select name=tanggal>
    <option selected=selected>tanggal</option>
    <?php
        for($i=1;$i<=31;$i++)
    {
        echo"<option value=$i>$i</option>";
    }
    ?>
</body>
</html>