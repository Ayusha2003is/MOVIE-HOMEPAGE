
<?php
session_start();
include("connect.php");

if (isset($_GET['movie_id']) && isset($_SESSION['email'])) {
    $movie_id = $_GET['movie_id'];
    $email = $_SESSION['email'];

    // Get the user ID from the email
    $query = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['id'];

        // Check if the movie is already in the watchlist
        $check_query = "SELECT * FROM watchlist WHERE user_id = '$user_id' AND movie_id = '$movie_id'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) == 0) {
            // Add the movie to the watchlist
            $insert_query = "INSERT INTO watchlist (user_id, movie_id) VALUES ('$user_id', '$movie_id')";
            mysqli_query($conn, $insert_query);

            // Redirect back to the watchlist page with a success message
            header("Location: MypersonalWatchlists.php?added=true");
            exit;
        } else {
            // Movie already in the watchlist
            header("Location: MypersonalWatchlists.php?added=false");
            exit;
        }
    }
}
?>
