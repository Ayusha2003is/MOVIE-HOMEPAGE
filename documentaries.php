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
  <link rel="stylesheet" href="mycss.css">
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

<div class="trending-slideshow">
    <div class="trending-banner">
      <h2 id="trending-text">Today's Trending Series on Theatrick: Most Searched Documentaries!</h2>
    </div>
</div>

<div class="slideshow-container">
  
  <div class="slide">
    <div class="movie-poster">
      <img src="image\the-social-dilemma.jpg" alt="The Social Dilemma" class="poster-image">
      <a href="https://www.youtube.com/watch?v=uaaC57tcci0" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">The Social Dilemma</h3>
        <p class="movie-description">2020 ‧ Documentary/Social Issues ‧ 1h 34m</p>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="movie-poster">
      <img src="image\our-planet.jpg" alt="Our Planet" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5gOZp65KHgM" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">Our Planet</h3>
        <p class="movie-description">2019 ‧ Documentary/Environmental ‧ 8 episodes</p>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="movie-poster">
      <img src="image\won't-you-be-my-neighbor.jpg" alt="Won't You Be My Neighbor?" class="poster-image">
      <a href="https://www.youtube.com/watch?v=FhwktRDG_aQ" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">Won't You Be My Neighbor?</h3>
        <p class="movie-description">2018 ‧ Biography/Documentary ‧ 1h 34m</p>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="movie-poster">
      <img src="image\13th.jpg" alt="13th" class="poster-image">
      <a href="https://www.youtube.com/watch?v=krfcq5pF8u8" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">13th</h3>
        <p class="movie-description">2016 ‧ Documentary/History ‧ 1h 40m</p>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="movie-poster">
      <img src="image\free-solo.jpg" alt="Free Solo" class="poster-image">
      <a href="https://www.youtube.com/watch?v=urRVZ8bYj2M" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">Free Solo</h3>
        <p class="movie-description">2018 ‧ Documentary/Sport ‧ 1h 40m</p>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="movie-poster">
      <img src="image\making-a-murderer.jpg" alt="Making a Murderer" class="poster-image">
      <a href="https://www.youtube.com/watch?v=YrNoz4C6c74" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">Making a Murderer</h3>
        <p class="movie-description">2015 ‧ Documentary/Crime ‧ 10 episodes</p>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="movie-poster">
      <img src="image\the-cove.jpg" alt="The Cove" class="poster-image">
      <a href="https://www.youtube.com/watch?v=4K6z7eV6guQ" target="_blank" class="play-button">▶</a>
      <div class="movie-info">
        <h3 class="movie-title">The Cove</h3>
        <p class="movie-description">2009 ‧ Documentary/Environmental ‧ 1h 32m</p>
      </div>
    </div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

