<!DOCTYPE html>
<html>
<head>
    <title>Read XML File</title>
</head>
<body>

<h2>Book Details</h2>

<?php

$xmlFile = __DIR__ . "/books.xml";

if (!file_exists($xmlFile)) {
    die("Error: books.xml file not found.");
}

$xml = simplexml_load_file($xmlFile);

if ($xml === false) {
    die("Error: Unable to read XML file.");
}

echo "<table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Title</th>";
echo "<th>Author</th>";
echo "<th>Price</th>";
echo "</tr>";

foreach ($xml->book as $book) {
    echo "<tr>";
    echo "<td>" . $book->id . "</td>";
    echo "<td>" . $book->title . "</td>";
    echo "<td>" . $book->author . "</td>";
    echo "<td>₹" . $book->price . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>