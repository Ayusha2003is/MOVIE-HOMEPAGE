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

<h2 class="Top-picks_header">Fan's Favourite</h2>
<div class="slider-container">

  <!-- Movie Poster - Hocus Pocus -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/HocusPocus.jpeg" alt="Hocus Pocus" class="poster-image">
      <a href="https://www.youtube.com/watch?v=2UUMsInka2s" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">Hocus Pocus</a></h3>
        <p class="movies-description">1993 ‧ Fantasy/Comedy ‧ 1h 36m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>Hocus Pocus (1993)</h2>
      <p>
        For 30 years, the Sanderson Sisters have been casting spells. Now see them back on the big screen for a limited time as we celebrate the 30th Anniversary of Hocus Pocus! Conjured up by some unsuspecting pranksters, a tricky trio of 300-year-old witches set out to cast a spell on the town and reclaim their youth. But first, they must get their act together and outwit three kids and a talking cat.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Kenny Ortega</p>
        <p><strong>Writers:</strong> Neil Cuthbert, Mick Garris</p>
        <p><strong>Stars:</strong> Bette Midler, Sarah Jessica Parker, Kathy Najimy</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - The Lion King -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/TheLionKing.jpeg" alt="The Lion King" class="poster-image">
      <a href="https://www.youtube.com/watch?v=7TavVZMewpY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">The Lion King</a></h3>
        <p class="movies-description">1994 ‧ Adventure/Family ‧ 1h 28m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>The Lion King (1994)</h2>
      <p>
        A young lion prince is cast out of his pride by his evil uncle, who claims he killed his father. While growing up in exile, he learns the true meaning of responsibility and bravery.
      </p>
      <div class="movie-details">
        <p><strong>Directors:</strong> Roger Allers, Rob Minkoff</p>
        <p><strong>Writers:</strong> Irene Mecchi, Jonathan Roberts</p>
        <p><strong>Stars:</strong> Matthew Broderick, Jeremy Irons, James Earl Jones</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - Matilda -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/Matilda.jpeg" alt="Matilda" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oHDg7Q6OqKA" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">Matilda</a></h3>
        <p class="movies-description">1996 ‧ Fantasy/Comedy ‧ 1h 42m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>Matilda (1996)</h2>
      <p>
        A young girl with extraordinary powers overcomes the neglect and cruelty of her family and headmistress to find a sense of belonging with her kind-hearted teacher.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Danny DeVito</p>
        <p><strong>Writers:</strong> Roald Dahl, Nicholas Kazan</p>
        <p><strong>Stars:</strong> Mara Wilson, Danny DeVito, Rhea Perlman</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - You've Got Mail -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/YouveGotMail.jpeg" alt="You've Got Mail" class="poster-image">
      <a href="https://www.youtube.com/watch?v=dmEvPZUdAVI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">You've Got Mail</a></h3>
        <p class="movies-description">1998 ‧ Romance/Comedy ‧ 1h 59m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>You've Got Mail (1998)</h2>
      <p>
        Two business rivals who despise each other in real life unwittingly fall in love over the internet without realizing the other's true identity.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Nora Ephron</p>
        <p><strong>Writers:</strong> Nora Ephron, Delia Ephron</p>
        <p><strong>Stars:</strong> Tom Hanks, Meg Ryan, Greg Kinnear</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - The Sixth Sense -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/TheSixthSense.png" alt="The Sixth Sense" class="poster-image">
      <a href="https://www.youtube.com/watch?v=VG9AGf66tXM" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">The Sixth Sense</a></h3>
        <p class="movies-description">1999 ‧ Thriller/Drama ‧ 1h 47m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>The Sixth Sense (1999)</h2>
      <p>
        A young boy who communicates with spirits that don't know they're dead seeks the help of a disheartened child psychologist.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> M. Night Shyamalan</p>
        <p><strong>Writers:</strong> M. Night Shyamalan</p>
        <p><strong>Stars:</strong> Bruce Willis, Haley Joel Osment, Toni Collette</p>
      </div>
    </div>
  </div>

  <!-- Movie Poster - The Holiday -->
  <div class="movie-container">
    <div class="movies-poster">
      <img src="image/TheHoliday.jpg" alt="The Holiday" class="poster-image">
      <a href="https://www.youtube.com/watch?v=BDi5zH18vxU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">The Holiday</a></h3>
        <p class="movies-description">2006 ‧ Romance/Comedy ‧ 2h 16m</p>
      </div>
    </div>
    <div class="movie-information">
      <h2>The Holiday (2006)</h2>
      <p>
        Two women, one from America and one from England, who are facing heartache, swap homes for the holidays and unexpectedly find romance.
      </p>
      <div class="movie-details">
        <p><strong>Director:</strong> Nancy Meyers</p>
        <p><strong>Writers:</strong> Nancy Meyers</p>
        <p><strong>Stars:</strong> Cameron Diaz, Kate Winslet, Jude Law</p>
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