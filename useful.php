
<?php
session_start();
include("connect.php"); // Include your database connection file
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="faviconn.png" type="image/png">
  <link rel="stylesheet" href="Topicks.css">
  <title>Theatrick: Your Ultimate Gateway to Films</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="navbar">
  <a href="index.html" id="logo">
    <img src="image/logo-color.png" alt="Website Logo">
  </a>

  <div id="searchContainer" class="search-container" style="display: none;">
    <input type="text" placeholder="Search.." id="Search" name="Search">
  </div>

  <button class="nav-button" id="searchButton">
    <img src="image/search.png" alt="Search">
  </button>

  <button class="nav-button" id="voiceButton">
    <img src="image/microphone-black-shape.png" alt="Voice Search">
  </button>
  
  <button class="nav-button" id="Notification">
    <img src="image/notification.png" alt="Notification">
  </button>

  <button class="nav-button" id="profile">
    <img src="image/profile.jpg" alt="profile">
  </button>
  <div class="nav-links">
    <a href="homepage.php">Home</a>
    <a href="movies.php">Movies</a>
    <a href="Series.php">Series</a>
    <a href="documentaries.php">Documentaries</a>
    <a href="watchlist.php">My Watchlist</a>
  </div>

  <div class="user-controls">
    <?php 
      if (isset($_SESSION['email'])) {
          $email = $_SESSION['email'];
          $query = mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'");
          if ($query && mysqli_num_rows($query) > 0) {
              $row = mysqli_fetch_assoc($query);
              echo "<span class='welcome-message'>Hello, " . htmlspecialchars($row['firstName']) . " " . htmlspecialchars($row['lastName']) . "</span>";
          } else {
              echo "<span class='welcome-message'>Error: Unable to fetch user data.</span>";
          }
      } else {
          echo "<span class='welcome-message'>Welcome, Guest!</span>";
      }
    ?>
    <a href="logout.php" class="logout-button">Logout</a>
  </div>
</div>

<h2 class="Top-picks_header">Top Picks</h2>
<div class="slider-container">
  <section class="slider">
    <?php
    // Fetch movies from the 'home' table
    $query = "SELECT title, genre, release_year, duration, image_url, trailer_url, description FROM home";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="movies-poster">';
            echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['title']) . '" class="poster-image">';
            echo '<a href="' . htmlspecialchars($row['trailer_url']) . '" target="_blank" class="plays-button">▶</a>';
            echo '<div class="movies-info">';
            echo '<h3 class="movies-title">' . htmlspecialchars($row['title']) . '</h3>';
            echo '<p class="movies-description">' . htmlspecialchars($row['release_year']) . ' ‧ ' . htmlspecialchars($row['genre']) . ' ‧ ' . htmlspecialchars($row['duration']) . '</p>';
            echo '<p class="movies-description">' . htmlspecialchars($row['description']) . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No movies found in the database.</p>';
    }
    ?>
  </section>
</div>

<footer class="footer">
  <div class="footer-content">
    <p>&copy; 2024 Your Movie Website. All rights reserved.</p>
    <ul class="footer-links">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
<script src="app.js"></script>  
</body>
</html>
