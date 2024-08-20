<!DOCTYPE html>
<html>
<head>
    <title>Add Movie Shedule</title>
    
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

  include("config.php");
  include("function1.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $movie_no = $_POST['movie_no'];
    $movie_name = $_POST['movie_name'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $interval_start_time = $_POST['interval_start_time'];
    $interval_end_time = $_POST['interval_end_time'];
   
  

 


    if(!empty($start_time) && !empty($end_time) )
    {
        

       

        
       

            //save to database
            $user_id = random_num(20);
            $query = "insert into movieschedule(user_id,movie_no,movie_name,start_time,end_time,interval_start_time,interval_end_time) values ('$user_id','$movie_no','$movie_name','$start_time','$end_time','$interval_start_time','$interval_end_time')";

            mysqli_query($conn,$query);

            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully added movie !!!');
    window.location.href='allscheduledetail.php';
    </script>");

        
        
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
?>



<form id="Register" method="POST">
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
                    <label>start time:</label>
                    <input type="time" name="start_time" class="input-field" placeholder="Enter start time" required>
                    <label>end time:</label>
                    <input type="time" name="end_time" class="input-field" placeholder="Enter end time" required>
                    <label>Interval start time:</label>
                    <input type="time" name="interval_start_time" class="input-field" placeholder="Enter interval start time" required>
                    <label>Interval end time:</label>
                    <input type="time" name="interval_end_time" class="input-field" placeholder="Enter interval end time" required>
                   
                    <br>
                </div>
            </div>
            <center>
                <br><br>
            <button type="submit" name="SignUp" class="submit-btn">Register</button>
        </center>
        </div>
    </div>
</form>
</body>
</html>
