<?php
// Specify the path to the file outside the web root (e.g., desktop)
$filePath = '\Users\HP\Desktop\twitter\tweets.csv';

// Set appropriate headers for download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));

// Read and output the file content
readfile($filePath);
exit;
?>