<h2 class="Top-picks_header">Top Picks</h2>
<div class="slider-container">
 
  <!-- Slider Section -->
  <section class="slider">
    
  <!-- Documentary 1 -->
  <div class="movies-poster">
    <img src="image/ManOnWire.jpg" alt="Man on Wire" class="poster-image">
    <a href="https://www.youtube.com/watch?v=khJY6IEk6Yo" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href="Top_Picks_doc.php">Man on Wire</h3>
      <p class="movies-description">2008 ‧ Documentary ‧ 1h 34m</p>
    </div>
  </div>

  <!-- Documentary 2 -->
  <div class="movies-poster">
    <img src="image/SummerOfSoul.jpg" alt="Summer of Soul" class="poster-image">
    <a href="https://www.youtube.com/watch?v=6r5Zg6ydG0g" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Summer of Soul (...Or, When the Revolution Could Not Be Televised)</h3>
      <p class="movies-description">2021 ‧ Music/Documentary ‧ 1h 58m</p>
    </div>
  </div>

  <!-- Documentary 3 -->
  <div class="movies-poster">
    <img src="image/IAmNotYourNegro.jpg" alt="I Am Not Your Negro" class="poster-image">
    <a href="https://www.youtube.com/watch?v=r6k5skF01Eg" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">I Am Not Your Negro</h3>
      <p class="movies-description">2016 ‧ Documentary/Biography ‧ 1h 33m</p>
    </div>
  </div>

  <!-- Documentary 4 -->
  <div class="movies-poster">
    <img src="image/FireOfLove.jpg" alt="Fire of Love" class="poster-image">
    <a href="https://www.youtube.com/watch?v=ME7Xq4ABh9s" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Fire of Love</h3>
      <p class="movies-description">2022 ‧ Documentary/Nature ‧ 1h 33m</p>
    </div>
  </div>

  <!-- Documentary 5 -->
  <div class="movies-poster">
    <img src="image/20FeetFromStardom.jpg" alt="20 Feet from Stardom" class="poster-image">
    <a href="https://www.youtube.com/watch?v=BDzJG7DX3o4" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">20 Feet From Stardom</h3>
      <p class="movies-description">2013 ‧ Documentary/Music ‧ 1h 51m</p>
    </div>
  </div>

  <!-- Documentary 6 -->
  <div class="movies-poster">
    <img src="image/LifeItself.jpg" alt="Life Itself" class="poster-image">
    <a href="https://www.youtube.com/watch?v=2aPeOgGvZ1I" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Life Itself</h3>
      <p class="movies-description">2014 ‧ Documentary/Biography ‧ 1h 59m</p>
    </div>
  </div>

  <!-- Documentary 7 -->
  <div class="movies-poster">
    <img src="image/Flee.jpg" alt="Flee" class="poster-image">
    <a href="https://www.youtube.com/watch?v=HlXw6QdsBqE" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Flee</h3>
      <p class="movies-description">2021 ‧ Documentary/Animation ‧ 1h 29m</p>
    </div>
  </div>

  <!-- Documentary 8 -->
  <div class="movies-poster">
    <img src="image/InsideJob.jpg" alt="Inside Job" class="poster-image">
    <a href="https://www.youtube.com/watch?v=T2IaR6H2eew" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Inside Job</h3>
      <p class="movies-description">2010 ‧ Documentary/Finance ‧ 1h 48m</p>
    </div>
  </div>

  <!-- Documentary 9 -->
  <div class="movies-poster">
    <img src="image/Murderball.jpg" alt="Murderball" class="poster-image">
    <a href="https://www.youtube.com/watch?v=FtxTqU8nlk8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Murderball</h3>
      <p class="movies-description">2005 ‧ Documentary/Sports ‧ 1h 21m</p>
    </div>
  </div>

  <!-- Documentary 10 -->
  <div class="movies-poster">
    <img src="image/AnvilTheStoryOfAnvil.jpg" alt="Anvil! The Story of Anvil" class="poster-image">
    <a href="https://www.youtube.com/watch?v=a3ENHWOB_Co" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title"><a href ="Top_Picks_doc.php">Anvil! The Story of Anvil</h3>
      <p class="movies-description">2008 ‧ Documentary/Music ‧ 1h 20m</p>
    </div>
  </div>

  <!-- Documentary 11 -->
  <div class="movies-poster">
    <img src="image/Blackfish.jpg" alt="Blackfish" class="poster-image">
    <a href="https://www.youtube.com/watch?v=Yp0npzJKXJ8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Blackfish</h3>
      <p class="movies-description">2013 ‧ Documentary/Environmental ‧ 1h 23m</p>
    </div>
  </div>

  <!-- Documentary 12 -->
  <div class="movies-poster">
    <img src="image/TheVelvetUnderground.jpg" alt="The Velvet Underground" class="poster-image">
    <a href="https://www.youtube.com/watch?v=Q9tpdZJ5C4w" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Velvet Underground</h3>
      <p class="movies-description">2021 ‧ Documentary/Music ‧ 2h 20m</p>
    </div>
  </div>


  </section>
</div>

