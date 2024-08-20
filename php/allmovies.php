<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Movies</title>
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
  <h1>All Movies</h1>

  $movie_no = $_POST['movie_no'];
    $movie_name = $_POST['movie_name'];
    $year = $_POST['year'];
    $language = $_POST['language'];
    $genre = $_POST['genre'];
    $actor = $_POST['actor'];
    $actress = $_POST['actress'];
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Movie No</span></th>
        <th><span>Movie Name</span></th>
        <th><span>Publish Year</span></th>
        <th><span>Language</span></th>
        <th><span>Genre</span></th>
        <th><span>Actor</span></th>
        <th><span>actress</span></th>
        <th>Movie Image</th>

        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM movies";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["movie_no"] . "</td>";
                echo "<td>" . $row["movie_name"] . "</td>";
                echo "<td>" . $row["year"] . "</td>";
                echo "<td>" . $row["language"] . "</td>";
                echo "<td>" . $row["genre"] . "</td>";
                echo "<td>" . $row["actor"] . "</td>";
                echo "<td>" . $row["actress"] . "</td>";
                echo '<td><img src="' . $row['img'] . '" alt="Movie Image" width="100"></td>';

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