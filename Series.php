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
      <h2 id="trending-text">Today's Trending Series on Theatrick: Most Searched Series!</h2>
    </div>
</div>

<div class="slideshow-container">
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Breaking_Bad.jpg" alt="Breaking Bad" class="poster-image">
            <a href="https://www.youtube.com/watch?v=Hhesi4aC6Xo" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Breaking Bad</h3>
                <p class="movie-description">2008 ‧ Crime/Drama ‧ 5 Seasons</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Stranger_Things.jpg" alt="Stranger Things" class="poster-image">
            <a href="https://www.youtube.com/watch?v=XW9rV-YoLWI" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Stranger Things</h3>
                <p class="movie-description">2016 ‧ Sci-fi/Fantasy ‧ 4 Seasons</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Game_of_Thrones.jpg" alt="Game of Thrones" class="poster-image">
            <a href="https://www.youtube.com/watch?v=gcTkNV5Vg1E" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Game of Thrones</h3>
                <p class="movie-description">2011 ‧ Drama/Fantasy ‧ 8 Seasons</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Friends.jpg" alt="Friends" class="poster-image">
            <a href="https://www.youtube.com/watch?v=hDNNmeeJs1Q" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Friends</h3>
                <p class="movie-description">1994 ‧ Comedy/Romance ‧ 10 Seasons</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/The_World_at_War.jpg" alt="The World at War" class="poster-image">
            <a href="https://www.youtube.com/watch?v=XJlYNxxhL2g" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">The World at War</h3>
                <p class="movie-description">1973 ‧ Documentary/History ‧ 1 Season</p>
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
        <h3 class="movies-title"><a href ="Tv_series(Series).php">The Last of Us</h3>
        <p class="movies-description">2023 ‧ Drama/Horror ‧ 1 Season</p>
      </div>
    </div>
    
    <!-- Series Poster - The Boys -->
    <div class="movies-poster">
      <img src="image/The_Boys.jpg" alt="The Boys" class="poster-image">
      <a href="https://www.youtube.com/watch?v=0bV_5rT_Tek" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">The Boys</h3>
        <p class="movies-description">2019 ‧ Action/Comedy ‧ 3 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - The Morning Show -->
    <div class="movies-poster">
      <img src="image/The_Morning_Show.jpg" alt="The Morning Show" class="poster-image">
      <a href="https://www.youtube.com/watch?v=nI9McjADpsI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">The Morning Show</h3>
        <p class="movies-description">2019 ‧ Drama/Comedy ‧ 3 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - The Umbrella Academy -->
    <div class="movies-poster">
      <img src="image/The_Umbrella_Academy.jpg" alt="The Umbrella Academy" class="poster-image">
      <a href="https://www.youtube.com/watch?v=0DAp9z9e8E8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">The Umbrella Academy</h3>
        <p class="movies-description">2019 ‧ Superhero/Fantasy ‧ 3 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - Peaky Blinders -->
    <div class="movies-poster">
      <img src="image/Peaky_Blinders.jpg" alt="Peaky Blinders" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oVzLvzFf8UM" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">Peaky Blinders</h3>
        <p class="movies-description">2013 ‧ Crime/Drama ‧ 6 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - The Mandalorian -->
    <div class="movies-poster">
      <img src="image/The_Mandalorian.jpg" alt="The Mandalorian" class="poster-image">
      <a href="https://www.youtube.com/watch?v=aH7ZtYIN9ew" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">The Mandalorian</h3>
        <p class="movies-description">2019 ‧ Sci-fi/Action ‧ 3 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - Dark -->
    <div class="movies-poster">
      <img src="image/Dark.jpg" alt="Dark" class="poster-image">
      <a href="https://www.youtube.com/watch?v=ae53k1IltE8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">Dark</h3>
        <p class="movies-description">2017 ‧ Sci-fi/Thriller ‧ 3 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - Narcos -->
    <div class="movies-poster">
      <img src="image/Narcos.jpg" alt="Narcos" class="poster-image">
      <a href="https://www.youtube.com/watch?v=R5IiW66gIbA" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">Narcos</h3>
        <p class="movies-description">2015 ‧ Crime/Drama ‧ 3 Seasons</p>
      </div>
    </div>
    
    <!-- Series Poster - Loki -->
    <div class="movies-poster">
      <img src="image/Loki.jpg" alt="Loki" class="poster-image">
      <a href="https://www.youtube.com/watch?v=V1tOBx0INho" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">Loki</h3>
        <p class="movies-description">2021 ‧ Action/Sci-fi ‧ 1 Season</p>
      </div>
    </div>
    
    <!-- Series Poster - The Witcher -->
    <div class="movies-poster">
      <img src="image/The_Witcher.jpg" alt="The Witcher" class="poster-image">
      <a href="https://www.youtube.com/watch?v=ndl1W4ltcmg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Tv_series(Series).php">The Witcher</h3>
        <p class="movies-description">2019 ‧ Fantasy/Adventure ‧ 2 Seasons</p>
      </div>
    </div>
   
   
  </section>
