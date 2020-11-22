<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rent Me</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/lightslider.css" />
    <!--js-link-->
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
    <!--favicon-->
    <link rel="shortcut icon" href="favicon.jpg" />
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--navigation-------------->
    <nav>
        <!--logo--------------->
        <a href="index.php" class="logo">
            <img src="../images/favicon.jpg" />
        </a>
        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../movies.php">Movies</a></li>
            <li><a href="../tv_shows.php">TV Shows</a></li>
            <li><a href="../hangman.html">Hangman</a></li>
            <li><a href="../cart.php">Cart</a></li>
            <li><a href="../userAccount.php">Account</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <input type="text" placeholder="Search" />
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>
    <section id="main">
        <!--showcase----------------------->
        <!--heading------------->
        <h1 class="showcase-heading">Roswell</h1>
        <h4 style="margin-left:40px; margin-right:60px; color:#696969;">Living among the citizens of the infamous New Mexico city of Roswell are some who are not there by choice. They are there to follow a destiny given to them by the members of their dying race, a race that they are someday destined to save. This is the background behind the WB series "Roswell". Max Evans, Isabel Evans and Michael Guerin are teenage humans with extraordinary gifts - gifts that are "not-of-this-earth". They are human/alien hybrids, sent here to complete their destiny. Their counterparts have already perished in a war of attrition, thus one day, they will return to their home planet and save their race. Before a fateful day in 1999, the teens hid their gifts. The event that forever changed their lives was when Max healed Liz Parker (a classmate) after she was fatally shot in the stomach in a dispute between two customers at the restaurant where she waitresses. A close relationship then develops between Max and Liz. Central to the first season were the relationships between the hybrids and their human companions. That focus has shifted during the drama's second season. "Roswell" is now distinctly a science-fiction show built on the relationships between humans and aliens.</h4>


    </section>
    <!--Top-10---------------------->
    <section style="margin-left:300px;">
        <iframe width="800" height="500" src="https://www.youtube.com/embed/NoaR_ih9Q0M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    



    <!--footer------------------>
    <footer>
        <p>" Relax. God, you guys act like I've never tailed someone before."</p>
    </footer>
    <!--slider-script-->
    <script>
        $(document).ready(function () {
            $('#autoWidth,#autoWidth2').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function () {
                    $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
                }
            });
        });
    </script>
</body>

</html>
