@extends('layouts.main')

@section('content')
    <div id="mapWrapper">
        <div id="map" style="height: 500px; width: 500px"></div>
        <div id="mapFilter">
            <div id="filterFromContainer" class="pull-left">
                <div id="filterTitle" class="center-block">
                    <span class="fa fa-filter fa-2x"></span>
                    <h5>Map Filter</h5>
                </div>
                <div class="filterForm">
                    <div class="filterSection">
                        <label for="">What You Looking For ?</label>
                        <div class="input-group">
                            <div class="checkbox-inline">
                                <label>
                                    <input type="checkbox" name="userType" value="startup"> Sartup
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label>
                                    <input type="checkbox" name="userType" value="businessOwners"> Business Owners
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label>
                                    <input type="checkbox" name="userType" value="employees"> Employees
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="cbSection startup">
                        <div class="filterSection start">
                            <label for="amount1">Population Number:</label>
                            <input class="amount" type="text" id="amount" readonly
                                   style="border:0; color:#f6931f; font-weight:bold; background-color:transparent;">
                            <div class="slider-range"></div>
                        </div>
                        <div class="filterSection">
                            <label for="dropdown">Region:</label>
                            <select class="form-control" name="" onchange="filterMarkers(0, this.value);">
                                <option value="">Select a Region</option>
                                <option value="Europe">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="Africa">Africa</option>
                                <option value="Americas">Americas</option>
                                <option value="Oceania">Oceania</option>
                            </select>
                        </div>
                    </div>
                    <div class="cbSection businessOwners">
                        <div class="filterSection start">
                            <label for="amount1">Population Number:</label>
                            <input class="amount" type="text" id="amount" readonly
                                   style="border:0; color:#f6931f; font-weight:bold; background-color:transparent;">
                            <div class="slider-range"></div>
                        </div>
                        <div class="filterSection">
                            <label for="dropdown">Region:</label>
                            <select class="form-control" name="" onchange="filterMarkers(0, this.value);">
                                <option value="">Select a Region</option>
                                <option value="Europe">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="Africa">Africa</option>
                                <option value="Americas">Americas</option>
                                <option value="Oceania">Oceania</option>
                            </select>
                        </div>
                    </div>
                    <div class="cbSection employees">
                        <div class="filterSection start">
                            <label for="amount1">Population Number:</label>
                            <input class="amount" type="text" id="amount" readonly
                                   style="border:0; color:#f6931f; font-weight:bold; background-color:transparent;">
                            <div class="slider-range"></div>
                        </div>
                        <div class="filterSection">
                            <label for="dropdown">Region:</label>
                            <select class="form-control" name="" onchange="filterMarkers(0, this.value);">
                                <option value="">Select a Region</option>
                                <option value="Europe">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="Africa">Africa</option>
                                <option value="Americas">Americas</option>
                                <option value="Oceania">Oceania</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection