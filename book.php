<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="./css/w3.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/book.css">
</head>

<body style="margin: 0; background: #8888888f;">
    <div class="w3-container w3-white">
        <div class="w3-row">
            <div class="w3-col l12 m12 s12 w3-padding">
                <header class="w3-center w3-margin-top">
                    <img src="./images/20250725_112042[1].png" alt="image" width="70px" height="70px"
                        style="border-radius: 50%;">
                    <h2 style="display: inline-block;"><b>Our Book Collections</b></h2>
                    <h5>Discover thousands of books across all geners and subjects. From literature<br>
                        to science textbook, find your next great read.</h5>
                </header>
                <div class="w3-row w3-center">
                    <div class="w3-col l4 m4 s12 w3-padding">
                        <input type="text" placeholder="Search books, author or subject"
                            class="w3-input w3-border w3-round-large">
                    </div>
                    <div class="w3-col l3 m3 s12 w3-padding">
                        <select name="rupees" id="" class="w3-input w3-border w3-round-large">
                            <option value="">select range of books</option>
                            <option value="">200Rs to 400Rs</option>
                            <option value="">400Rs to 1000Rs</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-row w3-padding">
        <div class="w3-col l12 m12 s12">
            <div class="w3-card w3-white w3-padding">
                <button id="btn-all" class="w3-button w3-round w3-border">All</button>
                <button id="btn-science" class="w3-button w3-round w3-border">Science</button>
                <button id="btn-poetry" class="w3-button w3-round w3-border">Poetry</button>
                <button id="btn-stories" class="w3-button w3-round w3-border">Stories</button>
                <button id="btn-novels" class="w3-button w3-round w3-border">Novels</button>
                <button id="btn-biographies" class="w3-button w3-round w3-border">Biographies</button>
            </div>
        </div>
    </div>
    <div class="book-card w3-card w3-white w3-padding w3-margin" data-category="science">
        <div class="w3-row">
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-purple">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Science1</b></h6>
                        <p>Name of Author</p>
                        <p><b>Chapter Name</b></p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-blue">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Science2</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-green">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Science3</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-black">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Science4</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="book-card w3-card w3-white w3-padding w3-margin" data-category="poetry">
        <div class="w3-row">
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-red">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Poetry1</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-pink">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Poetry2</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-red">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Poetry3</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-grey">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Poetry4</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="book-card w3-card w3-white w3-padding w3-margin" data-category="stories">
        <div class="w3-row">
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-blue">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Story1</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-purple">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Story2</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-blue">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Story3</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-green">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Story4</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="book-card w3-card w3-white w3-padding w3-margin" data-category="novels">
        <div class="w3-row">
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-black">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Novel1</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-green">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Novel2</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-grey">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Novel3</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-grey">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Novel4</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="book-card w3-card w3-white w3-padding w3-margin" data-category="biographies">
        <div class="w3-row">
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-orange">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Biography1</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-green">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Biography2</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-red">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Biography3</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
            <div class="w3-col l2 m2 s12 w3-padding">
                <div class="w3-card w3-border w3-padding w3-round-large w3-hover-blue">
                    <header>
                        <img src="./images/open.jpg" alt="no image" width="100%" height="100px">
                    </header>
                    <section class="w3-center">
                        <h6><b>Biography4</b></h6>
                        <p>Name of Author</p>
                        <p>Chapter Name</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container w3-black w3-padding w3-margin-top">
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
                    <h6><a href="home.html" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Home</a></h6>
                    <h6><a href="book.html" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            Books</a></h6>
                    <h6><a href="about.html" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
                            About</a></h6>
                    <h6><a href="contact.html" class="w3-text-grey w3-hover-text-blue" style="text-decoration: none;">
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
    <script src="./js/book.js"></script>
</body>

</html>