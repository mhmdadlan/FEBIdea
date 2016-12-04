@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row" id="projectHeader">
            <img class="img-responsive" src="images/overview-of-the-restaurant.jpg"/>
            <div class="col-sm-3" id="stats">
                <div class="row">
                    <div class="col-sm-2"><span class="fa fa-thumbs-o-up"></span></div>
                    <div class="sm-offset-1 col-sm-6"><p>Appreciations</p></div>
                    <div class="sm-offset-1 col-sm-2"><p>154</p></div>
                </div>
                <div class="row">
                    <div class="col-sm-2"><span class="fa fa-reply"></span></div>
                    <div class="sm-offset-1 col-sm-6"><p>Comments</p></div>
                    <div class="sm-offset-1 col-sm-2">35</div>
                </div>
                <div class="row">
                    <div class="col-sm-2"><span class="fa fa-eye"></span></div>
                    <div class="sm-offset-1 col-sm-6"><p>Views</p></div>
                    <div class="sm-offset-1 col-sm-2">1.2K</div>
                </div>
            </div>
            <div class="projectName">
                <h1>Ethan Stowell <span>Restaurant</span></h1>
                <h2>Big City Variety, Small Town Price.</h2>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="navbar navbar-static center-block" id="projectNavigation">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="active">Pitch</a></li>
                    <li><a href="project_business_details.html">Business Details</a></li>
                    <li><a href="project_marketing.html">Marketin & Sales</a></li>
                    <li><a href="project_management.html">Management Team & Personnel</a></li>
                    <li><a href="#">Financial Projections</a></li>
                </ul>
            </div>
        </div>
        <div class="row" id="pitchElevator">
            <div class="col-sm-3">
                <img src="images/MKBHD.jpg" alt="" class="img-responsive img-circle img-thumbnail center-block">
                <div class="userInfo">
                    <h3>Mohammed Adlan</h3>
                    <p><span class="fa fa-map-marker"></span> Sudan, Khartom</p>
                </div>
            </div>
            <div class="col-sm-7 text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-sm-2">
                <a href="#">
                    <img src="images/appr.png" class="img-responsive center-block" alt="">
                </a>
            </div>
            <img src="images/tri.svg" class="img-responsive" id="pointer"/>
        </div>
        <div class="row summery">
            <div class="col-sm-6">
                <div class="charts1" data-percent="55" data-color="#fe5c5d"><span
                            class="pie-value colorRed fa fa-dollar"></span>
                </div>
                <h1>Fund Needed/<span>Collected</span></h1>
                <button class="btn btn-danger">Details</button>
            </div>
            <div class="col-sm-6">
                <div class="charts2" data-percent="2" data-color="#29ceff"><span
                            class="pie-value colorBlue fa fa-money"></span>
                </div>
                <h1>Revenue/<span>Breakeven-point</span></h1>
                <button class="btn btn-danger">Details</button>
            </div>
        </div>

        <div class="row summery">
            <div class="col-sm-6">
                <div class="charts3" data-percent="55" data-color="#ffbb00"><span
                            class="pie-value colorYellow fa fa-bar-chart"></span>
                </div>
                <h1>Fund/<span>Marketing</span></h1>
                <button class="btn btn-danger">Details</button>
            </div>
            <div class="col-sm-6">
                <div class="charts4" data-percent="55" data-color="#87ab66"><span
                            class="pie-value colorGreen fa fa-users"></span>
                </div>
                <h1>Available/<span>Shortage</span></h1>
                <button class="btn btn-danger">Details</button>
            </div>
        </div>
    </div>
@endsection