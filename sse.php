<?php
/**
 * Server-Sent Events (SSE) Script
 * Sends real-time updates to the browser
 * Run this on a PHP server (XAMPP/WAMP/MAMP)
 */

// Set the proper content type for SSE
header('Content-Type: text/event-stream');

// Prevent caching
header('Cache-Control: no-cache');

// Allow CORS (if needed for cross-origin requests)
header('Access-Control-Allow-Origin: *');

// Disable output buffering
ob_end_clean();

// Infinite loop to send updates
while (true) {
    // Get current server time
    $currentTime = date('H:i:s');
    
    // Send the message to the browser
    // Each message must start with "data:" and end with "\n\n"
    echo "data: Server time is: {$currentTime} - Automatic update from server\n\n";
    
    // Flush the output buffer to send immediately
    flush();
    
    // Wait 3 seconds before sending next update
    sleep(3);
}
?>
