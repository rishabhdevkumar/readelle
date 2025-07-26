<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHaven</title>
    <link rel="stylesheet" href="./css/w3.css">
    <link rel="stylesheet" href="./css/home.css">

</head>

<body>
    <div class="w3-top w3-black w3-container">
        <div class="w3-row w3-content" style="max-width:1200px; line-height:48px;">
            <div class="w3-col s6 m3 l2 w3-left-align">
                <header class="w3-xlarge w3-center">
                    <img src="./images/20250725_112042[1].png" alt="image" width="70px" height="70px"
                        style="border-radius: 50%;">
                    <h3
                        style="display: inline-block; font-family: AnandaBlackPersonalUseRegular-rg9Rx; color: #9bb6f0; margin-left: 10px;">
                        <b>Readelle</b>
                    </h3>
                </header>
            </div>
            <div class="w3-col s6 w3-right-align w3-hide-medium w3-hide-large">
                <button class="w3-black" style="border: none;" onclick="toggleMobileMenu()">☰</button>
            </div>
            <div class="w3-col m9 l10 w3-hide-small w3-padding">
                <div class="w3-center w3-container w3-margin-right">
                    <a href="home.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">Home</a>
                    <a href="book.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">Book</a>
                    <a href="about.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">About</a>
                    <a href="contact.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">Contact</a>
                    <div class="w3-dropdown-hover" style="float: right; margin-left: 10px;">
                        <a class="w3-hover-text-aqua w3-padding-small"
                            style="text-decoration: none; display: inline-block;">
                            Change Mode ▾
                        </a>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a href="#" onclick="setTheme('light')" class="w3-bar-item w3-button">Light Mode</a>
                            <a href="#" onclick="setTheme('dark')" class="w3-bar-item w3-button">Dark Mode</a>
                        </div>
                    </div>
                    <a href="login.php" class="w3-hover-text-aqua"
                        style="float: right; text-decoration: none; margin-right: 10px;">Login</a>
                    <a href="signup.php" class="w3-hover-text-aqua"
                        style="float: right; text-decoration: none; margin-right: 10px;">Start Reading</a>
                </div>
            </div>
        </div>
    </div>
    <div id="mobileNav" class="w3-bar-block w3-black w3-hide w3-hide-medium w3-hide-large w3-margin-top">
        <a href="home.php" class="w3-bar-item w3-button" style="padding-top: 60px;">Home</a>
        <a href="book.php" class="w3-bar-item w3-button">Book</a>
        <a href="about.php" class="w3-bar-item w3-button">About</a>
        <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
        <a href="login.php" class="w3-bar-item w3-button">Login</a>
        <a href="signup.php" class="w3-bar-item w3-button">Start Reading</a>
        <div class="w3-dropdown-click">
            <button onclick="toggleThemeDropdown()" class="w3-bar-item w3-button">Change Mode ▾</button>
            <div id="themeDropdown" class="w3-dropdown-content w3-bar-block w3-card-4 w3-white" style="display:none;">
                <a href="#" onclick="setTheme('light')" class="w3-bar-item w3-button">Light Mode</a>
                <a href="#" onclick="setTheme('dark')" class="w3-bar-item w3-button">Dark Mode</a>
            </div>
        </div>
    </div>
    <div>
        <img src="./images/library.jpg" width="100%" height="635px"
            style="object-fit: cover; filter: blur(1px); transform: scale(1);">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 635px;
              background-color: rgba(0, 0, 0, 0.295);">
        </div>
        <div class="w3-display-middle w3-center">
            <h1 class="w3-xxlarge w3-text-white read"><b>Welcome to<span style="font-family: AnandaBlackPersonalUseRegular-rg9Rx; 
            color: #9bb6f0;"> Readelle</span></b>
            </h1>
        </div>
    </div>
    <div class="w3-container w3-padding">
        <header class="w3-center">
            <h2 class="catagory"><b>Book Catagories</b></h2>
        </header>
        <div class="w3-row-padding w3-margin-top">
            <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-xlarge w3-center w3-padding w3-border" onclick="goToCategory('all')">
                    <i class="w3-xlarge w3-margin-bottom w3-text-blue w3-opacity 
                    w3-hover-opacity-off w3-margin-top w3-wide">&#128100;</i>
                    <h4><b>All</b></h4>
                    <p>All books for reading and learning.</p>
                </div>
            </div>
            <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-xlarge w3-center w3-padding w3-border" onclick="goToCategory('Poetry')">
                    <i class="w3-xlarge w3-margin-bottom w3-text-pink w3-opacity">&#127908;</i>
                    <h4><b>Poetry</b></h4>
                    <p>Poetry collections that touch the soul</p>
                </div>
            </div>
            <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-xlarge w3-center w3-padding w3-border" onclick="goToCategory('Stories')">
                    <i class="w3-xlarge w3-margin-bottom w3-text-teal w3-opacity">&#128214;</i>
                    <h4><b>Stories</b></h4>
                    <p>Short stories and fiction</p>
                </div>
            </div>
            <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-xlarge w3-center w3-padding w3-border" onclick="goToCategory('Novels')">
                    <i class="w3-xlarge w3-margin-bottom w3-text-brown w3-opacity">&#128218;</i>
                    <h4><b>Novels</b></h4>
                    <p>Popular novels and literary works</p>
                </div>
            </div>
            <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-xlarge w3-center w3-padding w3-border" onclick="goToCategory('Science')">
                    <i class="w3-xlarge w3-margin-bottom w3-text-green w3-opacity">&#9881;&#65039;</i>
                    <h4><b>Science</b></h4>
                    <p>Science and discovery books</p>
                </div>
            </div>
            <div class="w3-col l4 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-xlarge w3-center w3-padding w3-border"
                    onclick="goToCategory('Biographies')">
                    <i class="w3-xlarge w3-margin-bottom w3-text-blue w3-opacity 
                    w3-hover-opacity-off w3-margin-top w3-wide">&#128100;</i>
                    <h4><b>Biographies</b></h4>
                    <p>Biographies and real-life stories</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container w3-padding-64" id="features">
        <div class="w3-center w3-margin-bottom">
            <h2><b>Why Choose <span class="w3-text-green">Readelle</span>?</b></h2>
        </div>
        <div class="w3-row-padding w3-center">
            <div class="w3-col l3 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-large w3-padding w3-hover-shadow">
                    <div class="w3-xxlarge w3-margin-bottom">📖</div>
                    <h4><b>Vast Library</b></h4>
                    <p>books across fiction, non-fiction, and classics.</p>
                </div>
            </div>
            <div class="w3-col l3 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-large w3-padding w3-hover-shadow">
                    <div class="w3-xxlarge w3-margin-bottom">🎯</div>
                    <h4><b>Smart Recommendations</b></h4>
                    <p>AI-powered book suggestions tailored to your taste.</p>
                </div>
            </div>
            <div class="w3-col l3 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-large w3-padding w3-hover-shadow">
                    <div class="w3-xxlarge w3-margin-bottom">📱</div>
                    <h4><b>Cross-Platform</b></h4>
                    <p>Sync your reading progress across all your devices.</p>
                </div>
            </div>
            <div class="w3-col l3 m6 s12 w3-margin-bottom">
                <div class="w3-card w3-round-large w3-padding w3-hover-shadow">
                    <div class="w3-xxlarge w3-margin-bottom">👥</div>
                    <h4><b>Community</b></h4>
                    <p>Join clubs, share reviews & connect with fellow readers.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container w3-black w3-padding-32">
        <div class="w3-row-padding">
            <div class="w3-col s12 m3 l3">
                <h4 style="font-family: AnandaBlackPersonalUseRegular-rg9Rx; color: #9bb6f0;"><b>Readelle</b>
                </h4>
                <p class="w3-text-grey">Discover your next Favourite book in our<br> vast collection of stories,
                    knpwledge,<br> and Adventure</p>
            </div>
            <div class="w3-col s12 m3 l3">
                <h4><b>Quick Links</b></h4>
                <ul class="w3-ul">
                    <h6><a href="home.php" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Home</a></h6>
                    <h6><a href="book.php" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Books</a></h6>
                    <h6><a href="about.php" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            About</a></h6>
                    <h6><a href="contact.php" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Contact</a></h6>
                </ul>
            </div>
            <div class="w3-col s12 m3 l3">
                <h4><b>Categories</b></h4>
                <ul class="w3-ul">
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Fiction</a></h6>
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Non-Fiction</a></h6>
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Mystery</a></h6>
                </ul>
            </div>
            <div class="w3-col s12 m3 l3">
                <header>
                    <h4><b>Support</b></h4>
                </header>
                <ul class="w3-ul">
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">Help
                            Center</a></h6>
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">Privacy
                            Policy</a></h6>
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">Terms of
                            Service</a></h6>
                    <h6><a href="#" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">FAQ</a></h6>
                </ul>
            </div>
        </div>
    </div>
    <script src="./js/home.js"></script>
</body>

</html>