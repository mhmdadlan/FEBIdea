<nav class="navbar navbar-inverse navbar-fixed-top" id="navContainer">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">
                <img class="brand" src="images/logo.png"/>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="mainNav">
                <li><a href="explore">Explore</a></li>
                <li><a href="how">How It Works</a></li>
                <li><a href="posts">Posts</a></li>
                <li><a href="about">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right userNav">
                <li>
                    <div><img src="images/MKBHD.jpg" class="img-responsive"/></div>
                    <p>Hello, <a href="/profile">Mohammed</a></p>
                </li>

                <div class="dropdown">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                    class="fa fa-lightbulb-o"></span></a>
                        <ul class="dropdown-menu" id="projectsDropDown" role="menu" aria-labelledby="dropdownMenu">
                            <li class="dropdown-header">Notifications</li>
                            <li><a href="#">
                                    <div class="userImg"><img src="images/MKBHD.jpg" class="img-responsive"
                                                              alt="">
                                    </div>
                                    <div>
                                        <p>This is a notification from the user with the fav icon </p>
                                        <p><i>12:00 pm</i></p>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                </div>

                <div class="dropdown">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="fa fa-bell has-badge"></span>
                        </a>
                        <ul class="dropdown-menu" id="notifications" role="menu" aria-labelledby="dropdownMenu">
                            <li class="dropdown-header">Notifications</li>
                            <li><a href="#">
                                    <div class="userImg"><img src="images/MKBHD.jpg" class="img-responsive"
                                                              alt="">
                                    </div>
                                    <div>
                                        <p>This is a notification from the user with the fav icon </p>
                                        <p><i>12:00 pm</i></p>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                </div>

                <div class="dropdown">
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Manage Projects</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
