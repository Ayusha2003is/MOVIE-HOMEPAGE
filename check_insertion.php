<?php
// Include the connection script
require_once 'connect.php';

// Query to fetch movies from the Home table
$sql = "SELECT title, description, genre, release_year, duration, image_url, trailer_url FROM Home";
$result = $conn->query($sql);

// Start outputting HTML content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies in Database</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Movies in Database</h1>
    <?php
    // Check if movies exist in the database
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Title</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Release Year</th>
                <th>Duration</th>
                <th>Poster</th>
                <th>Trailer</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
            echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['release_year']) . "</td>";
            echo "<td>" . htmlspecialchars($row['duration']) . "</td>";
            echo "<td><img src='" . htmlspecialchars($row['image_url']) . "' alt='" . htmlspecialchars($row['title']) . "'></td>";
            echo "<td><a href='" . htmlspecialchars($row['trailer_url']) . "' target='_blank'>Watch Trailer</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No movies available in the database.</p>";
    }

    // Prepare to insert movies into the database
    foreach ($movies as $movie) {
        // Check for duplicates
        $checkStmt = $conn->prepare("SELECT COUNT(*) FROM Home WHERE title = ?");
        $checkStmt->bind_param("s", $movie['title']);
        $checkStmt->execute();
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();

        // Insert if no duplicate found
        if ($count === 0) {
            $stmt = $conn->prepare("
                INSERT INTO Home (title, description, genre, release_year, duration, image_url, trailer_url) 
                VALUES (?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->bind_param(
                "sssisss",
                $movie['title'],
                $movie['description'],
                $movie['genre'],
                $movie['release_year'],
                $movie['duration'],
                $movie['image_url'],
                $movie['trailer_url']
            );

            if ($stmt->execute()) {
                echo "Inserted: " . $movie['title'] . "\n";
            } else {
                echo "Error inserting " . $movie['title'] . ": " . $stmt->error . "\n";
            }
            $stmt->close();
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
