<!DOCTYPE html>
<html>
<head>
    <title>My First Database</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <form class="myform" action="input01.php" method="POST">
        <!-- Moved the form opening tag here -->

        <label>Photography Club</label><br>
        <label>Nama:</label><br>
        <input type="text" name="nama" class="inputvalues" placeholder="Enter Member's Name" required/><br>

        <label>Photography Mark:</label><br>
        <input type="text" name="markah" class="inputvalues" placeholder="Enter photo marks" required/><br>

        <label>tingkatan:</label><br>
        <input type="text" name="tingkatan" class="inputvalues" placeholder="Enter tingkatan" required/><br>
        <br>
        <label>jantina:</label><br>
        <select name="jantina" required>
            <option value="lelaki">lelaki</option>
            <option value="perempuan">perempuan</option>
        </select>
        <br><br>
        <input type="submit" name="submit_btn" id="signup_btn" value="Enter">
        <input type="button" onclick="location.href='report02.php'" value="Report"/>
    </form> <!-- Closed the form tag here -->

    <?php
    if(isset($_POST['submit_btn']))
    {
        $nama=$_POST['nama'];
        $markah=$_POST['markah'];
        $tingkatan=$_POST['tingkatan'];
        $jantina=$_POST['jantina'];

        $con = mysqli_connect("localhost", "root","") or die("unable to connect");
        mysqli_select_db($con, "kelab_fotografi");

        $query="insert into club_member (nama, markah, tingkatan, jantina) values ('$nama','$markah','$tingkatan','$jantina')";
        $query_run= mysqli_query($con, $query);

        if($query_run){
            echo '<script type="text/javascript">alert("Mark registered. Enter text number")</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Error!")</script>';
        }
    }
    ?>
</body>
</html>
