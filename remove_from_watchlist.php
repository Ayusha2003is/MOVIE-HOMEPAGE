<?php
session_start();
include("connect.php");

if (!isset($_SESSION['email'])) {
    echo "You need to log in to remove movies from your watchlist.";
    exit;
}

$email = $_SESSION['email'];
$query = "SELECT id FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
$user_id = $user['id'];

if (isset($_GET['movie_id'])) {
    // Remove movie from the watchlist
    $movie_id = $_GET['movie_id'];
    $delete_query = "DELETE FROM watchlist WHERE user_id = '$user_id' AND movie_id = '$movie_id'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Movie removed from your watchlist!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    exit; // Make sure to exit here to prevent further execution of code below
}

// Fetch movies from the user's watchlist
$query = "SELECT m.id, m.title, m.image_url FROM watchlist w JOIN home m ON w.movie_id = m.id WHERE w.user_id = '$user_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="faviconn.png" type="image/png">
    <link rel="stylesheet" href="USERWATCHLIST.css">
    <title>Your Watchlist</title>
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
              echo "<span class='welcome-message'>Hello, " . $row['firstName'] . " " . $row['lastName'] . "</span>";
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
<div class="movies-container">
    <h2 class="movies-header">Your Watchlist</h2>
    <div class="movies-list">
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="movie-item">';
                echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['title']) . '" class="movie-poster">';
                echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                echo '<button class="remove-from-watchlist" onclick="removeMovie(' . $row['id'] . ')">Remove from Watchlist</button>';
                echo '</div>';
            }
        } else {
            echo '<p>No movies in your watchlist.</p>';
        }
        ?>
    </div>
</div>

<script>
// Function to handle movie removal from the watchlist
function removeMovie(movieId) {
    // Ask for confirmation before removing
    const confirmRemove = confirm("Are you sure you want to remove this movie from your watchlist?");
    
    if (confirmRemove) {
        // Perform an AJAX request to remove the movie
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "?movie_id=" + movieId, true);  // Sending request with movie_id
        xhr.onload = function() {
            if (xhr.status === 200) {
                // If the request is successful, show an alert
                alert(xhr.responseText);
                // Optionally, you can remove the movie from the page dynamically
                location.reload(); // Reload the page to reflect changes
            } else {
                alert("Error: " + xhr.responseText);
            }
        };
        xhr.send();
    }
}
</script>

</body>
</html>
