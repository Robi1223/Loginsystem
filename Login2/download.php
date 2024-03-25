<?php
// Check if the filename parameter is set in the URL
if(isset($_GET['filename'])) {
    // Retrieve the filename from the URL
    $filename = $_GET['filename'];
    
    // Construct the file path based on the retrieved filename
    $filePath = 'C:/xampp/htdocs/Loginsystem/Login2/' . $filename . '.csv';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Set headers for file download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Length: ' . filesize($filePath));

        // Read and output the file contents
        readfile($filePath);
        exit;
    } else {
        // File not found, display an error message
        echo "File not found.";
    }
} else {
    // If filename parameter is not set, display an error message
    echo "Filename parameter is missing.";
}
?>


