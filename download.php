<?php
if (isset($_GET['file'])) {
    // Prevent directory traversal
    $file = basename($_GET['file']);
    
    // Get the subfolder from the query
    $subfolder = dirname($_GET['file']); // 2025 or 2026

    $filepath = 'assets/eo/' . $subfolder . '/' . $file;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush();
        readfile($filepath);
        exit;
    } else {
        echo "File does not exist.";
    }
} else {
    echo "No file specified.";
}
?>

