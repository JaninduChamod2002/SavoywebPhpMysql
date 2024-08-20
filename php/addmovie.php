<!DOCTYPE html>
<html>
<head>
    <title>Add Movie </title>
    
    <link rel="stylesheet" href="../css/apply_sponsership.css">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .input-field {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            text-align: left;
        }
        
        .submit-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ff7200;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .submit-btn:hover {
            background-color: #ff5500;
        }
        
        .submit-btn:active {
            background-color: #ff8800;
        }
    </style>
</head>
<body>
<header>
    <div class="icon">SA<b style="color: #ff7200">V</b>OY</div>
    <div class="search_box">
        <input type="search" placeholder="Search" />
        <a href="#"><i class="fa fa-search icon-search"></i></a>
    </div>
    <ol>
    <ol>
          <li><a href="../home.html">Home</a></li>
          <li><a href="searchschedule.php">Schedules</a></li>
          <li><a href="addmovieschedule.php">Add Schedules</a></li>
          <li><a href="addmovie.php">Add Movie</a></li>
          <li><a href="../Feedback.html">Feedback</a></li>
          <li><a href="../Contactus.html">Contact</a></li>
          <li><a href="../payment.html">Book Now</a></li>
          <li><a href="login.php">LogIn</a></li>
      </ol>
</header>



<?php
session_start();

include("config.php"); // Assuming config.php contains your database connection details
include("function1.php"); // Include any necessary functions

if($_SERVER['REQUEST_METHOD'] === "POST") {
    // Validate and sanitize inputs (example)
    $movie_no = mysqli_real_escape_string($conn, $_POST['movie_no']);
    $movie_name = mysqli_real_escape_string($conn, $_POST['movie_name']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $language = mysqli_real_escape_string($conn, $_POST['language']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $actor = mysqli_real_escape_string($conn, $_POST['actor']);
    $actress = mysqli_real_escape_string($conn, $_POST['actress']);

    // File upload handling
    if(isset($_FILES['movie_image'])) {
        $file = $_FILES['movie_image'];

        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo "File upload error: " . $file['error'];
            exit;
        }

        // Check if the file is an image
        if (!getimagesize($file['tmp_name'])) {
            echo "Uploaded file is not an image.";
            exit;
        }

        // Generate a unique filename
        $image_filename = uniqid() . '_' . basename($file['name']);
        $upload_path = 'uploads/' . $image_filename; // Define the upload path

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($file['tmp_name'], $upload_path)) {
            // Prepare and execute SQL statement using prepared statement
            $stmt = $conn->prepare("INSERT INTO movies (movie_no, movie_name, year, language, genre, actor, actress, img) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $movie_no, $movie_name, $year, $language, $genre, $actor, $actress, $upload_path);

            if ($stmt->execute()) {
                // Success message and redirect
                echo '<script>alert("Successfully added movie!"); window.location.href="allmovies.php";</script>';
                exit;
            } else {
                echo "Error inserting data into database: " . $stmt->error;
            }
        } else {
            echo "Error moving uploaded file to destination.";
        }
    } else {
        echo "No file uploaded.";
    }
}
?>



<form id="ADD" method="POST" enctype="multipart/form-data">
    <div class="raw"> 
        <div class="container_p">    
            <div class="col2">
                <h1>Add movie Schedule</h1>
            </div>      
            <br>
            <br><br>
            <div class="col3">  
                
                <br>
                <div class="pc"> 
                    <label>Movie No:</label>
                    <input type="text" name="movie_no" class="input-field" placeholder="Enter movie number" required>
                    <label>Movie Name:</label>
                    <input type="text" name="movie_name" class="input-field" placeholder="Enter movie name" required>
                    <label>Movie publish year:</label>
                    <input type="date" name="year" class="input-field" placeholder="Enter movie publish year" required>
                    <label>Movie language:</label>
                    <input type="text" name="language" class="input-field" placeholder="Enter movie language" required>
                    <label>Movie genre:</label>
                    <input type="text" name="genre" class="input-field" placeholder="Enter movie genre" required>
                    <label>Main actor:</label>
                    <input type="text" name="actor" class="input-field" placeholder="Enter Main actor" required>
                    <label>Main actress:</label>
                    <input type="text" name="actress" class="input-field" placeholder="Enter Main actress" required>
                    <label for="movie_image">Movie Image:</label>
                    <input type="file" id="movie_image" name="movie_image" accept="image/*" required><br><br>
                   
                    <br>
                </div>
            </div>
            <center>
                <br><br>
            <button type="submit" name="SignUp" class="submit-btn">ADD</button>
        </center>
        </div>
    </div>
</form>
</body>
</html>
