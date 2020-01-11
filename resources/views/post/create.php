<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create_page</title>
</head>
<body>
<h1 align="center">CREATE_PAGE HERE !</h1>
<!--  FOROM-->
<form action="<?php echo url('tableview/store')?>">
    <label for="">body</label>
    <input type="text" name="body">
    <br><br>
    <label for="">details</label>
    <textarea name="details" id="" cols="30" rows="6"></textarea>
    <br><br>
    <label for="">address</label>
    <input type="text" name="address">
    <br><br>
    <button type="submit">Store</button>
</form>
</body>
</html>
