@extends('layouts.main')
@section('content')
    <div class="container regPageContainer">
        <div class="col-sm-6">
            <div id="registerationFormConatiner" class="col-sm-11">
                <div class="registerationFormTitle clearfix">
                    <div class="col-sm-10">
                        <h2 class="titleHeading">Login to our site</h2>
                        <p>Enter username & password to log on.</p>
                    </div>
                    <div class="col-sm-2">
                        <i class="fa fa-key fa-4x"></i>
                    </div>
                </div>
                <div class="registerationFormContent">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" id="emailAddress" name="emailAddress" class="form-control"
                                   placeholder="Email Address" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="text" id="password" name="phoneNumber" class="form-control"
                                   placeholder="Password" value="">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="button" name="button">Login</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6 rightBorder">
            <div id="registerationFormConatiner" class="col-sm-11 col-sm-offset-1">
                <div class="registerationFormTitle clearfix">
                    <div class="col-sm-10">
                        <h2 class="titleHeading">Sign up now</h2>
                        <p>Fill in the Form Below to get instant access.</p>
                    </div>
                    <div class="col-sm-2">
                        <i class="fa fa-pencil-square-o fa-4x"></i>
                    </div>
                </div>
                <div class="registerationFormContent">
                    <div class="form-group">
                        <div class="radio-inline">
                            <label><input type="radio" name="type" value="">I'm an Individual</label>
                        </div>
                        <div class="radio-inline">
                            <label><input type="radio" name="type" value="">I'm a Company</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" id="fullName" name="fullName" class="form-control"
                                   placeholder="Full Name" value="">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" id="emailAddress" name="emailAddress" class="form-control"
                                   placeholder="Email Address" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">#</span>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                   placeholder="Phone Number" value="">
                        </div>
                    </div>
                    <p>
                        Buy Pressing the register button I agree to <a href="#">terms of use</a>.
                    </p>
                    <button class="btn btn-primary btn-block" type="button" name="button">Register</button>
                </div>
            </div>
        </div>
    </div>
@endsection