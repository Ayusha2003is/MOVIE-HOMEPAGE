<?php
session_start();
include("connect.php");

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

<h2 class="Top-picks_header">Fan's Favourite</h2>
<div class="slider-container">
<h2 class="Top-picks_header">Top Picks</h2>
<div class="slider-container">
  <!-- Movie Poster - The Godfather -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/TheGodfather.jpg" alt="The Godfather" class="poster-image">
      <a href="https://www.youtube.com/watch?v=sY1S34973zA" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="toppicks_movies.php">The Godfather</a></h3>
        <p class="movies-description">1972 ‧ Crime/Drama ‧ 2h 55m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>The Godfather (1972)</h2>
      <p>
        The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Francis Ford Coppola</p>
        <p><strong>Writers:</strong> Mario Puzo, Francis Ford Coppola</p>
        <p><strong>Stars:</strong> Marlon Brando, Al Pacino, James Caan</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - The Shawshank Redemption -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/ShawshankRedemption.jpg" alt="The Shawshank Redemption" class="poster-image">
      <a href="https://www.youtube.com/watch?v=6hB3S9bIaco" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="toppicks_movies.php">The Shawshank Redemption</a></h3>
        <p class="movies-description">1994 ‧ Drama ‧ 2h 22m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>The Shawshank Redemption (1994)</h2>
      <p>
        Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Frank Darabont</p>
        <p><strong>Writers:</strong> Stephen King, Frank Darabont</p>
        <p><strong>Stars:</strong> Tim Robbins, Morgan Freeman, Bob Gunton</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - Schindler's List -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/SchindlersList.jpg" alt="Schindler's List" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JdRGCWc6N3M" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="toppicks_movies.php">Schindler's List</a></h3>
        <p class="movies-description">1993 ‧ Biography/Drama/History ‧ 3h 15m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>Schindler's List (1993)</h2>
      <p>
        In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce
        after witnessing their persecution by the Nazis.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Steven Spielberg</p>
        <p><strong>Writers:</strong> Thomas Keneally, Steven Zaillian</p>
        <p><strong>Stars:</strong> Liam Neeson, Ben Kingsley, Ralph Fiennes</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - Citizen Kane -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/CitizenKane.jpg" alt="Citizen Kane" class="poster-image">
      <a href="https://www.youtube.com/watch?v=2e2SMN2Bt6Y" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="toppicks_movies.php">Citizen Kane</a></h3>
        <p class="movies-description">1941 ‧ Mystery/Drama ‧ 1h 59m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>Citizen Kane (1941)</h2>
      <p>
        Following the death of a publishing tycoon, reporters scramble to uncover the meaning of his final utterance: "Rosebud."
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Orson Welles</p>
        <p><strong>Writers:</strong> Herman Mankiewicz, Orson Welles</p>
        <p><strong>Stars:</strong> Orson Welles, Joseph Cotten, Dorothy Comingore</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - Pulp Fiction -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/PulpFiction.jpg" alt="Pulp Fiction" class="poster-image">
      <a href="https://www.youtube.com/watch?v=s7EdQ4FqbhY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="toppicks_movies.php">Pulp Fiction</a></h3>
        <p class="movies-description">1994 ‧ Crime/Drama ‧ 2h 34m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>Pulp Fiction (1994)</h2>
      <p>
        The lives of two mob hitmen, a boxer, a gangster's wife, and a pair of diner bandits intertwine in four tales of violence and redemption.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Quentin Tarantino</p>
        <p><strong>Writers:</strong> Quentin Tarantino</p>
        <p><strong>Stars:</strong> John Travolta, Uma Thurman, Samuel L. Jackson</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - The Dark Knight -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/TheDarkKnight.jpg" alt="The Dark Knight" class="poster-image">
      <a href="https://www.youtube.com/watch?v=EXeTwQWrcwY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="toppicks_movies.php">The Dark Knight</a></h3>
        <p class="movies-description">2008 ‧ Action/Crime/Drama ‧ 2h 32m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>The Dark Knight (2008)</h2>
      <p>
        When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, forcing Batman to come out of retirement.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Christopher Nolan</p>
        <p><strong>Writers:</strong> Jonathan Nolan, Christopher Nolan</p>
        <p><strong>Stars:</strong> Christian Bale, Heath Ledger, Aaron Eckhart</p>
      </div>
    </div>
  </div>
</div>


 </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js">
</script>
<script src="app.js"></script>  
</body>
</html>