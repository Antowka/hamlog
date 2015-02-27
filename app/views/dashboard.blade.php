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
                        <form class="log-form">
                            <input class="callsign-fl" placeholder="CallSign">
                            <input class="freq-fl" placeholder="Frequency">
                            <input class="datetime-fl" placeholder="Date Time">
                            <input class="qth-fl" placeholder="QTH">
                            <textarea class="comment-fl" placeholder="Comment"></textarea>
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