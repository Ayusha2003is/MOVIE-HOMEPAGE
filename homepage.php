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
      <h2 id="trending-text">Today's Trending Hit on Theatrick: Most Searched!</h2>
    </div>
  </div>
  <div class="slideshow-container">
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Princess_Diaries.jpg" alt="The Princess Diaries" class="poster-image">
            <a href="https://www.youtube.com/watch?v=CzcGwB7qat8&t=2s" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">The Princess Diaries</h3>
                <p class="movie-description">2001 ‧ Family/Comedy ‧ 1h 51m</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="image/Flipped.jpg" alt="Flipped" class="poster-image">
            <a href="https://www.youtube.com/watch?v=q40GxY5n2Dg&ab_channel=RottenTomatoesClassicTrailers" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Flipped</h3>
                <p class="movie-description">2010 ‧ Comedy/Romance ‧ 1h 30m</p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="movie-poster">
            <img src="OM shanti Om.jpeg" alt="Om Shanti Om" class="poster-image">
            <a href="https://www.youtube.com/watch?v=9oeGoQGt7Ao&ab_channel=RedChilliesEntertainment" target="_blank" class="play-button">▶</a>
            <div class="movie-info">
                <h3 class="movie-title">Om Shanti Om</h3>
                <p class="movie-description">2007 ‧ Romance/Musical ‧ 2h 42m</p>
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

<h2 class="Top-picks_header">Fan's Favourite</h2>
<div class="slider-container">

  <section class="slider">
    
    <!-- Movie Poster - Hocus Pocus -->
    <div class="movies-poster">
      <img src="image/HocusPocus.jpeg" alt="Hocus Pocus" class="poster-image">
      <a href="https://www.youtube.com/watch?v=2UUMsInka2s" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">Hocus Pocus</h3>
        <p class="movies-description">1993 ‧ Fantasy/Comedy ‧ 1h 36m</p>
      </div>
    </div>
    
    <!-- Movie Poster - The Lion King -->
    <div class="movies-poster">
      <img src="image/TheLionKing.jpeg" alt="The Lion King" class="poster-image">
      <a href="https://www.youtube.com/watch?v=7TavVZMewpY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">The Lion King</h3>
        <p class="movies-description">1994 ‧ Adventure/Family ‧ 1h 28m</p>
      </div>
    </div>

    <!-- Movie Poster - Matilda -->
    <div class="movies-poster">
      <img src="image/Matilda.jpeg" alt="Matilda" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oHDg7Q6OqKA" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">Matilda</h3>
        <p class="movies-description">1996 ‧ Fantasy/Comedy ‧ 1h 42m</p>
      </div>
    </div>

    <!-- Movie Poster - You've Got Mail -->
    <div class="movies-poster">
      <img src="image/YouveGotMail.jpeg" alt="You've Got Mail" class="poster-image">
      <a href="https://www.youtube.com/watch?v=dmEvPZUdAVI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">You've Got Mail</h3>
        <p class="movies-description">1998 ‧ Romance/Comedy ‧ 1h 59m</p>
      </div>
    </div>

    <!-- Movie Poster - The Sixth Sense -->
    <div class="movies-poster">
      <img src="image/TheSixthSense.png" alt="The Sixth Sense" class="poster-image">
      <a href="https://www.youtube.com/watch?v=VG9AGf66tXM" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">The Sixth Sense</h3>
        <p class="movies-description">1999 ‧ Thriller/Drama ‧ 1h 47m</p>
      </div>
    </div>

    <!-- Movie Poster - The Holiday -->
    <div class="movies-poster">
      <img src="image/TheHoliday.jpg" alt="The Holiday" class="poster-image">
      <a href="https://www.youtube.com/watch?v=BDi5zH18vxU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">The Holiday</h3>
        <p class="movies-description">2006 ‧ Romance/Comedy ‧ 2h 16m</p>
      </div>
    </div>

    <!-- Movie Poster - Jumanji -->
    <div class="movies-poster">
      <img src="image/Jumanji.jpg" alt="Jumanji" class="poster-image">
      <a href="https://www.youtube.com/watch?v=8BsHn9X5Ehc" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title"><a href="FANFAV.php">Jumanji</h3>
        <p class="movies-description">1995 ‧ Adventure/Fantasy ‧ 1h 44m</p>
      </div>
    </div>

    <!-- Movie Poster - Cloudy with a Chance of Meatballs -->
    <div class="movies-poster">
      <img src="image/CloudyWithAChanceOfMeatballs.jpg" alt="Cloudy with a Chance of Meatballs" class="poster-image">
      <a href="https://www.youtube.com/watch?v=pUaKcFI4BZY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Cloudy with a Chance of Meatballs</h3>
        <p class="movies-description">2009 ‧ Animation/Comedy ‧ 1h 30m</p>
      </div>
    </div>

    <!-- Movie Poster - Casper -->
    <div class="movies-poster">
      <img src="image/Casper.jpg" alt="Casper" class="poster-image">
      <a href="https://www.youtube.com/watch?v=zKek5l9SHa4" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Casper</h3>
        <p class="movies-description">1995 ‧ Fantasy/Family ‧ 1h 40m</p>
      </div>
    </div>

    <!-- Movie Poster - Sleepless in Seattle -->
    <div class="movies-poster">
      <img src="image/SleeplessInSeattle.jpg" alt="Sleepless in Seattle" class="poster-image">
      <a href="https://www.youtube.com/watch?v=-Lj2U-cmyek" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Sleepless in Seattle</h3>
        <p class="movies-description">1993 ‧ Romance/Comedy ‧ 1h 45m</p>
      </div>
    </div>

    <!-- Movie Poster - The Polar Express -->
    <div class="movies-poster">
      <img src="image/ThePolarExpress.jpeg" alt="The Polar Express" class="poster-image">
      <a href="https://www.youtube.com/watch?v=TQhRqtt-Fpo" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">The Polar Express</h3>
        <p class="movies-description">2004 ‧ Animation/Family ‧ 1h 40m</p>
      </div>
    </div>

    <!-- Movie Poster - Julie & Julia -->
    <div class="movies-poster">
      <img src="image/JulieAndJulia.jpg" alt="Julie & Julia" class="poster-image">
      <a href="https://www.youtube.com/watch?v=Oz2KB1RzRYE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Julie & Julia</h3>
        <p class="movies-description">2009 ‧ Drama/Comedy ‧ 2h 3m</p>
      </div>
    </div>

  </section>
