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
<h2 class="Top-picks_header">Top Picks</h2>
<div class="slider-container">
  <!-- Slider Section -->
  <section class="slider">
    
<!-- Documentary 1 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/ManOnWire.jpg" alt="Man on Wire" class="poster-image">
    <a href="https://www.youtube.com/watch?v=khJY6IEk6Yo" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Man on Wire</a></h3>
      <p class="movies-description">2008 ‧ Documentary ‧ 1h 34m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Man on Wire (2008)</h2>
    <p>
      This documentary chronicles Philippe Petit's daring and illegal high-wire walk between the Twin Towers of New York's World Trade Center in 1974.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> James Marsh</p>
      <p><strong>Writers:</strong> James Marsh, Philippe Petit</p>
      <p><strong>Stars:</strong> Philippe Petit, Jean-François Vulliamy, Annie Allix</p>
    </div>
  </div>
</div>

<!-- Documentary 2 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/SummerOfSoul.jpg" alt="Summer of Soul" class="poster-image">
    <a href="https://www.youtube.com/watch?v=6r5Zg6ydG0g" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Summer of Soul</a></h3>
      <p class="movies-description">2021 ‧ Music/Documentary ‧ 1h 58m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Summer of Soul (2021)</h2>
    <p>
      A powerful documentary that uncovers the Harlem Cultural Festival of 1969, showcasing the significance of Black culture and music.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Questlove</p>
      <p><strong>Writers:</strong> David Dinerstein, Joseph Patel</p>
      <p><strong>Stars:</strong> Stevie Wonder, Mahalia Jackson, Sly & the Family Stone</p>
    </div>
  </div>
</div>

<!-- Documentary 3 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/IAmNotYourNegro.jpg" alt="I Am Not Your Negro" class="poster-image">
    <a href="https://www.youtube.com/watch?v=r6k5skF01Eg" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">I Am Not Your Negro</a></h3>
      <p class="movies-description">2016 ‧ Documentary/Biography ‧ 1h 33m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>I Am Not Your Negro (2016)</h2>
    <p>
      This documentary is based on James Baldwin's unfinished manuscript, focusing on the lives and deaths of Medgar Evers, Malcolm X, and Martin Luther King Jr., examining the history of racism in America.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Raoul Peck</p>
      <p><strong>Writers:</strong> James Baldwin (manuscript), Raoul Peck</p>
      <p><strong>Stars:</strong> Samuel L. Jackson (narrator), James Baldwin (archive footage)</p>
    </div>
  </div>
</div>

<<!-- Documentary 4 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/FireOfLove.jpg" alt="Fire of Love" class="poster-image">
    <a href="https://www.youtube.com/watch?v=ME7Xq4ABh9s" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Fire of Love</a></h3>
      <p class="movies-description">2022 ‧ Documentary/Nature ‧ 1h 33m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Fire of Love (2022)</h2>
    <p>
      This breathtaking documentary follows the lives of Katia and Maurice Krafft, two French volcanologists who risked everything to study and document active volcanoes around the world.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Sara Dosa</p>
      <p><strong>Writers:</strong> Sara Dosa, Shane Boris</p>
      <p><strong>Stars:</strong> Katia Krafft, Maurice Krafft</p>
    </div>
  </div>
</div>

<!-- Documentary 5 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/20FeetFromStardom.jpg" alt="20 Feet from Stardom" class="poster-image">
    <a href="https://www.youtube.com/watch?v=BDzJG7DX3o4" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">20 Feet From Stardom</a></h3>
      <p class="movies-description">2013 ‧ Documentary/Music ‧ 1h 51m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>20 Feet From Stardom (2013)</h2>
    <p>
      This documentary shines a light on the unsung heroes of the music world, the backup singers who provide the soulful backbone to the world's most famous artists.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Morgan Neville</p>
      <p><strong>Writers:</strong> Morgan Neville, Gil Friesen</p>
      <p><strong>Stars:</strong> Darlene Love, Merry Clayton, Lisa Fischer</p>
    </div>
  </div>
</div>

