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
<h2 class="Top-picks_header">Top Picks</h2>

<div class="slider-container">
  <section class="slider">
  <div class="movie-container">
      <div class="movies-poster">
        <img src="image/Wicked.jpg" alt="Wicked" class="poster-image">
        <a href="https://www.youtube.com/watch?v=6COmYeLsz4c&t=19s&ab_channel=UniversalPictures" target="_blank" class="plays-button">▶</a>
        <div class="movies-info">
          <h3 class="movies-title">Wicked</h3>
          <p class="movies-description">2024 ‧ Musical/Fantasy ‧ Coming Soon</p>
        </div>
      </div>

      <div class="movie-information">
        <h2>Wicked (2024)</h2>
        <p>
          The long-anticipated film adaptation of the acclaimed Broadway musical, *Wicked*, explores the untold story of the witches of Oz. Before Dorothy’s arrival, two young women form an unlikely friendship. Elphaba, the misunderstood and ambitious one, and Glinda, the beautiful and popular one, find themselves at odds as their lives take them on very different paths in this tale of love, betrayal, and the price of power.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Jon M. Chu</p>
          <p><strong>Writers:</strong> Winnie Holzman (book), Stephen Schwartz (music & lyrics)</p>
          <p><strong>Stars:</strong> Ariana Grande, Cynthia Erivo, Jonathan Bailey</p>
        </div>
      </div>
    </div>
  <div class="movie-container">
  <div class="movies-poster">
    <img src="image/TheGodfather.jpg" alt="The Godfather" class="poster-image">
    <a href="https://www.youtube.com/watch?v=sY1S34973zA" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Godfather</h3>
      <p class="movies-description">1972 ‧ Crime/Drama ‧ 2h 55m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>The Godfather (1972)</h2>
    <p>
      Widely regarded as one of the greatest films of all time, this mob drama, based on Mario Puzo's novel of the same name, focuses on the powerful Italian-American crime family of Don Vito Corleone (Marlon Brando). When the don's youngest son, Michael (Al Pacino), reluctantly joins the Mafia, he becomes involved in the inevitable cycle of violence and betrayal. Although Michael tries to maintain a normal relationship with his wife, Kay (Diane Keaton), he is drawn deeper into the family business.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Francis Ford Coppola</p>
      <p><strong>Writers:</strong> Mario Puzo, Francis Ford Coppola</p>
      <p><strong>Stars:</strong> Marlon Brando, Al Pacino, James Caan</p>
    </div>
  </div>
</div>

<div class="movie-container">
      <!-- Movie Poster -->
      <div class="movies-poster">
        <img src="image/ShawshankRedemption.jpg" alt="The Shawshank Redemption" class="poster-image">
        <a href="https://www.youtube.com/watch?v=6hB3S9bIaco" target="_blank" class="plays-button">▶</a>
        <div class="movies-info">
          <h3 class="movies-title">The Shawshank Redemption</h3>
          <p class="movies-description">1994 ‧ Drama ‧ 2h 22m</p>
        </div>
      </div>

      <!-- Movie Information -->
      <div class="movie-information">
        <h2>The Shawshank Redemption (1994)</h2>
        <p>
          Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency. 
          The story of their friendship and their journey to freedom became one of the most beloved films of all time.
        </p>
        <div class="movie-details">
          <p><strong>Director:</strong> Frank Darabont</p>
          <p><strong>Writers:</strong> Stephen King (story), Frank Darabont (screenplay)</p>
          <p><strong>Stars:</strong> Tim Robbins, Morgan Freeman, Bob Gunton</p>
        </div>
      </div>
    </div>

    <div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/CitizenKane.jpg" alt="Citizen Kane" class="poster-image">
    <a href="https://www.youtube.com/watch?v=2e2SMN2Bt6Y" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Citizen Kane</h3>
      <p class="movies-description">1941 ‧ Mystery/Drama ‧ 1h 59m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>Citizen Kane (1941)</h2>
    <p>
      Orson Welles' masterpiece follows the life of the wealthy and enigmatic newspaper magnate Charles Foster Kane, 
      exploring the mystery of his last words and the story of his rise and fall in the world of power, politics, and corruption.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Orson Welles</p>
      <p><strong>Writers:</strong> Orson Welles, Herman Mankiewicz</p>
      <p><strong>Stars:</strong> Orson Welles, Joseph Cotten, Dorothy Comingore</p>
    </div>
  </div>