</div>

<h2 class="Top-picks_header">Bollywood</h2>
<div class="slider-container">

  <section class="slider">
    <div class="movies-poster">
      <img src="image/Dilwale Dulhania Le Jayenge.jpeg" alt="Dilwale Dulhania Le Jayenge" class="poster-image">
      <a href="https://www.youtube.com/watch?v=c25GKl5VNeY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Dilwale Dulhania Le Jayenge</h3>
        <p class="movies-description">1995 ‧ Romance/Drama ‧ 3h 10m</p>
      </div>
    </div>

    <!-- Movie Poster - Sholay -->
    <div class="movies-poster">
      <img src="image/Sholay.jpg" alt="Sholay" class="poster-image">
      <a href="https://www.youtube.com/watch?v=6iK02F65noQ" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Sholay</h3>
        <p class="movies-description">1975 ‧ Action/Adventure ‧ 3h 24m</p>
      </div>
    </div>

    <!-- Movie Poster - 3 Idiots -->
    <div class="movies-poster">
      <img src="image/threeidiots.jpg" alt="3 Idiots" class="poster-image">
      <a href="https://www.youtube.com/watch?v=xvszmNXdM4w" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">3 Idiots</h3>
        <p class="movies-description">2009 ‧ Comedy/Drama ‧ 2h 51m</p>
      </div>
    </div>

    <!-- Movie Poster - Kabhi Khushi Kabhie Gham -->
    <div class="movies-poster">
      <img src="image/k3g.jpg" alt="Kabhi Khushi Kabhie Gham" class="poster-image">
      <a href="https://www.youtube.com/watch?v=7H0NWE-J6wE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Kabhi Khushi Kabhie Gham</h3>
        <p class="movies-description">2001 ‧ Drama/Romance ‧ 3h 30m</p>
      </div>
    </div>

    <!-- Movie Poster - Lagaan -->
    <div class="movies-poster">
      <img src="image/Lagaan.jpg" alt="Lagaan" class="poster-image">
      <a href="https://www.youtube.com/watch?v=oSIGQ0YkFxs" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Lagaan</h3>
        <p class="movies-description">2001 ‧ Drama/Sport ‧ 3h 44m</p>
      </div>
    </div>

    <!-- Movie Poster - Zindagi Na Milegi Dobara -->
    <div class="movies-poster">
      <img src="image/Zindagi_Na_Milegi_Dobara.jpg" alt="Zindagi Na Milegi Dobara" class="poster-image">
      <a href="https://www.youtube.com/watch?v=FJrpcDgC3zU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Zindagi Na Milegi Dobara</h3>
        <p class="movies-description">2011 ‧ Drama/Adventure ‧ 2h 35m</p>
      </div>
    </div>

    <!-- Movie Poster - Queen -->
    <div class="movies-poster">
      <img src="image/Queen.jpg" alt="Queen" class="poster-image">
      <a href="https://www.youtube.com/watch?v=KGC6vl3lzf0" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Queen</h3>
        <p class="movies-description">2013 ‧ Comedy/Drama ‧ 2h 26m</p>
      </div>
    </div>

    <!-- Movie Poster - Dangal -->
    <div class="movies-poster">
      <img src="image/DANGAL.jpg" alt="Dangal" class="poster-image">
      <a href="https://www.youtube.com/watch?v=x_7YlGv9u1g" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Dangal</h3>
        <p class="movies-description">2016 ‧ Drama/Sport ‧ 2h 49m</p>
      </div>
    </div>

    <!-- Movie Poster - Mughal-e-Azam -->
    <div class="movies-poster">
      <img src="image/Mughal.jpg" alt="Mughal-e-Azam" class="poster-image">
      <a href="https://www.youtube.com/watch?v=1cD4KzvAmdI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Mughal-e-Azam</h3>
        <p class="movies-description">1960 ‧ Romance/Drama ‧ 3h 17m</p>
      </div>
    </div>

    <!-- Movie Poster - Bajrangi Bhaijaan -->
    <div class="movies-poster">
      <img src="image/BAJRANGI.jpg" alt="Bajrangi Bhaijaan" class="poster-image">
      <a href="https://www.youtube.com/watch?v=vyX4toD395U" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Bajrangi Bhaijaan</h3>
        <p class="movies-description">2015 ‧ Drama/Adventure ‧ 2h 43m</p>
      </div>
    </div>

    <!-- Movie Poster - Dil Chahta Hai -->
    <div class="movies-poster">
      <img src="image/Dil_Chahta_Hai.jpg" alt="Dil Chahta Hai" class="poster-image">
      <a href="https://www.youtube.com/watch?v=aYCLNRp2EHE" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Dil Chahta Hai</h3>
        <p class="movies-description">2001 ‧ Comedy/Drama ‧ 3h 5m</p>
      </div>
    </div>

    <!-- Movie Poster - Gully Boy -->
    <div class="movies-poster">
      <img src="image/Gully_Boy_poster.jpg" alt="Gully Boy" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JfbXC2Yzpx8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Gully Boy</h3>
        <p class="movies-description">2019 ‧ Drama/Musical ‧ 2h 33m</p>
      </div>
    </div>

  </section>