</div>



<h2 class="Top-picks_header">Fan's Favourite</h2>
<div class="slider-container">
  <img src="image/back.png" id="backBtn">
  <section class="slider">
    
  <div class="movies-poster">
      <img src="image/TheBigBangTheory.jpg" alt="The Big Bang Theory" class="poster-image">
      <a href="https://www.youtube.com/watch?v=6Vtixk-jpCk" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Big Bang Theory</h3>
        <p class="movies-description">2007 ‧ Comedy ‧ 12 Seasons</p>
      </div>
    </div>
    <!-- TV Series Poster - The X-Files -->
    <div class="movies-poster">
      <img src="image/TheXFiles.jpg" alt="The X-Files" class="poster-image">
      <a href="https://www.youtube.com/watch?v=ZQ2hYF0_fy0" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The X-Files</h3>
        <p class="movies-description">1993 ‧ Mystery/Thriller ‧ 9 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The Fresh Prince of Bel-Air -->
    <div class="movies-poster">
      <img src="image/TheFreshPrince.jpg" alt="The Fresh Prince of Bel-Air" class="poster-image">
      <a href="https://www.youtube.com/watch?v=lX7b6gIcZ1M" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Fresh Prince of Bel-Air</h3>
        <p class="movies-description">1990 ‧ Comedy/Drama ‧ 6 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - Buffy the Vampire Slayer -->
    <div class="movies-poster">
      <img src="image/BuffyTheVampireSlayer.jpg" alt="Buffy the Vampire Slayer" class="poster-image">
      <a href="https://www.youtube.com/watch?v=NzJ-76PjAFs" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Buffy the Vampire Slayer</h3>
        <p class="movies-description">1997 ‧ Drama/Fantasy ‧ 7 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The Simpsons -->
    <div class="movies-poster">
      <img src="image/TheSimpsons.jpg" alt="The Simpsons" class="poster-image">
      <a href="https://www.youtube.com/watch?v=6J4y8E6dRMo" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Simpsons</h3>
        <p class="movies-description">1989 ‧ Animation/Comedy ‧ 35+ Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - Seinfeld -->
    <div class="movies-poster">
      <img src="image/Seinfeld.jpg" alt="Seinfeld" class="poster-image">
      <a href="https://www.youtube.com/watch?v=LOZzdMx7z2w" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Seinfeld</h3>
        <p class="movies-description">1989 ‧ Comedy ‧ 9 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - ER -->
    <div class="movies-poster">
      <img src="image/ER.jpg" alt="ER" class="poster-image">
      <a href="https://www.youtube.com/watch?v=f4doJkZFlEk" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">ER</h3>
        <p class="movies-description">1994 ‧ Drama/Medical ‧ 15 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The Sopranos -->
    <div class="movies-poster">
      <img src="image/TheSopranos.jpg" alt="The Sopranos" class="poster-image">
      <a href="https://www.youtube.com/watch?v=sNs9VePbqp4" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Sopranos</h3>
        <p class="movies-description">1999 ‧ Crime/Drama ‧ 6 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - Stranger Things -->
    <div class="movies-poster">
      <img src="image/StrangerThings.jpg" alt="Stranger Things" class="poster-image">
      <a href="https://www.youtube.com/watch?v=b9EkMc79ZSU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Stranger Things</h3>
        <p class="movies-description">2016 ‧ Thriller/Sci-Fi ‧ 5 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The Office (U.S.) -->
    <div class="movies-poster">
      <img src="image/TheOfficeUS.jpg" alt="The Office (U.S.)" class="poster-image">
      <a href="https://www.youtube.com/watch?v=Vz2pQj3r1D8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Office (U.S.)</h3>
        <p class="movies-description">2005 ‧ Comedy ‧ 9 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The Crown -->
    <div class="movies-poster">
      <img src="image/TheCrown.jpg" alt="The Crown" class="poster-image">
      <a href="https://www.youtube.com/watch?v=6Xpa2I3nsW8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Crown</h3>
        <p class="movies-description">2016 ‧ Drama/History ‧ 6 Seasons</p>
      </div>
    </div>

  <img src="image/right-arrow.png" id="nextBtn">
  </section>
