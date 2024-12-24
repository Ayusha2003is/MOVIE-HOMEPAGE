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
<a href="landingpage.php" id="logo">
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
             
          }
        }
    ?>
    <a href="WELCOME.php" class="logout-button">Login</a>
  </div>
</div>


  <div class="trending-slideshow">
    <div class="trending-banner">
      <h2 id="trending-text">Welcome To Theaterick:Your Ultimate gateway to films
      </h2>
    </div>
  </div>
  <div class="slideshow-container">
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image\mufasa.jpg" alt="The Princess Diaries" class="poster-image">
            <a href="https://www.youtube.com/watch?v=lMXh6vjiZrI&ab_channel=Disney" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Mufasa: The Lion King </h3>
                <p class="movie-description">2024 ‧ Adventure/Musical ‧ 1h 58m
                </p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image\mismatched2.jpeg" alt="Flipped" class="poster-image">
            <a href="https://www.youtube.com/watch?v=q40GxY5n2Dg&ab_channel=RottenTomatoesClassicTrailers" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Mismatched
                </h3>
                <p class="movie-description">2020 ‧ Drama ‧ 3 seasons</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image\WICKEDD.jpeg" alt="Om Shanti Om" class="poster-image">
            <a href="https://www.youtube.com/watch?v=9oeGoQGt7Ao&ab_channel=RedChilliesEntertainment" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Wicked</h3>
                <p class="movie-description">2024 ‧ Musical/Fantasy ‧ 2h 40m
                </p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Interstellar.jpeg" alt="Interstellar" class="poster-image">
            <a href="https://www.youtube.com/watch?v=Lm8p5rlrSkY&ab_channel=RottenTomatoesTrailers" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Interstellar</h3>
                <p class="movie-description">2014 ‧ Sci-fi/Adventure ‧ 2h 49m</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/se7en.jpg" alt="Se7en" class="poster-image">
            <a href="https://www.youtube.com/watch?v=znmZoVkCjpI&ab_channel=RottenTomatoesClassicTrailers" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Se7en</h3>
                <p class="movie-description">1995 ‧ Crime/Horror ‧ 2h 7m</p>
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
</div>

