<?php
session_start();
include("connect.php");

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    echo "You need to log in to view your watchlist.";
    exit;
}

// Get the user ID based on the session email
$email = $_SESSION['email'];
$query = "SELECT id FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $user_id = $user['id'];
} else {
    echo "User not found.";
    exit;
}

// Fetch movies from the user's watchlist
$watchlist_query = "SELECT h.title, h.genre, h.release_year, h.duration, h.image_url, h.trailer_url, h.description 
                    FROM home h
                    JOIN watchlist w ON h.id = w.movie_id
                    WHERE w.user_id = '$user_id'";
$watchlist_result = mysqli_query($conn, $watchlist_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="faviconn.png" type="image/png">
  <link rel="stylesheet" href="MypersonalCSS.css">
  <title>Theatrick: Your Ultimate Gateway to Films</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="navbar">
<a href="homepage.php" id="logo">
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
    <img src="image\notification.png" alt="Notification">
  </button>

  <button class="nav-button" id="profile">
    <img src="image\profile.jpg" alt="profile">
  </button>
  
  <div class="nav-links">
    <a href="homepage.php">Home</a>
    <a href="movies.php">Movies</a>
    <a href="Series.php">Series</a>
    <a href="documentaries.php">Documentaries</a>
    <a href="MypersonalWatchlists.php">My Watchlist</a>
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


<div class="add-more-container">
  <a href="watchlistt.php" class="add-more-button">Add More</a>
</div>
<div class="remove-more-container">
  <a href="remove_from_watchlist.php" class="remove-more-button">REMOVE</a>
</div>


<div class="watchlist-container">
    <?php
    if ($watchlist_result && mysqli_num_rows($watchlist_result) > 0) {
        while ($row = mysqli_fetch_assoc($watchlist_result)) {
            echo '<div class="movies-poster">';
            echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['title']) . '" class="poster-image">';
            echo '<a href="' . htmlspecialchars($row['trailer_url']) . '" target="_blank" class="plays-button">▶</a>';
            echo '<div class="movies-info">';
            echo '<h3 class="movies-title">' . htmlspecialchars($row['title']) . '</h3>';
            echo '<p class="movies-description">' . htmlspecialchars($row['release_year']) . ' ‧ ' . htmlspecialchars($row['genre']) . ' ‧ ' . htmlspecialchars($row['duration']) . '</p>';
            echo '</div>';  // Close movies-info
            echo '</div>';  // Close movies-poster
        }
    } else {
        echo '<p>Your watchlist is empty.</p>';
    }
    ?>
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