</div>

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/PulpFiction.jpg" alt="Pulp Fiction" class="poster-image">
    <a href="https://www.youtube.com/watch?v=s7EdQ4FqbhY" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Pulp Fiction</h3>
      <p class="movies-description">1994 ‧ Crime/Drama ‧ 2h 34m</p>
    </div>
  </div>

  <!-- Movie Information -->
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

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/TheDarkKnight.jpg" alt="The Dark Knight" class="poster-image">
    <a href="https://www.youtube.com/watch?v=EXeTwQWrcwY" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Dark Knight</h3>
      <p class="movies-description">2008 ‧ Action/Crime/Drama ‧ 2h 32m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>The Dark Knight (2008)</h2>
    <p>
      Batman faces the Joker, a criminal mastermind who seeks to plunge Gotham City into anarchy and challenge Batman's very principles.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Christopher Nolan</p>
      <p><strong>Writers:</strong> Jonathan Nolan, Christopher Nolan</p>
      <p><strong>Stars:</strong> Christian Bale, Heath Ledger, Aaron Eckhart</p>
    </div>
  </div>
</div>

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/ForrestGump.jpg" alt="Forrest Gump" class="poster-image">
    <a href="https://www.youtube.com/watch?v=bLvqoHBptjg" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Forrest Gump</h3>
      <p class="movies-description">1994 ‧ Drama/Romance ‧ 2h 22m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>Forrest Gump (1994)</h2>
    <p>
      The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an extraordinary life story.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Robert Zemeckis</p>
      <p><strong>Writers:</strong> Eric Roth</p>
      <p><strong>Stars:</strong> Tom Hanks, Robin Wright, Gary Sinise</p>
    </div>
  </div>
</div>

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/EmpireStrikesBack.jpg" alt="The Empire Strikes Back" class="poster-image">
    <a href="https://www.youtube.com/watch?v=JNwNXF9Y6kY" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Empire Strikes Back</h3>
      <p class="movies-description">1980 ‧ Action/Adventure/Fantasy ‧ 2h 4m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>The Empire Strikes Back (1980)</h2>
    <p>
      The battle between the Rebel Alliance and the Galactic Empire continues as Luke Skywalker, Han Solo, Princess Leia, and Chewbacca try to escape the Imperial forces.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Irvin Kershner</p>
      <p><strong>Writers:</strong> Leigh Brackett, Lawrence Kasdan</p>
      <p><strong>Stars:</strong> Mark Hamill, Harrison Ford, Carrie Fisher</p>
    </div>
  </div>
</div>

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/Inception.jpg" alt="Inception" class="poster-image">
    <a href="https://www.youtube.com/watch?v=YoHD9XEInc0" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Inception</h3>
      <p class="movies-description">2010 ‧ Action/Adventure/Sci-Fi ‧ 2h 28m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>Inception (2010)</h2>
    <p>
      A thief who enters the dreams of others to steal secrets from their subconscious is given the task of planting an idea into a target's mind.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Christopher Nolan</p>
      <p><strong>Writers:</strong> Christopher Nolan</p>
      <p><strong>Stars:</strong> Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page</p>
    </div>
  </div>
</div>

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/ReturnOfTheKing.jpg" alt="The Lord of the Rings: The Return of the King" class="poster-image">
    <a href="https://www.youtube.com/watch?v=r5X-hFf6Bwo" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Lord of the Rings: The Return of the King</h3>
      <p class="movies-description">2003 ‧ Adventure/Drama/Fantasy ‧ 3h 21m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>The Lord of the Rings: The Return of the King (2003)</h2>
    <p>
      Aragorn is revealed as the heir to the ancient kings as he, Gandalf and the other members of the broken fellowship struggle to save Gondor from Sauron’s forces.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Peter Jackson</p>
      <p><strong>Writers:</strong> Fran Walsh, Philippa Boyens, Peter Jackson</p>
      <p><strong>Stars:</strong> Elijah Wood, Viggo Mortensen, Ian McKellen</p>
    </div>
  </div>
</div>

