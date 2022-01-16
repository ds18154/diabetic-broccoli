<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     $messagetext = $_POST['messagetext'];
     $teacher = $_POST['teacher'];
     $sql = "INSERT INTO announcements (messagetext,teacher)
     VALUES ('$messagetext','$teacher')";
     if (mysqli_query($conn, $sql)) {
        echo "The announcement was saved! Add another below or <a href='https://nireas.uop.gr/diabeticbroccoli'>go back to the main page!</a>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Announcement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Insert Form</h2>
                    </div>
                    <p>Please fill this form and submit to add announcement to the database.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Message Text</label>
                            <input type="text" name="messagetext" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Teacher</label>
                            <input type="text" name="teacher" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>