<h2 class="Top-picks_header">Top Picks</h2>
<div class="slider-container">
  
  <!-- Slider Section -->
  <section class="slider">
    
    <div class="movies-poster">
      <img src="image/Wicked.jpg" alt="Wicked" class="poster-image">
      <a href="https://www.youtube.com/watch?v=6COmYeLsz4c&ab_channel=UniversalPictures" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Topicks.php">Wicked</a>
        </h3>
        <p class="movies-description">2024 ‧ Musical/Fantasy ‧ 2h 40m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Se7en -->
    <div class="movies-poster">
      <img src="image/SAAT.jpg" alt="Se7en" class="poster-image">
      <a href="https://www.youtube.com/watch?v=znmZoVkCjpI&ab_channel=RottenTomatoesClassicTrailers" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Topicks.php">Se7en</h3>
        <p class="movies-description">1995 ‧ Crime/Horror ‧ 2h 7m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Cruella -->
    <div class="movies-poster">
      <img src="image/Cruella.jpeg" alt="Cruella" class="poster-image">
      <a href="https://www.youtube.com/watch?v=gmRKv7n2If8&ab_channel=Disney" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Topicks.php">Cruella</h3>
        <p class="movies-description">2021 ‧ Comedy/Crime ‧ 2h 14m</p>
      </div>
    </div>
    
    <!-- Movie Poster - The Shawshank Redemption -->
    <div class="movies-poster">
      <img src="image/The Shawshank Redemption.jpg" alt="The Shawshank Redemption" class="poster-image">
      <a href="https://www.youtube.com/watch?v=PLl99DlL6b4&ab_channel=WarnerBros.Entertainment" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Topicks.php">The Shawshank Redemption</h3>
        <p class="movies-description">1994 ‧ Thriller/Crime ‧ 2h 22m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Agatha All Along -->
    <div class="movies-poster">
      <img src="image/Agatha All Along.jpg" alt="Agatha All Along" class="poster-image">
      <a href="https://www.youtube.com/watch?v=R9pXbNz6Vbw&ab_channel=MarvelEntertainment" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Topicks.php">Agatha All Along</h3>
        <p class="movies-description">2024 ‧ Action ‧ 1 season</p>
      </div>
    </div>
    
    <!-- Movie Poster - Legally Blonde -->
    <div class="movies-poster">
      <img src="image/Legally Blonde.jpg" alt="Legally Blonde" class="poster-image">
      <a href="https://www.youtube.com/watch?v=vWOHwI_FgAo&ab_channel=AmazonMGMStudios" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="Topicks.php">Legally Blonde</h3>
        <p class="movies-description">2001 ‧ Comedy/Romance ‧ 1h 36m</p>
      </div>
    </div>
    
    <!-- Movie Poster - The Boy in the Striped Pajamas -->
    <div class="movies-poster">
      <img src="image/The Boy in the Striped Pajamas.jpg" alt="The Boy in the Striped Pajamas" class="poster-image">
      <a href="https://www.youtube.com/watch?v=uwysOfnX2Qg&ab_channel=TheMoviePlanet" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Boy in the Striped Pajamas</h3>
        <p class="movies-description">2008 ‧ War/Thriller ‧ 1h 34m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Stranger Things -->
    <div class="movies-poster">
      <img src="image/Stranger things.jpg" alt="Stranger Things" class="poster-image">
      <a href="https://www.youtube.com/watch?v=b9EkMc79ZSU&ab_channel=Netflix" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Stranger Things</h3>
        <p class="movies-description">2016 ‧ Horror ‧ 4 seasons</p>
      </div>
    </div>
    
    <!-- Movie Poster - Lady Bird -->
    <div class="movies-poster">
      <img src="image/LadyBird.jpeg" alt="Lady Bird" class="poster-image">
      <a href="https://www.youtube.com/watch?v=cNi_HC839Wo&ab_channel=A24" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Lady Bird</h3>
        <p class="movies-description">2017 ‧ Drama/Comedy ‧ 1h 34m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Shutter Island -->
    <div class="movies-poster">
      <img src="image/ShutterIsland.jpg" alt="Shutter Island" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5iaYLCiq5RM&ab_channel=ParamountPictures" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Shutter Island</h3>
        <p class="movies-description">2010 ‧ Thriller/Mystery ‧ 2h 18m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Before Sunrise -->
    <div class="movies-poster">
      <img src="image/BeforeSunrise.jpg" alt="Before Sunrise" class="poster-image">
      <a href="https://www.youtube.com/watch?v=25v7N34d5HE&ab_channel=RottenTomatoesIndie" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Before Sunrise</h3>
        <p class="movies-description">1995 ‧ Romance/Drama ‧ 1h 41m</p>
      </div>
    </div>
    
    <!-- Movie Poster - Kung Fu Panda -->
    <div class="movies-poster">
      <img src="image/KungFuPanda.jpeg" alt="Kung Fu Panda" class="poster-image">
      <a href="https://www.youtube.com/watch?v=PXi3Mv6KMzY&ab_channel=UniversalPictures" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Kung Fu Panda</h3>
        <p class="movies-description">2008 ‧ Animation/Action ‧ 1h 32m</p>
      </div>
    </div>
  
  </section>
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

  </section>
