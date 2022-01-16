<?php
    require'conn.php';
    if(ISSET($_POST['filter'])){
        $teacher=$_POST['teacher'];
 
        $query=mysqli_query($conn, "SELECT* FROM `announcements` WHERE `teacher`='$teacher'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr><td>".$fetch['messagetext']."</td><td>".$fetch['teacher']."</td></tr>";
        }
    }else if(ISSET($_POST['reset'])){
        $query=mysqli_query($conn, "SELECT * FROM `announcements`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr><td>".$fetch['messagetext']."</td><td>".$fetch['teacher']."</td></tr>";
        }
    }else{
        $query=mysqli_query($conn, "SELECT * FROM `announcements`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr><td>".$fetch['messagetext']."</td><td>".$fetch['teacher']."</td></tr>";
        }
    }
?>