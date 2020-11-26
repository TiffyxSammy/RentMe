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
        <a href="../index.php" class="logo">
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
        <h1 class="showcase-heading">House of Cards</h1>
        <h4 style="margin-left:40px; margin-right:60px; color:#696969;">Set in present-day Washington, D.C., House of Cards is the story of Frank Underwood (Kevin Spacey), a Democrat from South Carolina's 5th congressional district and the House Majority Whip, who, after getting passed over for appointment as Secretary of State, decides to exact his revenge on those who betrayed him.</h4>


    </section>
    <!--Top-10---------------------->
    <section style="margin-left:300px;">
        <iframe width="800" height="500" src="https://www.youtube.com/embed/SvSkxBYuoQY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    



    <!--footer------------------>
    <footer>
        <p>“Power is a lot like real estate. It’s all about location, location, location. The closer you are to the source, the higher your property value.”</p>
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
