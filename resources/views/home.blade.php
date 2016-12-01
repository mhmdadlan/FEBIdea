<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FEBIdea</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="jumpotron">
    <nav class="navbar navbar-inverse navContainer" id="navContainer">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">
                    <img class="brand" src="images/logo.png"/>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right mainNav" id="mainNav">
                <li><a href="explore.html">Explore</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="posts.html">Posts</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="pageTitle">Explore Our <strong><i>Business Map</i></strong> Now!</h1>
        <h3 class="pageTitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. </h3>

        <div class="headerForm">
            <form class="form-inline" method="post" action="explore.html">
                <div class="form-group ">
                    <label class="sr-only" for="region">Email address:</label>
                    <select id="region" class="form-control selectMenu">
                        <option value="volvo">Select A Country</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-group" >
                    <label class="sr-only" for="region">Email address:</label>
                    <select id="field" class="form-control selectMenu">
                        <option value="volvo">Select A Field</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <button id="go" type="submit" class="btn btn-default">GO</button>
            </form>
            <div class="row">
                <a href="#myModal" data-toggle="modal">
                    <button id="videoIntro" class="btn btn-default"><span class="fa fa-play"></span>Watch Intro</button>
                </a>

                <!--
                Video Model
                -->

                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <iframe id="cartoonVideo" width="560" height="315"
                                        src="http://www.youtube.com/embed/PDWvcsTloJo" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                End Video Modal
                -->
                <button id="getStarted" class="btn btn-default">Get Started</button>
            </div>
        </div>
    </div>
</header>

<div class="container instructions">
    <div class="row">
        <section class="instructions_1">
            <div class="col-sm-5">
                <h2>Pitch Faster</h2>
                <p>Lorem ipsum text just fot testing the paragraph element and show what it's capable of that why I'm
                    writing this bullshit</p>
                <button class="btn btn-default btn-wide btn-instruction">Learn More</button>
            </div>
            <div class="col-sm-6 pull-right">
                <img src="images/pitch.png" class="img-responsive" alt="">
            </div>
        </section>
    </div>
    <div class="row">
        <section class="instructions_2">
            <div class="col-sm-6">
                <img src="images/responsive.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-5 pull-right">
                <h2>Access From All Devices</h2>
                <p>Lorem ipsum text just fot testing the paragraph element and show what it's capable of that why I'm
                    writing this bullshit</p>
                <button class="btn btn-default btn-wide btn-instruction">Learn More</button>
            </div>
        </section>
    </div>
</div>
<div class="container-fluid ">
    <div class="row businessType">
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1"></div>
            <div class="col-sm-4 bTab">
                <img src="images/biz-independent-contractor-small.jpg" height="170" width="325"/>
                <div class="info">
                    <h3>Pro
                        s</h3>
                    <p>This is some description for this element witch have to be hidden untile it gets hovered on</p>
                </div>
            </div>
            <div class="col-sm-4 bTab">
                <img src="images/biz-new-small.jpg" alt="" class="img-responsive">
                <div class="info">
                    <h3>Professional Services</h3>
                    <p>This is some description for this element witch have to be hidden untile it gets hovered on</p>
                </div>
            </div>
            <div class="col-sm-4 bTab">
                <img src="images/biz-new-small.jpg" alt="" class="img-responsive">
                <div class="info">
                    <h3>Professional Services</h3>
                    <p>This is some description for this element witch have to be hidden untile it gets hovered on</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row getStarted">
        <h1>Get Started With FEBIdea Today</h1>
        <button class="btn btn-success btn-wide">Sign Up</button>
    </div>
</div>

<footer>
    <div class="container">
        <h1 class="title">FEBIdea The Gateway For Creativity</h1>
        <p class="list">Home | How It Works | Explore | Posts | About</p>
        <p class="copyrights">All Rights Reserved © Febidea.com 2016</p>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script>

    if (screen.width <= 800) {
        window.location = "http://madlan.me/febidea/mobile.html";
    }
    document.getElementById("jumpotron").style.height = window.innerHeight + "px";

    function modal() {
        /* Get iframe src attribute value i.e. YouTube video url
         and store it in a variable */
        var url = $("#cartoonVideo").attr('src');

        /* Assign empty url value to the iframe src attribute when
         modal hide, which stop the video playing */
        $("#myModal").on('hide.bs.modal', function () {
            $("#cartoonVideo").attr('src', '');
        });

        $("#myModal").on('show.bs.modal', function () {
            $("#cartoonVideo").attr('src', url);
        });
        /* Assign the initially stored url back to the iframe src
         attribute when modal is displayed again */
        $("#myModal").on('show.bs.modal', function () {
            $("#cartoonVideo").attr('src', url);
        });
    }
    window.onload = function () {
        var bTab = document.getElementsByClassName("bTab");
        for (var i = 0; i < bTab.length; i++) {
            bTab[i].getElementsByTagName("p")[0].style.display = "none";
            bTab[i].onmouseover = function () {
                this.getElementsByTagName("p")[0].style.display = "block";
                this.getElementsByTagName("p")[0].top = "0";
            }
            bTab[i].onmouseout = function () {
                this.getElementsByTagName("p")[0].style.display = "none";
            }
        }
        modal();
    };
    $(".instruction").animate({"left":"50px"}, "slow");
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > window.innerHeight - 100) {
            $('.navbar').addClass('navbar-fixed-top');
            $('.navbar-fixed-top').animate({"top":"0"}, "slow");
            $('.navbar').removeClass('navContainer');
            $('#mainNav').removeClass('mainNav');

        } else {
            $('.navbar-fixed-top').animate({"top":"-100%"}, "slow");
            $('.navbar').removeClass('navbar-fixed-top');
            $('.navbar').addClass('navContainer');
            $('#mainNav').addClass('mainNav');

        }
    });
</script>
</body>
</html>
