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
      <h2 id="trending-text">Today's Trending Hit on Theatrick: Most Searched Movie!</h2>
    </div>
  </div>
  <div class="slideshow-container">
    
  <div class="slide">
  <div class="movie-poster">
    <img src="image\killers-of-the-flower-moon.jpeg" alt="Killers of the Flower Moon" class="poster-image">
    <a href="https://www.youtube.com/watch?v=MW6y5fAPKaI" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Killers of the Flower Moon</h3>
      <p class="movie-description">2023 ‧ Crime/Drama ‧ 3h 26m</p>
    </div>
  </div>
</div>

<div class="slide">
  <div class="movie-poster">
    <img src="image\jawan.png" alt="Jawan" class="poster-image">
    <a href="https://www.youtube.com/watch?v=pvc9e7zKKhI" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Jawan</h3>
      <p class="movie-description">2023 ‧ Action/Thriller ‧ 2h 49m</p>
    </div>
  </div>
</div>

<div class="slide">
  <div class="movie-poster">
    <img src="image\concrete.jpeg" alt="Concrete Utopia" class="poster-image">
    <a href="https://www.youtube.com/watch?v=cBrz0k4TJ6s" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Concrete Utopia</h3>
      <p class="movie-description">2023 ‧ Drama/Disaster ‧ 2h 10m</p>
    </div>
  </div>
</div>

<div class="slide">
  <div class="movie-poster">
    <img src="image\oppen.avif" alt="Oppenheimer" class="poster-image">
    <a href="https://www.youtube.com/watch?v=uYPbbksJxIg" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Oppenheimer</h3>
      <p class="movie-description">2023 ‧ Biography/Drama ‧ 3h</p>
    </div>
  </div>
</div>

<div class="slide">
  <div class="movie-poster">
    <img src="image\rocky.jpg" alt="Rocky Aur Rani Ki Prem Kahani" class="poster-image">
    <a href="https://www.youtube.com/watch?v=JUV6YlXX9Wo" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Rocky Aur Rani Ki Prem Kahani</h3>
      <p class="movie-description">2023 ‧ Romance/Comedy ‧ 2h 48m</p>
    </div>
  </div>
</div>

<div class="slide">
  <div class="movie-poster">
    <img src="image\past_lives.jpg" alt="Past Lives" class="poster-image">
    <a href="https://www.youtube.com/watch?v=WQzjhlA2YTA" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Past Lives</h3>
      <p class="movie-description">2023 ‧ Drama/Romance ‧ 1h 46m</p>
    </div>
  </div>
</div>

<div class="slide">
  <div class="movie-poster">
    <img src="image\drishyam.avif" alt="Drishyam 2" class="poster-image">
    <a href="https://www.youtube.com/watch?v=cxA7xGiL2J4" target="_blank" class="play-button">▶</a>
    <div class="movie-info">
      <h3 class="movie-title">Drishyam 2</h3>
      <p class="movie-description">2022 ‧ Thriller/Crime ‧ 2h 20m</p>
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
  <img src="image/TheGodfather.jpg" alt="The Godfather" class="poster-image">
  <a href="https://www.youtube.com/watch?v=sY1S34973zA" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">The Godfather</h3>
    <p class="movies-description">1972 ‧ Crime/Drama ‧ 2h 55m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/ShawshankRedemption.jpg" alt="The Shawshank Redemption" class="poster-image">
  <a href="https://www.youtube.com/watch?v=6hB3S9bIaco" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">The Shawshank Redemption</h3>
    <p class="movies-description">1994 ‧ Drama ‧ 2h 22m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/SchindlersList.jpg" alt="Schindler's List" class="poster-image">
  <a href="https://www.youtube.com/watch?v=JdRGCWc6N3M" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">Schindler's List</h3>
    <p class="movies-description">1993 ‧ Biography/Drama/History ‧ 3h 15m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/CitizenKane.jpg" alt="Citizen Kane" class="poster-image">
  <a href="https://www.youtube.com/watch?v=2e2SMN2Bt6Y" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">Citizen Kane</h3>
    <p class="movies-description">1941 ‧ Mystery/Drama ‧ 1h 59m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/PulpFiction.jpg" alt="Pulp Fiction" class="poster-image">
  <a href="https://www.youtube.com/watch?v=s7EdQ4FqbhY" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">Pulp Fiction</h3>
    <p class="movies-description">1994 ‧ Crime/Drama ‧ 2h 34m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/TheDarkKnight.jpg" alt="The Dark Knight" class="poster-image">
  <a href="https://www.youtube.com/watch?v=EXeTwQWrcwY" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">The Dark Knight</h3>
    <p class="movies-description">2008 ‧ Action/Crime/Drama ‧ 2h 32m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/ForrestGump.jpg" alt="Forrest Gump" class="poster-image">
  <a href="https://www.youtube.com/watch?v=bLvqoHBptjg" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">Forrest Gump</h3>
    <p class="movies-description">1994 ‧ Drama/Romance ‧ 2h 22m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/EmpireStrikesBack.jpg" alt="The Empire Strikes Back" class="poster-image">
  <a href="https://www.youtube.com/watch?v=JNwNXF9Y6kY" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">The Empire Strikes Back</h3>
    <p class="movies-description">1980 ‧ Action/Adventure/Fantasy ‧ 2h 4m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/Inception.jpg" alt="Inception" class="poster-image">
  <a href="https://www.youtube.com/watch?v=YoHD9XEInc0" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">Inception</h3>
    <p class="movies-description">2010 ‧ Action/Adventure/Sci-Fi ‧ 2h 28m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/ReturnOfTheKing.jpg" alt="The Lord of the Rings: The Return of the King" class="poster-image">
  <a href="https://www.youtube.com/watch?v=r5X-hFf6Bwo" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">The Lord of the Rings: The Return of the King</h3>
    <p class="movies-description">2003 ‧ Adventure/Drama/Fantasy ‧ 3h 21m</p>
  </div>
