<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<link href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<script src="bootstrap3-editable/js/bootstrap-editable.js"></script>
    
</head>

<body>

<div style="padding:20px;">


<table border="1">
    <tr><td>ชื่อ</td><td>อายุ</td><td>เงินเเดือน</td></tr>
    


<?
$con = mysqli_connect("localhost","root","1234","db_test");
$result = mysqli_query($con,"select * from tbl_test");

while($row = mysqli_fetch_array($result)){
    
    echo '<tr>';
    echo '<td>'.$row["first_name"].'</td>';
    echo '<td><a  href="#" class="editTbl" data-type="text" data-name="age" data-pk="'.$row["id"].'" data-url="update.php" data-title="Enter username">'.$row["age"].'</a></td>';
    echo '<td><a  href="#" class="editTbl" data-type="text" data-name="salary" data-pk="'.$row["id"].'" data-url="update.php" data-title="Enter username">'.$row["salary"].'</a></td>';
    echo '</tr>';
    
}

mysqli_close($con);
?>

</table>
</div>
</body>
</html>

<script>
    $(document).ready(function() {
    $('.editTbl').editable({placement:"bottom"});
});
    
</script>
