<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table_show</title>
</head>
<body>
<h1 align="center">Table HERE ALL WORK !</h1>

<!--UPORER BUTTON-->

<a href="<?php echo url('tableview/create')?>" style="padding: 10px 20px; background-color: #0c5460;color: #7abaff;margin-right: 50px;text-decoration: none;float: right;">CREATE_HERE</a>


<table border="2" style="margin-top: 80px;">
    <tr align="center">
        <th>ID</th>
        <th>body</th>
        <th>details</th>
        <th>address</th>
        <th>Option</th>
    </tr>
    <?php foreach($posts as $pp){?>
    <tr align="center">
            <td><?php echo $pp->ID?></td>
            <td><?php echo $pp->body?></td>
            <td><?php echo $pp->details?></td>
            <td><?php echo $pp->address?></td>
             <td>
                 <a href="" style="background-color: #0E9A00;color: white;margin: 0px 10px;padding: 10px 14px;border-radius: 10px;">Edit</a>
                 <a href="" style=" background-color: #802022;color: white;margin: 0px 10px;padding: 10px 14px;border-radius: 10px;">Delete</a>

             </td>
    </tr>
    <?php }?>
</table>

</body>
</html>
