<?php
// Start session
session_start();

// Check if user is logged in
$is_logged_in = isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;

// If not logged in, redirect to login page
if (!$is_logged_in) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Tools Guide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-utensils"></i> Kitchen Tools Guide</h1>
            <p class="tagline">Discover how to properly use, clean, and maintain your kitchen equipment</p>
            <div class="search-box">
                <input type="text" id="search-input" placeholder="Search for tools, appliances, or categories...">
                <button id="search-button"><i class="fas fa-search"></i> Search</button>
                <!-- Real-time search results container -->
                <div id="search-results"></div>
            </div>
            <div class="user-info">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </header>

    <main class="container">
        <!-- Features section -->
        <section class="app-features">
            <div class="feature">
                <i class="fas fa-search"></i>
                <h3>Find Specific Tools</h3>
                <p>Search by name or category to find detailed information</p>
            </div>
            <div class="feature">
                <i class="fas fa-book"></i>
                <h3>Usage Instructions</h3>
                <p>Learn proper techniques with clear step-by-step guides</p>
            </div>
            <div class="feature">
                <i class="fas fa-utensil-spoon"></i>
                <h3>Recipe Integration</h3>
                <p>Discover recipes that make the most of your kitchen tools</p>
            </div>
            <div class="feature">
                <i class="fas fa-broom"></i>
                <h3>Cleaning Guides</h3>
                <p>Learn how to properly clean and maintain your tools</p>
            </div>
            <div class="feature">
                <i class="fas fa-wrench"></i>
                <h3>Troubleshooting</h3>
                <p>Find solutions to common issues and problems</p>
            </div>
        </section>

        <div class="main-content">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="categories-section">
                    <h2><i class="fas fa-list"></i> Categories</h2>
                    <ul id="category-list">
                        <!-- Categories will be loaded dynamically -->
                    </ul>
                </div>
                
                <div class="popular-tools">
                    <h2><i class="fas fa-star"></i> Popular Tools</h2>
                    <div id="popular-tools-list">
                        <!-- Popular tools will be loaded dynamically -->
                    </div>
                </div>
                
                <div class="app-info">
                    <h3>About This App</h3>
                    <p>This app helps you maximize your kitchen equipment's potential, improve cooking skills, reduce accidents, and extend the lifespan of your tools.</p>
                    <p>Select any tool to view detailed usage instructions, maintenance guidelines, recipes, and troubleshooting tips.</p>
                </div>
            </aside>

            <!-- Main content area -->
            <div class="content">
                <div id="home-view">
                    <h2 class="section-title"><i class="fas fa-th-large"></i> Recent Additions</h2>
                    <div id="recent-tools" class="tools-mini-grid">
                        <!-- Recent tools will be loaded dynamically -->
                    </div>
                    
                    <h2 class="section-title"><i class="fas fa-th-large"></i> All Kitchen Tools</h2>
                    <div class="tools-controls">
                        <span id="tools-count">0 tools found</span>
                        <div class="sort-filter">
                            <select id="sort-tools">
                                <option value="name-asc">Name (A-Z)</option>
                                <option value="name-desc">Name (Z-A)</option>
                                <option value="category">Category</option>
                            </select>
                        </div>
                    </div>
                    <div id="tools-grid">
                        <!-- Tools will be loaded dynamically -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Tool details modal -->
    <div id="tool-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="tool-details">
                <!-- Tool details will be loaded dynamically -->
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Kitchen Tools Guide</h3>
                    <p>Your complete resource for kitchen tool usage, maintenance, and troubleshooting.</p>
                </div>
                <div class="footer-section">
                    <h3>Categories</h3>
                    <ul id="footer-categories">
                        <!-- Top categories will be shown here -->
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#" id="view-all-tools">All Tools</a></li>
                        <li><a href="#" id="view-popular">Popular Tools</a></li>
                        <li><a href="#" id="view-recent">Recent Additions</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Kitchen Tools Guide</p>
            </div>
        </div>
    </footer>

    <script src="app.js"></script>
</body>
</html>