</div>

<div class="movies-poster">
  <img src="image/TheGodfatherPartII.jpg" alt="The Godfather: Part II" class="poster-image">
  <a href="https://www.youtube.com/watch?v=5DO7YbP6S4Q" target="_blank" class="plays-button">▶</a>
  <div class="movies-info">
    <h3 class="movies-title"><a href ="toppicks_movies.php">The Godfather: Part II</h3>
    <p class="movies-description">1974 ‧ Crime/Drama ‧ 3h 22m</p>
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
  </section>
</div>

<h2 class="Top-picks_header">Trending Now</h2>
<div class="slider-container">

  <!-- Slider Section -->
  <section class="slider">
    
    <div class="movies-poster">
      <img src="image/Barbie.jpg" alt="Barbie" class="poster-image">
      <a href="https://www.youtube.com/watch?v=pBk4NYhWNYY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Trendy_Movie.php">Barbie</h3>
        <p class="movies-description">2023 ‧ Fantasy/Comedy ‧ 1h 54m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/Oppenheimer.jpg" alt="Oppenheimer" class="poster-image">
      <a href="https://www.youtube.com/watch?v=qEHSFZHTnHs" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Trendy_Movie.php">Oppenheimer</h3>
        <p class="movies-description">2023 ‧ Biography/Drama ‧ 3h</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/SpiderManAcrossTheSpiderVerse.jpg" alt="Spider-Man: Across the Spider-Verse" class="poster-image">
      <a href="https://www.youtube.com/watch?v=wiXq8MN7f9k" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Trendy_Movie.php">Spider-Man: Across the Spider-Verse</h3>
        <p class="movies-description">2023 ‧ Animation/Action/Adventure ‧ 2h 16m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/TheMarvels.jpg" alt="The Marvels" class="poster-image">
      <a href="https://www.youtube.com/watch?v=ve4gqL1o1wI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Trendy_Movie.php">The Marvels</h3>
        <p class="movies-description">2023 ‧ Action/Sci-Fi ‧ 1h 45m</p>
      </div>
    </div>

    <div class="movies-poster">
      <img src="image/GuardiansOfTheGalaxyVol3.jpg" alt="Guardians of the Galaxy Vol. 3" class="poster-image">
      <a href="https://www.youtube.com/watch?v=7s0sD7PBh1M" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href ="Trendy_Movie.php">Guardians of the Galaxy Vol. 3</h3>
        <p class="movies-description">2023 ‧ Action/Adventure/Sci-Fi ‧ 2h 30m</p>
      </div>
      </div> 
  
  </section>
</div>

<h2 class="Top-picks_header">Upcoming Releases</h2>
<div class="slider-container">

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