<div class="movie-container">
  <!-- Movie Poster -->
  <div class="movies-poster">
    <img src="image/TheGodfatherPartII.jpg" alt="The Godfather: Part II" class="poster-image">
    <a href="https://www.youtube.com/watch?v=5DO7YbP6S4Q" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">The Godfather: Part II</h3>
      <p class="movies-description">1974 ‧ Crime/Drama ‧ 3h 22m</p>
    </div>
  </div>

  <!-- Movie Information -->
  <div class="movie-information">
    <h2>The Godfather: Part II (1974)</h2>
    <p>
      The early life and career of Vito Corleone are portrayed, while his son Michael expands and tightens his grip on the family crime syndicate.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Francis Ford Coppola</p>
      <p><strong>Writers:</strong> Mario Puzo, Francis Ford Coppola</p>
      <p><strong>Stars:</strong> Al Pacino, Robert De Niro, Diane Keaton</p>
    </div>
  </div>
</div>

<!-- Movie Poster - Lady Bird -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/LadyBird.jpeg" alt="Lady Bird" class="poster-image">
    <a href="https://www.youtube.com/watch?v=cNi_HC839Wo&ab_channel=A24" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Lady Bird</h3>
      <p class="movies-description">2017 ‧ Drama/Comedy ‧ 1h 34m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Lady Bird (2017)</h2>
    <p>
      In 2002, an artistically inclined high-school senior in Sacramento, California, who is on a quest to find herself,
      struggles with her turbulent relationship with her strong-willed mother.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Greta Gerwig</p>
      <p><strong>Writers:</strong> Greta Gerwig</p>
      <p><strong>Stars:</strong> Saoirse Ronan, Laurie Metcalf, Tracy Letts</p>
    </div>
  </div>
</div>

<!-- Movie Poster - Shutter Island -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/ShutterIsland.jpg" alt="Shutter Island" class="poster-image">
    <a href="https://www.youtube.com/watch?v=5iaYLCiq5RM&ab_channel=ParamountPictures" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Shutter Island</h3>
      <p class="movies-description">2010 ‧ Thriller/Mystery ‧ 2h 18m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Shutter Island (2010)</h2>
    <p>
      U.S. Marshal Teddy Daniels investigates the disappearance of a patient from a hospital for the criminally insane located
      on an isolated island. As he digs deeper, his investigation reveals shocking truths.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Martin Scorsese</p>
      <p><strong>Writers:</strong> Dennis Lehane (novel), Laeta Kalogridis (screenplay)</p>
      <p><strong>Stars:</strong> Leonardo DiCaprio, Mark Ruffalo, Ben Kingsley</p>
    </div>
  </div>
</div>

<!-- Movie Poster - Before Sunrise -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/BeforeSunrise.jpg" alt="Before Sunrise" class="poster-image">
    <a href="https://www.youtube.com/watch?v=25v7N34d5HE&ab_channel=RottenTomatoesIndie" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Before Sunrise</h3>
      <p class="movies-description">1995 ‧ Romance/Drama ‧ 1h 41m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Before Sunrise (1995)</h2>
    <p>
      A young man and woman meet on a train in Europe and wind up spending one evening together in Vienna. They talk,
      walk around the city, and get to know each other, unsure if they will ever meet again.
    </p>
    <div class="movie-details">
      <p><strong>Director:</strong> Richard Linklater</p>
      <p><strong>Writers:</strong> Richard Linklater, Kim Krizan</p>
      <p><strong>Stars:</strong> Ethan Hawke, Julie Delpy</p>
    </div>
  </div>
</div>

<!-- Movie Poster - Kung Fu Panda -->
<div class="movie-container">
  <div class="movies-poster">
    <img src="image/KungFuPanda.jpeg" alt="Kung Fu Panda" class="poster-image">
    <a href="https://www.youtube.com/watch?v=PXi3Mv6KMzY&ab_channel=UniversalPictures" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">Kung Fu Panda</h3>
      <p class="movies-description">2008 ‧ Animation/Action ‧ 1h 32m</p>
    </div>
  </div>

  <div class="movie-information">
    <h2>Kung Fu Panda (2008)</h2>
    <p>
      In the Valley of Peace, a lazy panda named Po is unexpectedly chosen to become the Dragon Warrior, the legendary
      defender of the valley. Po must prove himself and learn the ways of Kung Fu to defeat the evil snow leopard, Tai Lung.
    </p>
    <div class="movie-details">
      <p><strong>Directors:</strong> John Stevenson, Mark Osborne</p>
      <p><strong>Writers:</strong> Jonathan Aibel, Glenn Berger</p>
      <p><strong>Stars:</strong> Jack Black, Dustin Hoffman, Angelina Jolie</p>
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