</div>

<h2 class="Top-picks_header">Nepali Movie</h2>
<div class="slider-container">

  <section class="slider">
 
    <!-- Movie Poster - Chino -->
    <div class="movies-poster">
      <img src="image/Chinofilm.jpg" alt="Chino" class="poster-image">
      <a href="https://www.youtube.com/watch?v=qhX8C8HzosI" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Chino</h3>
        <p class="movies-description">1991 ‧ Action/Drama ‧ 2h 45m</p>
      </div>
    </div>

    <!-- Movie Poster - Kusume Rumal -->
    <div class="movies-poster">
      <img src="image/Kusume.jpg" alt="Kusume Rumal" class="poster-image">
      <a href="https://www.youtube.com/watch?v=r5fwx9b4g60" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Kusume Rumal</h3>
        <p class="movies-description">1985 ‧ Romance/Drama ‧ 2h 20m</p>
      </div>
    </div>

    <!-- Movie Poster - Santaan -->
    <div class="movies-poster">
      <img src="image/Santaan.jpg" alt="Santaan" class="poster-image">
      <a href="https://www.youtube.com/watch?v=hABd7Tt1P1g" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Santaan</h3>
        <p class="movies-description">1986 ‧ Drama ‧ 2h 30m</p>
      </div>
    </div>

    <!-- Movie Poster - Basudev -->
    <div class="movies-poster">
      <img src="image/Basudev_(film).jpg" alt="Basudev" class="poster-image">
      <a href="https://www.youtube.com/watch?v=MK8ybqiYNzQ" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Basudev</h3>
        <p class="movies-description">1984 ‧ Drama/Family ‧ 2h 25m</p>
      </div>
    </div>

    <!-- Movie Poster - Darpan Chhaya -->
    <div class="movies-poster">
      <img src="image/DarpanChaya.jpg" alt="Darpan Chhaya" class="poster-image">
      <a href="https://www.youtube.com/watch?v=uBdKaZBjsZc" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Darpan Chhaya</h3>
        <p class="movies-description">2001 ‧ Romance/Drama ‧ 2h 25m</p>
      </div>
    </div>

    <!-- Movie Poster - Balidan -->
    <div class="movies-poster">
      <img src="image/Balidaan_(1997_film)_poster.jpg" alt="Balidan" class="poster-image">
      <a href="https://www.youtube.com/watch?v=V8FQOGpQCKY" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Balidan</h3>
        <p class="movies-description">1997 ‧ Drama/Political ‧ 2h 30m</p>
      </div>
    </div>

    <!-- Movie Poster - Prem Pinda -->
    <div class="movies-poster">
      <img src="image/prempinda.jpg" alt="Prem Pinda" class="poster-image">
      <a href="https://www.youtube.com/watch?v=ve5NNyeXBkU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Prem Pinda</h3>
        <p class="movies-description">1993 ‧ Drama/Romance ‧ 2h 15m</p>
      </div>
    </div>

    <!-- Movie Poster - Deuta -->
    <div class="movies-poster">
      <img src="image/deuta.jpeg" alt="Deuta" class="poster-image">
      <a href="https://www.youtube.com/watch?v=HM3okhxCWGU" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Deuta</h3>
        <p class="movies-description">1991 ‧ Drama/Family ‧ 2h 20m</p>
      </div>
    </div>

    <!-- Movie Poster - Lahure -->
    <div class="movies-poster">
      <img src="image/lahure.jpg" alt="Lahure" class="poster-image">
      <a href="https://www.youtube.com/watch?v=RZ5LB7Xz2F8" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Lahure</h3>
        <p class="movies-description">1989 ‧ Drama/War ‧ 2h 30m</p>
      </div>
    </div>

    <!-- Movie Poster - Allare -->
    <div class="movies-poster">
      <img src="image/Allare.jpg" alt="Allare" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JGn-twn1Mjg" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Allare</h3>
        <p class="movies-description">1997 ‧ Comedy ‧ 2h 15m</p>
      </div>
    </div>

    <!-- Movie Poster - Chor -->
    <div class="movies-poster">
      <img src="image\chor.jpeg" alt="Chor" class="poster-image">
      <a href="https://www.youtube.com/watch?v=JqcYZRR1w5Q" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Chor</h3>
        <p class="movies-description">2000 ‧ Action/Drama ‧ 2h 10m</p>
      </div>
    </div>

    <!-- Movie Poster - Aafno Manche -->
    <div class="movies-poster">
      <img src="image/Aafno.jpg" alt="Aafno Manche" class="poster-image">
      <a href="https://www.youtube.com/watch?v=Ef5VJNVZyCk" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
        <h3 class="movies-title">Aafno Manche</h3>
        <p class="movies-description">2001 ‧ Family/Drama ‧ 2h 25m</p>
      </div>
    </div>

  </section>