<h2 class="Top-picks_header">Tech & Innovation Picks</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">
    
  <!-- Documentary 1 -->
  <div class="movies-poster">
    <img src="image/TheSocialDilemma1.jpg" alt="The Social Dilemma" class="poster-image">
    <a href="https://www.youtube.com/watch?v=uaaC57tcci0" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Social Dilemma</h3>
      <p class="movies-description">2020 ‧ Documentary/Social Media ‧ 1h 34m</p>
    </div>
  </div>

  <!-- Documentary 2 -->
  <div class="movies-poster">
    <img src="image/Codebreaker.jpg" alt="Codebreaker" class="poster-image">
    <a href="https://www.youtube.com/watch?v=Qb1PTggF3QY" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Codebreaker</h3>
      <p class="movies-description">2011 ‧ Documentary/History ‧ 1h 30m</p>
    </div>
  </div>

  <!-- Documentary 3 -->
  <div class="movies-poster">
    <img src="image/AlphaGo.jpg" alt="AlphaGo" class="poster-image">
    <a href="https://www.youtube.com/watch?v=WXuK6gekU1Y" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">AlphaGo</h3>
      <p class="movies-description">2017 ‧ Documentary/AI ‧ 1h 30m</p>
    </div>
  </div>

  <!-- Documentary 4 -->
  <div class="movies-poster">
    <img src="image/InsideTheMachine.jpg" alt="Inside the Machine" class="poster-image">
    <a href="https://www.youtube.com/watch?v=cK3tOaQlwIQ" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Inside the Machine</h3>
      <p class="movies-description">2015 ‧ Documentary/Technology ‧ 1h 35m</p>
    </div>
  </div>

  <!-- Documentary 5 -->
  <div class="movies-poster">
    <img src="image/LoAndBehold.jpg" alt="Lo and Behold" class="poster-image">
    <a href="https://www.youtube.com/watch?v=8o5tuWe4EOg" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Lo and Behold: Reveries of the Connected World</h3>
      <p class="movies-description">2016 ‧ Documentary/Technology ‧ 1h 38m</p>
    </div>
  </div>

  <!-- Documentary 6 -->
  <div class="movies-poster">
    <img src="image/TheGreatHack.jpg" alt="The Great Hack" class="poster-image">
    <a href="https://www.youtube.com/watch?v=iX8G7H1mB7g" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Great Hack</h3>
      <p class="movies-description">2019 ‧ Documentary/Tech Ethics ‧ 1h 53m</p>
    </div>
  </div>

  <!-- Documentary 7 -->
  <div class="movies-poster">
    <img src="image/TermsAndConditions.jpg" alt="Terms and Conditions May Apply" class="poster-image">
    <a href="https://www.youtube.com/watch?v=V0V4gT3TSL8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Terms and Conditions May Apply</h3>
      <p class="movies-description">2013 ‧ Documentary/Privacy ‧ 1h 19m</p>
    </div>
  </div>

  <!-- Documentary 8 -->
  <div class="movies-poster">
    <img src="image/Tron.jpg" alt="Tron" class="poster-image">
    <a href="https://www.youtube.com/watch?v=6PsqA1PHZQo" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Tron</h3>
      <p class="movies-description">1982 ‧ Sci-Fi/Technology ‧ 1h 36m</p>
    </div>
  </div>

  <!-- Documentary 9 -->
  <div class="movies-poster">
    <img src="image/WeAreLegion.jpg" alt="We Are Legion" class="poster-image">
    <a href="https://www.youtube.com/watch?v=rx7VaaSft5Y" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">We Are Legion: The Story of the Hacktivists</h3>
      <p class="movies-description">2012 ‧ Documentary/Tech Culture ‧ 1h 47m</p>
    </div>
  </div>

  <!-- Documentary 10 -->
  <div class="movies-poster">
    <img src="image/TechnoCrisis.jpg" alt="TechnoCrisis" class="poster-image">
    <a href="https://www.youtube.com/watch?v=oclbOXTfFjs" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">TechnoCrisis</h3>
      <p class="movies-description">2021 ‧ Documentary/Futurism ‧ 1h 25m</p>
    </div>
  </div>

  <!-- Documentary 11 -->
  <div class="movies-poster">
    <img src="image/Startupdotcom.jpg" alt="Startup.com" class="poster-image">
    <a href="https://www.youtube.com/watch?v=U0g4Rb8V-w8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Startup.com</h3>
      <p class="movies-description">2001 ‧ Documentary/Business ‧ 1h 26m</p>
    </div>
  </div>

  <!-- Documentary 12 -->
  <div class="movies-poster">
    <img src="image/GeneralMagic.jpg" alt="General Magic" class="poster-image">
    <a href="https://www.youtube.com/watch?v=wa_0YWr1Y8I" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">General Magic</h3>
      <p class="movies-description">2018 ‧ Documentary/Tech History ‧ 1h 30m</p>
    </div>
  </div>


  </section>
