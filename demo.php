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
    <a href="watchlist.php">My Watchlist</a>
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

<h2 class="Top-picks_header">Trending TV Series</h2>
<div class="slider-container">
  <!-- Slider Section -->
  <section class="slider">
    
    <!-- Series Poster - The Last of Us -->
    <div class="movies-poster">
      <img src="image/The_Last_of_Us.jpg" alt="The Last of Us" class="poster-image">
      <a href="https://www.youtube.com/watch?v=AAk3e66Xo18" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Tv_series(Series).php">The Last of Us</a></h3>
        <p class="movies-description">2023 ‧ Drama/Horror ‧ 1 Season</p>
      </div>
      <div class="movie-information">
        <h2>The Last of Us (2023)</h2>
        <p>
          A global pandemic, caused by a fungal infection, leads to the downfall of humanity. Joel and Ellie must navigate a brutal post-apocalyptic world.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Craig Mazin, Neil Druckmann</p>
          <p><strong>Writers:</strong> Craig Mazin, Neil Druckmann</p>
          <p><strong>Stars:</strong> Pedro Pascal, Bella Ramsey, Nico Parker</p>
        </div>
      </div>
    </div>
    
    <!-- Series Poster - The Boys -->
    <div class="movies-poster">
      <img src="image/The_Boys.jpg" alt="The Boys" class="poster-image">
      <a href="https://www.youtube.com/watch?v=0bV_5rT_Tek" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Tv_series(Series).php">The Boys</a></h3>
        <p class="movies-description">2019 ‧ Action/Comedy ‧ 3 Seasons</p>
      </div>
      <div class="movie-information">
        <h2>The Boys (2019)</h2>
        <p>
          A group of vigilantes known as "The Boys" sets out to take down corrupt superheroes who abuse their powers.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Eric Kripke</p>
          <p><strong>Writers:</strong> Eric Kripke, Garth Ennis</p>
          <p><strong>Stars:</strong> Karl Urban, Jack Quaid, Antony Starr</p>
        </div>
      </div>
    </div>
    
    <!-- Series Poster - The Morning Show -->
    <div class="movies-poster">
      <img src="image/The_Morning_Show.jpg" alt="The Morning Show" class="poster-image">
      <a href="https://www.youtube.com/watch?v=nI9McjADpsI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Tv_series(Series).php">The Morning Show</a></h3>
        <p class="movies-description">2019 ‧ Drama/Comedy ‧ 3 Seasons</p>
      </div>
      <div class="movie-information">
        <h2>The Morning Show (2019)</h2>
        <p>
          A drama series that explores the cutthroat world of morning TV shows, featuring a complex web of relationships, power struggles, and behind-the-scenes drama.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Mimi Leder</p>
          <p><strong>Writers:</strong> Jay Carson, Kerry Ehrin</p>
          <p><strong>Stars:</strong> Jennifer Aniston, Reese Witherspoon, Steve Carell</p>
        </div>
      </div>
    </div>
    
    <!-- Series Poster - The Umbrella Academy -->
    <div class="movies-poster">
      <img src="image/The_Umbrella_Academy.jpg" alt="The Umbrella Academy" class="poster-image">
      <a href="https://www.youtube.com/watch?v=0DAp9z9e8E8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Tv_series(Series).php">The Umbrella Academy</a></h3>
        <p class="movies-description">2019 ‧ Superhero/Fantasy ‧ 3 Seasons</p>
      </div>
      <div class="movie-information">
        <h2>The Umbrella Academy (2019)</h2>
        <p>
          A dysfunctional family of adopted super-powered siblings reunites to solve the mystery of their father's death and prevent an impending apocalypse.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Steve Blackman</p>
          <p><strong>Writers:</strong> Steve Blackman, Gerard Way</p>
          <p><strong>Stars:</strong> Ellen Page, Tom Hopper, David Castañeda</p>
        </div>
      </div>
    </div>
    
    <!-- Series Poster - Peaky Blinders -->
    <div class="movies-poster">
      <img src="image/Peaky_Blinders.jpg" alt="Peaky Blinders" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oVzLvzFf8UM" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Tv_series(Series).php">Peaky Blinders</a></h3>
        <p class="movies-description">2013 ‧ Crime/Drama ‧ 6 Seasons</p>
      </div>
      <div class="movie-information">
        <h2>Peaky Blinders (2013)</h2>
        <p>
          A crime drama set in post-WWI Birmingham, following the exploits of the Shelby crime family and their rise to power.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Steven Knight</p>
          <p><strong>Writers:</strong> Steven Knight</p>
          <p><strong>Stars:</strong> Cillian Murphy, Helen McCrory, Paul Anderson</p>
        </div>
      </div>
    </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js">
</script>
<script src="app.js"></script>  
</body>
</html>