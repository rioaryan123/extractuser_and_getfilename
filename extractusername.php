<?php
function extractUserNameFromEmail($email)
{
    // Split the email ID at the "@" symbol
    $parts = explode('@', $email);

    // Return the part before the "@" symbol (the user name)
    return $parts[0];
}

// Sample email ID
$email = 'budi@mhs.pelitabangsa.ac.id';

// Extract the user name
$userName = extractUserNameFromEmail($email);

// Output the result
echo "User name: $userName";
?>
