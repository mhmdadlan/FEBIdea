@extends('layouts.main')
@section('content')
    <header id="jumpotron">
        <div class="container">
            <h1 class="pageTitle">Explore Our <strong><i>Business Map</i></strong> Now!</h1>
            <h3 class="pageTitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. </h3>

            <div class="headerForm">
                <form class="form-inline" method="post" action="/explore">
                    <div class="form-group ">
                        <label class="sr-only" for="region">Email address:</label>
                        <select id="region" class="form-control selectMenu">
                            <option value="volvo">Select A Country</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group">
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
                        <button id="videoIntro" class="btn btn-default"><span class="fa fa-play"></span>Watch Intro
                        </button>
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
                    <p>Lorem ipsum text just fot testing the paragraph element and show what it's capable of that why
                        I'm
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
                    <p>Lorem ipsum text just fot testing the paragraph element and show what it's capable of that why
                        I'm
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
                        <p>This is some description for this element witch have to be hidden untile it gets hovered
                            on</p>
                    </div>
                </div>
                <div class="col-sm-4 bTab">
                    <img src="images/biz-new-small.jpg" alt="" class="img-responsive">
                    <div class="info">
                        <h3>Professional Services</h3>
                        <p>This is some description for this element witch have to be hidden untile it gets hovered
                            on</p>
                    </div>
                </div>
                <div class="col-sm-4 bTab">
                    <img src="images/biz-new-small.jpg" alt="" class="img-responsive">
                    <div class="info">
                        <h3>Professional Services</h3>
                        <p>This is some description for this element witch have to be hidden untile it gets hovered
                            on</p>
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
@endsection