</div>

<h2 class="Top-picks_header">Science & Nature Wonders</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">

  <!-- Documentary 1 -->
  <div class="movies-poster">
    <img src="image/OurPlanet.jpg" alt="Our Planet" class="poster-image">
    <a href="https://www.netflix.com/watch/80049832" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Our Planet</h3>
      <p class="movies-description">2019 ‧ Documentary/Environment ‧ 8 Episodes</p>
    </div>
  </div>

  <!-- Documentary 2 -->
  <div class="movies-poster">
    <img src="image/PlanetEarthII.jpg" alt="Planet Earth II" class="poster-image">
    <a href="https://www.youtube.com/watch?v=c8u0jdTL1Eg" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Planet Earth II</h3>
      <p class="movies-description">2016 ‧ Documentary/Nature ‧ 6 Episodes</p>
    </div>
  </div>

  <!-- Documentary 3 -->
  <div class="movies-poster">
    <img src="image/ChasingIce.jpg" alt="Chasing Ice" class="poster-image">
    <a href="https://www.youtube.com/watch?v=Jd05T61kNXY" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Chasing Ice</h3>
      <p class="movies-description">2012 ‧ Documentary/Climate Change ‧ 1h 15m</p>
    </div>
  </div>

  <!-- Documentary 4 -->
  <div class="movies-poster">
    <img src="image/BeforeTheFlood.jpg" alt="Before The Flood" class="poster-image">
    <a href="https://www.youtube.com/watch?v=zb3Z6KNo71A" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Before the Flood</h3>
      <p class="movies-description">2016 ‧ Documentary/Climate Change ‧ 1h 36m</p>
    </div>
  </div>

  <!-- Documentary 5 -->
  <div class="movies-poster">
    <img src="image/TheBluePlanet.jpg" alt="The Blue Planet" class="poster-image">
    <a href="https://www.youtube.com/watch?v=8QdIHZtbnzI" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Blue Planet</h3>
      <p class="movies-description">2001 ‧ Documentary/Oceans ‧ 8 Episodes</p>
    </div>
  </div>

  <!-- Documentary 6 -->
  <div class="movies-poster">
    <img src="image/AnInconvenientTruth.jpg" alt="An Inconvenient Truth" class="poster-image">
    <a href="https://www.youtube.com/watch?v=6V7ZerTkU2I" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">An Inconvenient Truth</h3>
      <p class="movies-description">2006 ‧ Documentary/Climate Change ‧ 1h 38m</p>
    </div>
  </div>

  <!-- Documentary 7 -->
  <div class="movies-poster">
    <img src="image/FreeSolo.jpg" alt="Free Solo" class="poster-image">
    <a href="https://www.youtube.com/watch?v=urRVZlJMP0Y" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Free Solo</h3>
      <p class="movies-description">2018 ‧ Documentary/Adventure ‧ 1h 40m</p>
    </div>
  </div>

  <!-- Documentary 8 -->
  <div class="movies-poster">
    <img src="image/SecretsOfTheUniverse.jpg" alt="Secrets of the Universe" class="poster-image">
    <a href="https://www.youtube.com/watch?v=ZYK50zsdTzM" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Secrets of the Universe</h3>
      <p class="movies-description">2020 ‧ Documentary/Astronomy ‧ 1h 38m</p>
    </div>
  </div>

  <!-- Documentary 9 -->
  <div class="movies-poster">
    <img src="image/InsideTheEarth.jpg" alt="Inside the Earth" class="poster-image">
    <a href="https://www.youtube.com/watch?v=G7dDs0w30K8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Inside the Earth</h3>
      <p class="movies-description">2019 ‧ Documentary/Earth Science ‧ 1h 22m</p>
    </div>
  </div>

  <!-- Documentary 10 -->
  <div class="movies-poster">
    <img src="image/TheMostUnknown.jpg" alt="The Most Unknown" class="poster-image">
    <a href="https://www.youtube.com/watch?v=nxWyMwVZFe4" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Most Unknown</h3>
      <p class="movies-description">2018 ‧ Documentary/Science ‧ 1h 42m</p>
    </div>
  </div>

  <!-- Documentary 11 -->
  <div class="movies-poster">
    <img src="image/IntoTheInferno.jpg" alt="Into the Inferno" class="poster-image">
    <a href="https://www.youtube.com/watch?v=BoZn8u9WV00" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Into the Inferno</h3>
      <p class="movies-description">2016 ‧ Documentary/Volcanoes ‧ 1h 47m</p>
    </div>
  </div>

  <!-- Documentary 12 -->
  <div class="movies-poster">
    <img src="image/HeNamedMeMalala.jpg" alt="He Named Me Malala" class="poster-image">
    <a href="https://www.youtube.com/watch?v=3Yxh3dLz0Jo" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">He Named Me Malala</h3>
      <p class="movies-description">2015 ‧ Documentary/Inspirational ‧ 1h 28m</p>
    </div>
  </div>


  </section>