</div>

<h2 class="Top-picks_header">Latest Certified Fresh</h2>
<div class="slider-container">

  <section class="slider">
  
    <!-- TV Series Poster - Dune: Prophecy -->
    <div class="movies-poster">
      <img src="image\DuneProphecy..jpg" alt="Dune: Prophecy" class="poster-image">
      <a href="https://www.youtube.com/watch?v=2gMmFXJ0bB0" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Dune: Prophecy</h3>
        <p class="movies-description">2024 ‧ Sci-Fi/Adventure</p>
      </div>
    </div>
    
    <!-- TV Series Poster - The Madness -->
    <div class="movies-poster">
      <img src="image/the madness.jpg" alt="The Madness" class="poster-image">
      <a href="https://www.youtube.com/watch?v=RH2uFZHgBz0" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Madness</h3>
        <p class="movies-description">2024 ‧ Horror/Thriller</p>
      </div>
    </div>
    
    <!-- TV Series Poster - Wednesday Adams -->
    <div class="movies-poster">
      <img src="image/Wednesday.jpg" alt="Wednesday Adams" class="poster-image">
      <a href="https://www.youtube.com/watch?v=LiB5H95jqug" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Wednesday Adams</h3>
        <p class="movies-description">2022 ‧ Mystery/Comedy ‧ 1 Season</p>
      </div>
    </div>

    <!-- TV Series Poster - Good Girl's Guide to Murder -->
    <div class="movies-poster">
      <img src="image/GoodGirlsGuide.jpg" alt="Good Girl's Guide to Murder" class="poster-image">
      <a href="https://www.youtube.com/watch?v=KMYef52PUP4" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Good Girl's Guide to Murder</h3>
        <p class="movies-description">2024 ‧ Mystery/Crime</p>
      </div>
    </div>
    
    <!-- TV Series Poster - Squid Game -->
    <div class="movies-poster">
      <img src="image/SquidGame.jpg" alt="Squid Game" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oqxAJmXy6I8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Squid Game</h3>
        <p class="movies-description">2021 ‧ Thriller/Drama ‧ 1 Season</p>
      </div>
    </div>

    <!-- TV Series Poster - The Umbrella Academy -->
    <div class="movies-poster">
      <img src="image/UmbrellaAcademy.jpg" alt="The Umbrella Academy" class="poster-image">
      <a href="https://www.youtube.com/watch?v=0DA2Wf3YMLg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Umbrella Academy</h3>
        <p class="movies-description">2020 ‧ Action/Sci-Fi ‧ 3 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - Stranger Things (Season 4) -->
    <div class="movies-poster">
      <img src="image/StrangerThingsS4.jpg" alt="Stranger Things Season 4" class="poster-image">
      <a href="https://www.youtube.com/watch?v=K9JdD8dERZ0" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Stranger Things (Season 4)</h3>
        <p class="movies-description">2022 ‧ Sci-Fi/Horror ‧ 4 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - Bridgerton (Season 2) -->
    <div class="movies-poster">
      <img src="image/BridgertonS2.jpg" alt="Bridgerton Season 2" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JrR18A7VX1Q" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Bridgerton (Season 2)</h3>
        <p class="movies-description">2022 ‧ Romance/Drama ‧ 2 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The White Lotus (Season 2) -->
    <div class="movies-poster">
      <img src="image/WhiteLotusS2.jpg" alt="The White Lotus Season 2" class="poster-image">
      <a href="https://www.youtube.com/watch?v=unEGz5yIzM8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The White Lotus (Season 2)</h3>
        <p class="movies-description">2022 ‧ Drama/Comedy ‧ 2 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - The Bear -->
    <div class="movies-poster">
      <img src="image/TheBear.jpg" alt="The Bear" class="poster-image">
      <a href="https://www.youtube.com/watch?v=9DkjV4u4-w8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Bear</h3>
        <p class="movies-description">2022 ‧ Drama/Comedy ‧ 2 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - Loki (Season 2) -->
    <div class="movies-poster">
      <img src="image/LokiS2.jpeg" alt="Loki Season 2" class="poster-image">
      <a href="https://www.youtube.com/watch?v=d2k-RZ6wDFc" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Loki (Season 2)</h3>
        <p class="movies-description">2023 ‧ Sci-Fi/Fantasy ‧ 2 Seasons</p>
      </div>
    </div>

    <!-- TV Series Poster - House of the Dragon -->
    <div class="movies-poster">
      <img src="image/HouseoftheDragon.jpg" alt="House of the Dragon" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JpWhqxB0PBQ" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">House of the Dragon</h3>
        <p class="movies-description">2022 ‧ Fantasy/Drama ‧ 1 Season</p>
      </div>
    </div>
  
  </section>