</div>
<h2 class="Top-picks_header">Upcoming Releases</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">
    
    <div class="movies-poster">
      <img src="image\DunePartTwo.jpeg" alt="Dune: Part Two" class="poster-image">
      <a href="https://www.youtube.com/watch?v=QByfPTFDHNE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Dune: Part Two</h3>
        <p class="movies-description">2024 ‧ Sci-Fi/Adventure ‧ 2h 35m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Deadpool3.jpg" alt="Deadpool 3" class="poster-image">
      <a href="https://www.youtube.com/watch?v=F5dPiQpVq28" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Deadpool 3</h3>
        <p class="movies-description">2024 ‧ Action/Comedy/Sci-Fi ‧ 2h 10m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Avatar2.jpg" alt="Avatar 3" class="poster-image">
      <a href="https://www.youtube.com/watch?v=d9MyW72ELq0&ab_channel=Avatar" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Avatar 3</h3>
        <p class="movies-description">2024 ‧ Action/Adventure/Sci-Fi ‧ 3h 0m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Furiosa.jpg" alt="Furiosa" class="poster-image">
      <a href="https://www.youtube.com/watch?v=Nz9hEgpKq8w" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Furiosa</h3>
        <p class="movies-description">2024 ‧ Action/Adventure/Fantasy ‧ 2h 40m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/FantasticFour2024.jpg" alt="Fantastic Four (2024)" class="poster-image">
      <a href="https://www.youtube.com/watch?v=HqY-fdGFykg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Fantastic Four (2024)</h3>
        <p class="movies-description">2024 ‧ Action/Adventure/Sci-Fi ‧ 2h 15m</p>
      </div>
    </div>

  </section>

</div>

<h2 class="Top-picks_header">Theatrick's Favourite</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">
    
    <div class="movies-poster">
      <img src="image/Interstellar.jpg" alt="Interstellar" class="poster-image">
      <a href="https://www.youtube.com/watch?v=zSWdZVtXT7E" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Interstellar</h3>
        <p class="movies-description">2014 ‧ Sci-Fi/Adventure ‧ 2h 49m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Parasite.jpg" alt="Parasite" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5xHk2zG56nA" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Parasite</h3>
        <p class="movies-description">2019 ‧ Thriller/Drama ‧ 2h 12m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/TheMatrix.jpg" alt="The Matrix" class="poster-image">
      <a href="https://www.youtube.com/watch?v=m8e-FF8MsqU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Matrix</h3>
        <p class="movies-description">1999 ‧ Action/Sci-Fi ‧ 2h 16m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Inception.jpg" alt="Inception" class="poster-image">
      <a href="https://www.youtube.com/watch?v=YoHD9XEInc0" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Inception</h3>
        <p class="movies-description">2010 ‧ Action/Adventure/Sci-Fi ‧ 2h 28m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/TheDarkKnight.jpg" alt="The Dark Knight" class="poster-image">
      <a href="https://www.youtube.com/watch?v=EXeTwQWrcwY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Dark Knight</h3>
        <p class="movies-description">2008 ‧ Action/Crime/Drama ‧ 2h 32m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/ForrestGump.jpg" alt="Forrest Gump" class="poster-image">
      <a href="https://www.youtube.com/watch?v=bLvqoHBptjg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Forrest Gump</h3>
        <p class="movies-description">1994 ‧ Drama/Romance ‧ 2h 22m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/FightClub.jpg" alt="Fight Club" class="poster-image">
      <a href="https://www.youtube.com/watch?v=qtRKdVHc-cE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Fight Club</h3>
        <p class="movies-description">1999 ‧ Drama ‧ 2h 19m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Gladiator.jpg" alt="Gladiator" class="poster-image">
      <a href="https://www.youtube.com/watch?v=owK1qxDselE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Gladiator</h3>
        <p class="movies-description">2000 ‧ Action/Adventure/Drama ‧ 2h 35m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image\The Pursuit of Happyness.jpg" alt="The Pursuit of Happyness" class="poster-image">
      <a href="https://www.youtube.com/watch?v=89Kq8SDUy5I" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Pursuit of Happyness</h3>
        <p class="movies-description">2006 ‧ Biography/Drama ‧ 1h 57m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image\SPMAN.jpg" alt="Spider-Man: No Way Home" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JfVOs4V8p5E" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Spider-Man: No Way Home</h3>
        <p class="movies-description">2021 ‧ Action/Adventure/Fantasy ‧ 2h 28m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/AvengersEndgame.jpg" alt="Avengers: Endgame" class="poster-image">
      <a href="https://www.youtube.com/watch?v=TcMBFSGVi1c" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Avengers: Endgame</h3>
        <p class="movies-description">2019 ‧ Action/Adventure/Sci-Fi ‧ 3h 2m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Avatar.jpg" alt="Avatar" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5PSNL1qE6VY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Avatar</h3>
        <p class="movies-description">2009 ‧ Action/Adventure/Sci-Fi ‧ 2h 42m</p>
      </div>
    </div>

  </section>