</div>
<h2 class="Top-picks_header">History & Culture Chronicles</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">

  <!-- Documentary 1 -->
  <div class="movies-poster">
    <img src="image/Cleopatra.jpg" alt="Cleopatra: The Last Pharaoh" class="poster-image">
    <a href="https://www.amazon.com/Cleopatra-Last-Pharaoh/dp/B002ZF16QA" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Cleopatra: The Last Pharaoh</h3>
      <p class="movies-description">2009 ‧ Documentary/History ‧ 1h 30m</p>
    </div>
</div>


  <!-- Documentary 2 -->
  <div class="movies-poster">
    <img src="image/TheLastDance.jpg" alt="The Last Dance" class="poster-image">
    <a href="https://www.netflix.com/watch/81092842" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Last Dance</h3>
      <p class="movies-description">2020 ‧ Documentary/Sports ‧ 10 Episodes</p>
    </div>
  </div>

  <!-- Documentary 3 -->
  <div class="movies-poster">
    <img src="image/TheCivilWar.jpg" alt="The Civil War" class="poster-image">
    <a href="https://www.youtube.com/watch?v=mg8XYseIQ2I" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Civil War</h3>
      <p class="movies-description">1990 ‧ Documentary/History ‧ 11 Episodes</p>
    </div>
  </div>

  <!-- Documentary 4 -->
  <div class="movies-poster">
    <img src="image/WhenWeWereKings.jpg" alt="When We Were Kings" class="poster-image">
    <a href="https://www.youtube.com/watch?v=AtfmsLtGQkE" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">When We Were Kings</h3>
      <p class="movies-description">1996 ‧ Documentary/Sports ‧ 1h 58m</p>
    </div>
  </div>

  <!-- Documentary 5 -->
  <div class="movies-poster">
    <img src="image/HistoryOfTheWorld.jpg" alt="History of the World" class="poster-image">
    <a href="https://www.youtube.com/watch?v=5VIC9Xx1dD4" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">History of the World</h3>
      <p class="movies-description">2021 ‧ Documentary/History ‧ 1h 35m</p>
    </div>
  </div>

  <!-- Documentary 6 -->
  <div class="movies-poster">
    <img src="image/TheFogOfWar.jpg" alt="The Fog of War" class="poster-image">
    <a href="https://www.youtube.com/watch?v=Qgma_UljM6s" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Fog of War</h3>
      <p class="movies-description">2003 ‧ Documentary/War ‧ 1h 47m</p>
    </div>
  </div>

  <!-- Documentary 7 -->
  <div class="movies-poster">
    <img src="image/ExitThroughTheGiftShop.jpg" alt="Exit Through the Gift Shop" class="poster-image">
    <a href="https://www.youtube.com/watch?v=4n5ntYkdvs4" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Exit Through the Gift Shop</h3>
      <p class="movies-description">2010 ‧ Documentary/Art ‧ 1h 27m</p>
    </div>
  </div>

  <!-- Documentary 8 -->
  <div class="movies-poster">
    <img src="image/FreewayEmpire.jpg" alt="Freeway Empire" class="poster-image">
    <a href="https://www.youtube.com/watch?v=wTYdPOTKwuk" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Freeway Empire</h3>
      <p class="movies-description">2014 ‧ Documentary/Crime ‧ 1h 25m</p>
    </div>
  </div>

  <!-- Documentary 9 -->
  <div class="movies-poster">
    <img src="image/IntoTheWild.jpg" alt="Into the Wild" class="poster-image">
    <a href="https://www.youtube.com/watch?v=2tiCqXvEAXY" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Into the Wild</h3>
      <p class="movies-description">2007 ‧ Drama/Adventure ‧ 2h 28m</p>
    </div>
  </div>

  <!-- Documentary 10 -->
  <div class="movies-poster">
    <img src="image/HiddenFigures.jpg" alt="Hidden Figures" class="poster-image">
    <a href="https://www.youtube.com/watch?v=5wfrDhg5Y9c" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Hidden Figures</h3>
      <p class="movies-description">2016 ‧ Drama/History ‧ 2h 7m</p>
    </div>
  </div>

  <!-- Documentary 11 -->
  <div class="movies-poster">
    <img src="image/JiroDreamsOfSushi.jpg" alt="Jiro Dreams of Sushi" class="poster-image">
    <a href="https://www.youtube.com/watch?v=9YhDZpHX8n8" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Jiro Dreams of Sushi</h3>
      <p class="movies-description">2011 ‧ Documentary/Art ‧ 1h 21m</p>
    </div>
  </div>