<!-- Documentary 6 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/LifeItself.jpg" alt="Life Itself" class="poster-image">
    <a href="https://www.youtube.com/watch?v=2aPeOgGvZ1I" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Life Itself</a></h3>
      <p class="movies-description">2014 ‧ Documentary/Biography ‧ 1h 59m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Life Itself (2014)</h2>
    <p>
      This documentary follows the life of renowned film critic Roger Ebert, highlighting his career, personal struggles, and legacy, especially in the final years of his life.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Steve James</p>
      <p><strong>Writers:</strong> Steve James, Roger Ebert (memoir)</p>
      <p><strong>Stars:</strong> Roger Ebert, Chaz Ebert, Martin Scorsese</p>
    </div>
  </div>
</div>

<!-- Documentary 7 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/Flee.jpg" alt="Flee" class="poster-image">
    <a href="https://www.youtube.com/watch?v=HlXw6QdsBqE" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Flee</a></h3>
      <p class="movies-description">2021 ‧ Documentary/Animation ‧ 1h 29m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Flee (2021)</h2>
    <p>
      Flee is a powerful animated documentary that tells the story of a young Afghan refugee’s journey to Denmark, revealing the emotional and traumatic experiences of fleeing war and seeking asylum.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Jonas Poher Rasmussen</p>
      <p><strong>Writers:</strong> Jonas Poher Rasmussen</p>
      <p><strong>Stars:</strong> Amin Nawabi (voice), Omid, and others</p>
    </div>
  </div>
</div>

<!-- Documentary 8 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/InsideJob.jpg" alt="Inside Job" class="poster-image">
    <a href="https://www.youtube.com/watch?v=T2IaR6H2eew" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Inside Job</a></h3>
      <p class="movies-description">2010 ‧ Documentary/Finance ‧ 1h 48m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Inside Job (2010)</h2>
    <p>
      Inside Job explores the causes of the 2008 global financial crisis, offering a deep dive into the world of finance, corruption, and corporate greed that led to the collapse.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Charles Ferguson</p>
      <p><strong>Writers:</strong> Charles Ferguson, Chad Beck, Adam Bolt</p>
      <p><strong>Stars:</strong> Matt Damon (narrator), William Black, Eliot Spitzer</p>
    </div>
  </div>
</div>

<!-- Documentary 9 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/Murderball.jpg" alt="Murderball" class="poster-image">
    <a href="https://www.youtube.com/watch?v=FtxTqU8nlk8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Murderball</a></h3>
      <p class="movies-description">2005 ‧ Documentary/Sports ‧ 1h 21m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Murderball (2005)</h2>
    <p>
      Murderball follows the intense world of wheelchair rugby, documenting the lives of athletes with spinal cord injuries and their fierce competition in the Paralympic games.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Henry Alex Rubin, Dana Adam Shapiro</p>
      <p><strong>Writers:</strong> Henry Alex Rubin, Dana Adam Shapiro</p>
      <p><strong>Stars:</strong> Joe Soares, Mark Zupan, Keith Cavill</p>
    </div>
  </div>
</div>

<!-- Documentary 10 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/AnvilTheStoryOfAnvil.jpg" alt="Anvil! The Story of Anvil" class="poster-image">
    <a href="https://www.youtube.com/watch?v=a3ENHWOB_Co" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Anvil! The Story of Anvil</a></h3>
      <p class="movies-description">2008 ‧ Documentary/Music ‧ 1h 20m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Anvil! The Story of Anvil (2008)</h2>
    <p>
      This documentary follows the Canadian heavy metal band Anvil, showing their journey from near-fame in the 1980s to struggling with obscurity in the years that followed, while highlighting their friendship and enduring passion for music.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Sacha Gervasi</p>
      <p><strong>Writers:</strong> Sacha Gervasi</p>
      <p><strong>Stars:</strong> Steve "Lips" Kudlow, Robb Reiner, Michael Belanger</p>
    </div>
  </div>
</div>

<!-- Documentary 12 -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/TheVelvetUnderground.jpg" alt="The Velvet Underground" class="poster-image">
    <a href="https://www.youtube.com/watch?v=Q9tpdZJ5C4w" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">The Velvet Underground</a></h3>
      <p class="movies-description">2021 ‧ Documentary/Music ‧ 2h 20m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>The Velvet Underground (2021)</h2>
    <p>
      This documentary dives into the story of the iconic 1960s avant-garde rock band The Velvet Underground, exploring their artistic legacy and influence on music and culture.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Todd Haynes</p>
      <p><strong>Writers:</strong> Todd Haynes, David Fricke</p>
      <p><strong>Stars:</strong> Lou Reed, John Cale, Sterling Morrison</p>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
<script src="app.js"></script>


   
</body>
</html>