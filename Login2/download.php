<?php

if(isset($_GET['filename'])) {
    
    $filename = $_GET['filename'];
    
    
    $filePath = 'C:/xampp/htdocs/Loginsystem/Login2/' . $filename . '.csv';

    
    if (file_exists($filePath)) {
        
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Length: ' . filesize($filePath));

        
        readfile($filePath);
        exit;
    } else {
        
        echo "File not found.";
    }
} else {
    
    echo "Filename parameter is missing.";
}
?>