<!-- Documentary 12 -->
<div class="movies-poster">
  <img src="image/my-octopus-teacher.jpg" alt="My Octopus Teacher" class="poster-image">
  <a href="https://www.youtube.com/watch?v=3s0LTDhqe5A" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title">My Octopus Teacher</h3>
    <p class="movies-description">2020 ‧ Documentary/Nature ‧ 1h 25m</p>
  </div>
</div>


  </section>
</div>

<h2 class="Top-picks_header">True Crime & Investigation Unveiled</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">

  <!-- Documentary 1 -->
  <div class="movies-poster">
    <img src="image/MakingAMurderer.jpg" alt="Making a Murderer" class="poster-image">
    <a href="https://www.netflix.com/watch/80000770" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Making a Murderer</h3>
      <p class="movies-description">2015 ‧ Documentary/True Crime ‧ 10 Episodes</p>
    </div>
  </div>

  <!-- Documentary 2 -->
  <div class="movies-poster">
    <img src="image/TheJinx.jpg" alt="The Jinx" class="poster-image">
    <a href="https://www.hbo.com/the-jinx" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Jinx</h3>
      <p class="movies-description">2015 ‧ Documentary/True Crime ‧ 6 Episodes</p>
    </div>
  </div>

  <!-- Documentary 3 -->
  <div class="movies-poster">
    <img src="image/TheKeepers.jpg" alt="The Keepers" class="poster-image">
    <a href="https://www.netflix.com/watch/80094244" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Keepers</h3>
      <p class="movies-description">2017 ‧ Documentary/True Crime ‧ 7 Episodes</p>
    </div>
  </div>

  <!-- Documentary 4 -->
  <div class="movies-poster">
    <img src="image/FindingNeverland.jpg" alt="Finding Neverland" class="poster-image">
    <a href="https://www.youtube.com/watch?v=rbp0Hc48fqk" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Finding Neverland</h3>
      <p class="movies-description">2017 ‧ Documentary/True Crime ‧ 1h 35m</p>
    </div>
  </div>

  <!-- Documentary 5 -->
  <div class="movies-poster">
    <img src="image/ConversationsWithAHitman.jpg" alt="Conversations with a Hitman" class="poster-image">
    <a href="https://www.netflix.com/watch/80184196" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Conversations with a Hitman</h3>
      <p class="movies-description">2022 ‧ Documentary/True Crime ‧ 1h 15m</p>
    </div>
  </div>

  <!-- Documentary 6 -->
  <div class="movies-poster">
    <img src="image/Donatello.jpg" alt="Donatello" class="poster-image">
    <a href="https://www.netflix.com/watch/80117522" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Donatello</h3>
      <p class="movies-description">2021 ‧ Documentary/True Crime ‧ 1h 30m</p>
    </div>
  </div>

  <!-- Documentary 7 -->
  <div class="movies-poster">
    <img src="image/KillerInside.jpg" alt="Killer Inside" class="poster-image">
    <a href="https://www.netflix.com/watch/81116055" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Killer Inside</h3>
      <p class="movies-description">2020 ‧ Documentary/True Crime ‧ 1h 40m</p>
    </div>
  </div>

  <!-- Documentary 8 -->
  <div class="movies-poster">
    <img src="image/Don’tFwithCats.jpg" alt="Don't F with Cats" class="poster-image">
    <a href="https://www.netflix.com/watch/81005056" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Don't F with Cats</h3>
      <p class="movies-description">2019 ‧ Documentary/True Crime ‧ 3 Episodes</p>
    </div>
  </div>

  <!-- Documentary 9 -->
  <div class="movies-poster">
    <img src="image/WildWildCountry.jpg" alt="Wild Wild Country" class="poster-image">
    <a href="https://www.netflix.com/watch/80121330" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Wild Wild Country</h3>
      <p class="movies-description">2018 ‧ Documentary/True Crime ‧ 6 Episodes</p>
    </div>
  </div>

  <!-- Documentary 10 -->
  <div class="movies-poster">
    <img src="image/TheDisappearanceOfMadelineMcCann.jpg" alt="The Disappearance of Madeleine McCann" class="poster-image">
    <a href="https://www.netflix.com/watch/80094937" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Disappearance of Madeleine McCann</h3>
      <p class="movies-description">2019 ‧ Documentary/True Crime ‧ 8 Episodes</p>
    </div>
  </div>

  <!-- Documentary 11 -->
  <div class="movies-poster">
    <img src="image/CrimeScene.jpg" alt="Crime Scene" class="poster-image">
    <a href="https://www.netflix.com/watch/81098343" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Crime Scene</h3>
      <p class="movies-description">2021 ‧ Documentary/True Crime ‧ 4 Episodes</p>
    </div>
  </div>

  <!-- Documentary 12 -->
  <div class="movies-poster">
    <img src="image/RobertDurstTheJinx.jpg" alt="Robert Durst: The Jinx" class="poster-image">
    <a href="https://www.hbo.com/the-jinx" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Robert Durst: The Jinx</h3>
      <p class="movies-description">2015 ‧ Documentary/True Crime ‧ 6 Episodes</p>
    </div>
  </div>


  </section>
