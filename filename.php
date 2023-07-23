<?php
function getFilenameFromPath($path)
{
    // Use basename() to get the filename component from the path
    $filename = basename($path);

    // Remove any query parameters, if present
    $filename = strtok($filename, '?');

    return $filename;
}

// Sample path
$path = "https://informatika.pelitabangsa.ac.id/dosen/";

// Get the filename component
$filename = getFilenameFromPath($path);

// Output the result
echo "Filename: $filename";
?>
