<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        .edit-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        .delete-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
	 
    
	<link rel="stylesheet" href="../css/viewregi.css"/>
	<script src="../js/register.js"></script>
</head>
<body>
<!-- header -->

<br><br><br><br><br><br><br><br><br><br>
<!-- update -->
 <div id="wrapper">
  <h1>Movie Schedules Details</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Movie No</span></th>
        <th><span>Movie Name</span></th>
        <th><span>Start Time</span></th>
        <th><span>End Time</span></th>
        <th><span>Interval Start Time</span></th>
        <th><span>Interval End Time</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM movieschedule";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["movie_no"] . "</td>";
                echo "<td>" . $row["movie_name"] . "</td>";
                echo "<td>" . $row["start_time"] . "</td>";
                echo "<td>" . $row["end_time"] . "</td>";
                echo "<td>" . $row["interval_start_time"] . "</td>";
                echo "<td>" . $row["interval_end_time"] . "</td>";
                echo "<td>";
                echo "<a href='schedulupdate.php?id=" . $row["id"] . "' class='edit-button'>Edit</a>";
                echo "<a href='scheduldelete.php?id=" . $row["id"] . "' class='delete-button'>Delete</a>";
                echo "</td>";

                echo "</tr>";

            }
        } else {
            echo "No details to display";
        }

        echo "</table>";

        $conn->close();
        ?>
    </tbody>
  </table>
  <a href="../home.html"><button>Back</button></a>

 </div> 


</body>
</html>