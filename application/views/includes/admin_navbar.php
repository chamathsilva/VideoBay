<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 8/30/15
 * Time: 4:55 PM
 */ ?>


<!-- Navigation -->
<nav id="adminnavbar" class="admin navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="admin navbar-header">
        <button type="button" class="admin navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="admin navbar-brand" href="index.html">UCSC VideoBay Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="admin nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>name</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i>time</p>
                                <p>massage</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>name</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i>time</p>
                                <p>masage 2</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>name</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> time</p>
                                <p>massage 3</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> AdminName <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../user/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id = "adminNav" class="admin nav navbar-nav side-nav">
            <li id = "345">
                <a href="../user/adminhome.php"><i class="fa fa-fw fa-dashboard" ></i> Dashboard</a>
            </li>
            <li>
                <!--remove for new upload test-->
                <a href="../uploadlessons/introduction.php"><i class="fa fa-fw fa-bar-chart-o"></i> add Lessons</a>
                <!-- Ajax part -->
                <!--<a href="addLessons.php"><i class="fa fa-fw fa-bar-chart-o"></i> add Lessons</a>-->
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-table"></i> Remove Lessons</a>
            </li>
            <li>
                <a href="../registration/api.php"><i class="fa fa-fw fa-edit"></i>Add Users</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-edit"></i>Remove Users</a>
            </li>
        </ul>



    </div>
    <!-- /.navbar-collapse -->



</nav>