</div>

<h2 class="Top-picks_header"> Horror</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">
    
    <div class="movies-poster">
      <img src="image/TheConjuring.jpg" alt="The Conjuring" class="poster-image">
      <a href="https://www.youtube.com/watch?v=k10ETZ41q5o" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Conjuring</h3>
        <p class="movies-description">2013 ‧ Horror/Thriller ‧ 1h 52m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Hereditary.jpg" alt="Hereditary" class="poster-image">
      <a href="https://www.youtube.com/watch?v=3ZyTUzSgVpg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Hereditary</h3>
        <p class="movies-description">2018 ‧ Horror/Drama ‧ 2h 7m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/GetOut.jpg" alt="Get Out" class="poster-image">
      <a href="https://www.youtube.com/watch?v=DzfpyUB60YY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Get Out</h3>
        <p class="movies-description">2017 ‧ Horror/Thriller ‧ 1h 44m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/AQuietPlace.jpg" alt="A Quiet Place" class="poster-image">
      <a href="https://www.youtube.com/watch?v=WR7cc5t7tv8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">A Quiet Place</h3>
        <p class="movies-description">2018 ‧ Horror/Thriller ‧ 1h 30m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/TheShining.jpg" alt="The Shining" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5Cb3ik6zP2I" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Shining</h3>
        <p class="movies-description">1980 ‧ Horror/Thriller ‧ 2h 26m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/OItChapterne.jpg" alt="It Chapter One" class="poster-image">
      <a href="https://www.youtube.com/watch?v=FnCdQpQ7U4A" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">It Chapter One</h3>
        <p class="movies-description">2017 ‧ Horror/Thriller ‧ 2h 15m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/ItFollows.jpg" alt="It Follows" class="poster-image">
      <a href="https://www.youtube.com/watch?v=F6R76pEKH3k" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">It Follows</h3>
        <p class="movies-description">2014 ‧ Horror/Thriller ‧ 1h 40m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/ParanormalActivity.jpg" alt="Paranormal Activity" class="poster-image">
      <a href="https://www.youtube.com/watch?v=F_UJjxoA9pE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Paranormal Activity</h3>
        <p class="movies-description">2007 ‧ Horror/Mystery ‧ 1h 26m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Annabelle.jpg" alt="Annabelle" class="poster-image">
      <a href="https://www.youtube.com/watch?v=1sI1s1MLbtE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Annabelle</h3>
        <p class="movies-description">2014 ‧ Horror/Thriller ‧ 1h 39m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/TrainToBusan.jpg" alt="Train to Busan" class="poster-image">
      <a href="https://www.youtube.com/watch?v=pyWuHv85dJk" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Train to Busan</h3>
        <p class="movies-description">2016 ‧ Horror/Action ‧ 1h 58m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Us.jpg" alt="Us" class="poster-image">
      <a href="https://www.youtube.com/watch?v=hUs7s5PZ_3k" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Us</h3>
        <p class="movies-description">2019 ‧ Horror/Thriller ‧ 1h 56m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/TheBabadook.jpg" alt="The Babadook" class="poster-image">
      <a href="https://www.youtube.com/watch?v=5JrcFvWvqHI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Babadook</h3>
        <p class="movies-description">2014 ‧ Horror/Thriller ‧ 1h 33m</p>
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