</div>

<h2 class="Top-picks_header">Nature & Environment Wonders</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">

  <!-- Documentary 1 -->
  <div class="movies-poster">
    <img src="image/OurPlanet.jpg" alt="Our Planet" class="poster-image">
    <a href="https://www.netflix.com/watch/80049832" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Our Planet</h3>
      <p class="movies-description">2019 ‧ Documentary/Nature ‧ 8 Episodes</p>
    </div>
  </div>

  <!-- Documentary 2 -->
  <div class="movies-poster">
    <img src="image/PlanetEarth.jpg" alt="Planet Earth" class="poster-image">
    <a href="https://www.bbc.co.uk/programmes/b006mywy" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Planet Earth</h3>
      <p class="movies-description">2006 ‧ Documentary/Nature ‧ 11 Episodes</p>
    </div>
  </div>

  <!-- Documentary 3 -->
  <div class="movies-poster">
    <img src="image/OurPlanet2.jpg" alt="Our Planet II" class="poster-image">
    <a href="https://www.netflix.com/watch/81091429" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Our Planet II</h3>
      <p class="movies-description">2023 ‧ Documentary/Nature ‧ 6 Episodes</p>
    </div>
  </div>

  <!-- Documentary 4 -->
  <div class="movies-poster">
    <img src="image/ChasingIce.jpg" alt="Chasing Ice" class="poster-image">
    <a href="https://www.amazon.com/Chasing-Ice-Jeff-Orlowski/dp/B00B00F56A" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Chasing Ice</h3>
      <p class="movies-description">2012 ‧ Documentary/Environment ‧ 1h 15m</p>
    </div>
  </div>

  <!-- Documentary 5 -->
  <div class="movies-poster">
    <img src="image/BeforeTheFlood.jpg" alt="Before the Flood" class="poster-image">
    <a href="https://www.youtube.com/watch?v=zbPZszykG_A" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Before the Flood</h3>
      <p class="movies-description">2016 ‧ Documentary/Environment ‧ 1h 35m</p>
    </div>
  </div>

  <!-- Documentary 6 -->
  <div class="movies-poster">
    <img src="image/Seaspiracy.jpg" alt="Seaspiracy" class="poster-image">
    <a href="https://www.netflix.com/watch/81014008" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Seaspiracy</h3>
      <p class="movies-description">2021 ‧ Documentary/Environment ‧ 1h 29m</p>
    </div>
  </div>

  <!-- Documentary 7 -->
  <div class="movies-poster">
    <img src="image/A PlasticOcean.jpg" alt="A Plastic Ocean" class="poster-image">
    <a href="https://www.youtube.com/watch?v=6zrn7AIMn6E" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">A Plastic Ocean</h3>
      <p class="movies-description">2016 ‧ Documentary/Environment ‧ 1h 42m</p>
    </div>
  </div>

  <!-- Documentary 8 -->
  <div class="movies-poster">
    <img src="image/TheLastLion.jpg" alt="The Last Lion" class="poster-image">
    <a href="https://www.netflix.com/watch/80077638" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Last Lion</h3>
      <p class="movies-description">2016 ‧ Documentary/Nature ‧ 1h 31m</p>
    </div>
  </div>

  <!-- Documentary 9 -->
  <div class="movies-poster">
    <img src="image/DavidAttenborough.jpg" alt="David Attenborough: A Life on Our Planet" class="poster-image">
    <a href="https://www.netflix.com/watch/81005056" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">David Attenborough: A Life on Our Planet</h3>
      <p class="movies-description">2020 ‧ Documentary/Environment ‧ 1h 23m</p>
    </div>
  </div>

  <!-- Documentary 10 -->
  <div class="movies-poster">
    <img src="image/Watermark.jpg" alt="Watermark" class="poster-image">
    <a href="https://www.youtube.com/watch?v=RVeV6jp87No" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Watermark</h3>
      <p class="movies-description">2013 ‧ Documentary/Environment ‧ 1h 31m</p>
    </div>
  </div>

  <!-- Documentary 11 -->
  <div class="movies-poster">
    <img src="image/DownToEarth.jpg" alt="Down to Earth with Zac Efron" class="poster-image">
    <a href="https://www.netflix.com/watch/81010183" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Down to Earth with Zac Efron</h3>
      <p class="movies-description">2020 ‧ Documentary/Travel ‧ 8 Episodes</p>
    </div>
  </div>

  <!-- Documentary 12 -->
  <div class="movies-poster">
    <img src="image/TheTrueCost.jpg" alt="The True Cost" class="poster-image">
    <a href="https://www.youtube.com/watch?v=9s8bW_nhzLw" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The True Cost</h3>
      <p class="movies-description">2015 ‧ Documentary/Environment ‧ 1h 32m</p>
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