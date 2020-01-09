<h3 align="center" style="font-size:40px;color: aqua;font-family: Verdana;">LATE UPLOAD PAGE! HERE!</h3>

<!--<h1>--><?php //echo $heading;
//echo '<br>';
//echo $owner;
//?><!--</h1>-->
<!--<p>--><?php //echo $owner;?><!--</p>-->
<!---->
<!--<form action="">-->
<!--    <label for="">ENTER ANYONE : &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="heading" placeholder="Enter your name" required></label><br><br>-->
<!--    <label for="">ENTER PASSWORD:&nbsp;<input type="password" name="password" required></label><br><br>-->
<!--     <button style="margin-left: 100px;" type="submit">SUBMIT</button>-->
<!--</form>-->
<!--<!--<br><br><br><br><br><br><br>-->
<!--<h2>--><?php //echo $heading;
//echo '<br>';
//echo $password;
//
//?><!--</h2>-->
<!-- A STUDENT FULL FORM-->

<form action="" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;<label>STUDENT PHOTO:&nbsp;&nbsp;<input type="file" placeholder="Enter Name" name="file" required></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;  <label>STUDENT NAME:&nbsp;&nbsp;<input type="text" placeholder="Enter Name" name="N" required></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <label>FATHER NAME:&nbsp;&nbsp;<input type="text" placeholder="Enter Father Name" name="F" required></label></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <label>MOTHER NAME:&nbsp;&nbsp;<input type="text" placeholder="Enter Mother Name" name="M" required></label></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <label>SCHOOL NAME:&nbsp;&nbsp;<input type="text" placeholder="Enter School Name" name="S" required></label></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <label>Student ID Card :&nbsp;&nbsp;<input type="text" placeholder="Enter your ID" name="I"></label></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <label>Student Phone :&nbsp;&nbsp;<input type="text" placeholder="Enter your PhoNe" name="P" required></label></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<label>Student GAR Phone :&nbsp;&nbsp;<input type="text" placeholder="Enter your GAR PhoNe" name="G" required></label></label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="STU" required>STUDENT</label><label><input type="checkbox" name="orn" required>OR NOT</label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <label><input type="radio" name="mf" required>MALE</label><label><input type="radio" name="mf" required>FEMALE</label>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;  <button style="margin-left: 100px;" type="submit">SUBMIT</button>

</form>
<!--view-->
<div style="text-align: center">
    <?php
     echo $file;
     echo '<br>';
     echo $n;
     echo '<br>';
     echo $f;
     echo '<br>';
    echo $m;
    echo '<br>';
    echo $s;
    echo '<br>';
    echo $i;
    echo '<br>';
    echo $p;
    echo '<br>';
    echo $g;
    echo '<br>';
    echo $stu;
    echo '<br>';
    echo $ORN;
    echo '<br>';
    echo $MF;
    echo '<br>';

    ?>

</div>
