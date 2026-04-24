// Web Worker Script
// Runs in background thread without blocking the main page

let counter = 0;

function timedCount() {
    counter = counter + 1;
    
    // Send the counter value back to the main page
    postMessage(counter);
    
    // Call this function again after 500 milliseconds (0.5 seconds)
    setTimeout("timedCount()", 500);
}

// Start the counting
timedCount();