</div>

<h2 class="Top-picks_header">Latest in Streaming</h2>
<div class="slider-container">

  <section class="slider">
  
    <!-- 80s-2000s TV Series Poster - The X-Files -->
    <div class="movies-poster">
      <img src="image/TheXFiles.jpg" alt="The X-Files" class="poster-image">
      <a href="https://www.youtube.com/watch?v=8pzL9ibJ03k" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The X-Files</h3>
        <p class="movies-description">1993 ‧ Sci-Fi/Mystery ‧ 9 Seasons</p>
      </div>
    </div>
    
    <!-- 80s-2000s TV Series Poster - Buffy the Vampire Slayer -->
    <div class="movies-poster">
      <img src="image/BuffyTheVampireSlayer.jpg" alt="Buffy the Vampire Slayer" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5uY4g-kNbcQ" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Buffy the Vampire Slayer</h3>
        <p class="movies-description">1997 ‧ Drama/Fantasy ‧ 7 Seasons</p>
      </div>
    </div>

    <!-- 80s-2000s TV Series Poster - Friends -->
    <div class="movies-poster">
      <img src="image/Friendss.jpg" alt="Friends" class="poster-image">
      <a href="https://www.youtube.com/watch?v=hDNNmeeJs1Q" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Friends</h3>
        <p class="movies-description">1994 ‧ Comedy/Romance ‧ 10 Seasons</p>
      </div>
    </div>

    <!-- 2010s TV Series Poster - Black Mirror -->
    <div class="movies-poster">
      <img src="image/BlackMirror.jpg" alt="Black Mirror" class="poster-image">
      <a href="https://www.youtube.com/watch?v=I8wH5zNDh8M" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Black Mirror</h3>
        <p class="movies-description">2011 ‧ Sci-Fi/Drama ‧ 5 Seasons</p>
      </div>
    </div>
    
    <!-- 2010s TV Series Poster - Stranger Things -->
    <div class="movies-poster">
      <img src="image/StrangerThings.jpg" alt="Stranger Things" class="poster-image">
      <a href="https://www.youtube.com/watch?v=XWxyRG_tckY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Stranger Things</h3>
        <p class="movies-description">2016 ‧ Sci-Fi/Horror ‧ 4 Seasons</p>
      </div>
    </div>
    
    <!-- 2020s TV Series Poster - The Mandalorian -->
    <div class="movies-poster">
      <img src="image/TheMandalorian.jpg" alt="The Mandalorian" class="poster-image">
      <a href="https://www.youtube.com/watch?v=aOC8E8z_ifw" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Mandalorian</h3>
        <p class="movies-description">2019 ‧ Sci-Fi/Action ‧ 3 Seasons</p>
      </div>
    </div>

    <!-- 2020s TV Series Poster - The Queen's Gambit -->
    <div class="movies-poster">
      <img src="image/QueensGambit.jpg" alt="The Queen's Gambit" class="poster-image">
      <a href="https://www.youtube.com/watch?v=CbC0tF1ZYno" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Queen's Gambit</h3>
        <p class="movies-description">2020 ‧ Drama/Sports ‧ 1 Season</p>
      </div>
    </div>

    <!-- 2020s TV Series Poster - Squid Game -->
    <div class="movies-poster">
      <img src="image/SquidGame.jpg" alt="Squid Game" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oqxAJmXy6I8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Squid Game</h3>
        <p class="movies-description">2021 ‧ Thriller/Drama ‧ 1 Season</p>
      </div>
    </div>

    <!-- 2020s TV Series Poster - Loki -->
    <div class="movies-poster">
      <img src="image/Loki.jpg" alt="Loki" class="poster-image">
      <a href="https://www.youtube.com/watch?v=0X4X8Kxl9SM" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Loki</h3>
        <p class="movies-description">2021 ‧ Sci-Fi/Fantasy ‧ 2 Seasons</p>
      </div>
    </div>

    <!-- 2020s TV Series Poster - Wednesday Adams -->
    <div class="movies-poster">
      <img src="image/Wednesday.jpg" alt="Wednesday Adams" class="poster-image">
      <a href="https://www.youtube.com/watch?v=LiB5H95jqug" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Wednesday Adams</h3>
        <p class="movies-description">2022 ‧ Mystery/Comedy ‧ 1 Season</p>
      </div>
    </div>

    <!-- 2020s TV Series Poster - The Witcher -->
    <div class="movies-poster">
      <img src="image/TheWitcher.jpg" alt="The Witcher" class="poster-image">
      <a href="https://www.youtube.com/watch?v=ndl1W4ltcmg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Witcher</h3>
        <p class="movies-description">2019 ‧ Fantasy/Action ‧ 3 Seasons</p>
      </div>
    </div>

  </section>