</div>

<h2 class="Top-picks_header">New Releases</h2>
<div class="slider-container">

  <section class="slider">
 
    <!-- Movie Poster - Gladiator II -->
    <div class="movies-poster">
      <img src="image/Gladiator.jpg" alt="Gladiator II" class="poster-image">
      <a href="https://www.youtube.com/watch?v=gladiator2trailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Gladiator II</h3>
          <p class="movies-description">2024 ‧ Action/Drama ‧ 2h 40m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Wicked -->
    <div class="movies-poster">
      <img src="image/wicked.jpg" alt="Wicked" class="poster-image">
      <a href="https://www.youtube.com/watch?v=wickedtrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Wicked</h3>
          <p class="movies-description">2024 ‧ Musical/Fantasy ‧ 2h 30m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Moana II -->
    <div class="movies-poster">
      <img src="image/Moana.jpeg" alt="Moana II" class="poster-image">
      <a href="https://www.youtube.com/watch?v=moana2trailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Moana II</h3>
          <p class="movies-description">2024 ‧ Adventure/Animation ‧ 1h 50m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Juror No. 2 -->
    <div class="movies-poster">
      <img src="image/Juror_No._2_(2024).jpg" alt="Juror No. 2" class="poster-image">
      <a href="https://www.youtube.com/watch?v=juror2trailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Juror No. 2</h3>
          <p class="movies-description">2024 ‧ Thriller/Drama ‧ 1h 45m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Aftermath -->
    <div class="movies-poster">
      <img src="image/aftermath.jpg" alt="Aftermath" class="poster-image">
      <a href="https://www.youtube.com/watch?v=aftermathtrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Aftermath</h3>
          <p class="movies-description">2024 ‧ Horror/Thriller ‧ 1h 35m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Blitz -->
    <div class="movies-poster">
      <img src="image/blitz.jpg" alt="Blitz" class="poster-image">
      <a href="https://www.youtube.com/watch?v=blitztrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Blitz</h3>
          <p class="movies-description">2024 ‧ Action/Crime ‧ 2h 10m</p>
      </div>
    </div>
  
    <!-- Movie Poster - 72 Hours -->
    <div class="movies-poster">
      <img src="image/seventytwohours.jpg" alt="72 Hours" class="poster-image">
      <a href="https://www.youtube.com/watch?v=72hourstrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">72 Hours</h3>
          <p class="movies-description">2024 ‧ Action/Thriller ‧ 1h 55m</p>
      </div>
    </div>
  
    <!-- Movie Poster - He Never Left -->
    <div class="movies-poster">
      <img src="image/He_never_left.jpg" alt="He Never Left" class="poster-image">
      <a href="https://www.youtube.com/watch?v=heneverlefttrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">He Never Left</h3>
          <p class="movies-description">2024 ‧ Mystery/Thriller ‧ 1h 45m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Hitpig! -->
    <div class="movies-poster">
      <img src="image/hitpig.jpeg" alt="Hitpig!" class="poster-image">
      <a href="https://www.youtube.com/watch?v=hitpigtrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Hitpig!</h3>
          <p class="movies-description">2024 ‧ Action/Comedy ‧ 2h 00m</p>
      </div>
    </div>
  
    <!-- Movie Poster - A Real Pain -->
    <div class="movies-poster">
      <img src="image/AREALPAIN.jpeg" alt="A Real Pain" class="poster-image">
      <a href="https://www.youtube.com/watch?v=realpaintrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">A Real Pain</h3>
          <p class="movies-description">2024 ‧ Drama/Thriller ‧ 1h 50m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Don Q -->
    <div class="movies-poster">
      <img src="image/donq.jpg" alt="Don Q" class="poster-image">
      <a href="https://www.youtube.com/watch?v=donqtrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Don Q</h3>
          <p class="movies-description">2024 ‧ Drama/Action ‧ 2h 05m</p>
      </div>
    </div>
  
    <!-- Movie Poster - Thanksgiving -->
    <div class="movies-poster">
      <img src="image/thanksgiving.jpg" alt="Thanksgiving" class="poster-image">
      <a href="https://www.youtube.com/watch?v=thanksgivingtrailerl" target="_blank" class="plays-button">▶</a>
      <div class="movies-info">
          <h3 class="movies-title">Thanksgiving</h3>
          <p class="movies-description">2024 ‧ Horror/Comedy ‧ 1h 45m</p>
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