<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 8/28/15
 * Time: 1:08 PM
 */
?>


<div class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">VideoBay</a>
                </div>
            </div>

            <div class="navbar-collapse collapse" id="navbar-collapsible">

                <div class="col-md-7 col-sm-4 ">
                    <div class="input-group" style="padding-top:10px;align-content: center;padding-left: 10px">
                        <input type="text" id="#innerU" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                         <button class="btn btn-default innerU" id="#innerU" type="button" style="height:33px;">Go!</button>
                        </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="userhome.php">Home</a></li>
                        <li><a href="settings.php"><i class="fa fa-cog"></i>Settings</a></li>
                        <li>&nbsp;</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../../public/images/profile%20pic.jpg" class="profile-image img-circle"> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="userprofile.php"><i class="fa fa-sign-out"></i> Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="changepassword.php"><i class="fa fa-cog"></i>Change password</a></li>
                                <li class="divider"></li>
                                <li><a href="update.php"><i class="fa fa-cog"></i>Change detail</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                                <li class="divider"></li>

                                <li><a href="#">Favorites</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    </div>