</div>


<h2 class="Top-picks_header">Tinsel & TV Magic</h2>
<div class="slider-container">

  <section class="slider">
  
    <!-- 2020s TV Special - Dash & Lily -->
    <div class="movies-poster">
      <img src="image/DashAndLily.jpg" alt="Dash & Lily" class="poster-image">
      <a href="https://www.youtube.com/watch?v=nyuTnxuJXf4" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Dash & Lily</h3>
        <p class="movies-description">2020 ‧ Comedy/Romance ‧ Christmas Special</p>
      </div>
    </div>

    <!-- 2020s TV Special - The Princess Switch: Switched Again -->
    <div class="movies-poster">
      <img src="image/ThePrincessSwitch.jpg" alt="The Princess Switch: Switched Again" class="poster-image">
      <a href="https://www.youtube.com/watch?v=Q7lUSZ5by7s" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Princess Switch: Switched Again</h3>
        <p class="movies-description">2020 ‧ Family/Romance ‧ Christmas Special</p>
      </div>
    </div>

    <!-- 2010s TV Special - The Good Doctor (Holiday Special) -->
    <div class="movies-poster">
      <img src="image/TheGoodDoctorHoliday.jpg" alt="The Good Doctor" class="poster-image">
      <a href="https://www.youtube.com/watch?v=w7GpS2sHFkM" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Good Doctor (Holiday Special)</h3>
        <p class="movies-description">2017 ‧ Drama ‧ Holiday Special</p>
      </div>
    </div>

    <!-- 2020s TV Special - The Christmas Chronicles: Part Two -->
    <div class="movies-poster">
      <img src="image/ChristmasChronicles2.jpg" alt="The Christmas Chronicles: Part Two" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JqgTHXI0JlA" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Christmas Chronicles: Part Two</h3>
        <p class="movies-description">2020 ‧ Family/Adventure ‧ Christmas Special</p>
      </div>
    </div>

    <!-- 2020s TV Special - Spirited -->
    <div class="movies-poster">
      <img src="image/Spirited.jpg" alt="Spirited" class="poster-image">
      <a href="https://www.youtube.com/watch?v=Q5F1YBBi_4g" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Spirited</h3>
        <p class="movies-description">2022 ‧ Musical/Comedy ‧ Christmas Special</p>
      </div>
    </div>

    <!-- 2020s TV Special - The Best Christmas Ever -->
    <div class="movies-poster">
      <img src="image/BestChristmasEver.jpg" alt="The Best Christmas Ever" class="poster-image">
      <a href="https://www.youtube.com/watch?v=VsWWfV-9EKs" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Best Christmas Ever</h3>
        <p class="movies-description">2021 ‧ Family/Comedy ‧ Christmas Special</p>
      </div>
    </div>

    <!-- 2020s TV Special - Last Christmas (TV Series) -->
    <div class="movies-poster">
      <img src="image/LastChristmasTV.jpg" alt="Last Christmas" class="poster-image">
      <a href="https://www.youtube.com/watch?v=TZ8Zt7nvvCo" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Last Christmas</h3>
        <p class="movies-description">2021 ‧ Drama/Romance ‧ Christmas Special</p>
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