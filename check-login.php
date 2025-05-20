<?php
// Create a new PHP file named "check-login.php" in your root directory
// This will help verify all resources are loading correctly

header('Content-Type: text/html');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resource Check</title>
</head>
<body>
    <h2>Resource Loading Check</h2>
    <ul>
        <li>CSS: <span id="css-check">Checking...</span></li>
        <li>JavaScript: <span id="js-check">Checking...</span></li>
        <li>Font Awesome: <span id="fa-check">Checking...</span></li>
    </ul>

    <script>
        document.getElementById('js-check').textContent = 'Working!';
        
        // Check if CSS is loaded
        var linkElements = document.getElementsByTagName('link');
        var cssLoaded = false;
        for (var i = 0; i < linkElements.length; i++) {
            if (linkElements[i].href.indexOf('styles.css') > -1) {
                cssLoaded = true;
                break;
            }
        }
        document.getElementById('css-check').textContent = cssLoaded ? 'Loaded' : 'Not loaded';
        
        // Check Font Awesome
        var faLoaded = window.FontAwesome || document.querySelector('.fa, .fas, .far, .fab') !== null;
        document.getElementById('fa-check').textContent = faLoaded ? 'Loaded' : 'Not loaded';
    </script>
</body>
</html>