<?php
include_once('config/db.php');
try {
    $absolutePath = "./migrations";

    // Use glob() to find all .sql files in the migrations folder (including subdirectories)
    $files = glob($absolutePath . DIRECTORY_SEPARATOR . "*.sql");

    // Loop through the files and execute only .sql files
    foreach ($files as $file) {
        // Read the SQL file content
        $sql = file_get_contents($file);

        // Split the SQL content by semicolon (;) to handle multiple queries
        $queries = explode(';', $sql);

        // Execute each query
        foreach ($queries as $query) {
            $query = trim($query); // Remove any leading or trailing whitespace
            if (!empty($query)) {
                try {
                    $pdo->exec($query); // Execute the query
                } catch (PDOException $e) {
                    echo "Error executing query in file $file: " . $e->getMessage() . "\n";
                }
            }
        }
    }


} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
