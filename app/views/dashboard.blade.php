<?php
/**
 * Created by PhpStorm.
 * User: Anton Nikanorov
 * Date: 2/26/15
 * Time: 2:54 PM
 */
?>

@include('header')

<nav class="navbar navbar-inverse">

    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HamLog</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Edit Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout">LogOut</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</nav>

<div class="container">

    <div ng-controller="mainController">
        <tabset>

            <tab ng-controller="logController" heading="Log" active="tab.active" disabled="tab.disabled">

                <div class="container">

                    <div class="col-md-4">
                        <form class="log-form" ng-submit="addLog()">
                            <div class="row">
                                <input ng-model="log.callsign" class="callsign-fl" placeholder="CallSign">
                                <input ng-model="log.freq" class="freq-fl" placeholder="Frequency">
                            </div>

                            <div class="row">
                                <input ng-model="log.modulation" class="mod-fl" placeholder="Modes">
                                <input ng-model="log.qth" class="qth-fl" placeholder="QTH">
                            </div>

                            <div class="row">
                                <div class='input-group date' id='datetimepicker'>
                                    <input date-picker-custom ng-model="log.date" data-format="yyyy-MM-dd HH:mm:ss" class="form-control datetime-fl" placeholder="Date Time">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <textarea ng-model="log.comment" class="comment-fl" placeholder="Comment"></textarea>
                            </div>

                            <input class="btn btn-default" type="submit" value="Submit">
                        </form>
                    </div>


                    <div class="col-md-8">
                        <table>

                        </table>
                    </div>

                </div>

            </tab>

            <tab ng-controller="dxclrController" heading="DX Claster" active="tab.active" disabled="tab.disabled">
                 Test content
                <table>

                </table>
            </tab>


        </tabset>
    </div>
</div>


@include('footer')