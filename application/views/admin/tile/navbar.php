<!DOCTYPE html>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a id="dLabel" data-toggle="dropdown" data-target="#" href="#">
                        <i class="icon-cog"></i> Utility <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li><a href="<?php echo site_url('utilitas/listcode') ?>"><i class="icon-list-alt"></i> Listcode</a></li>  
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">User & Role</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('utilitas/user') ?>"><i class="icon-user"></i> User</a></li>
                                <li><a href="<?php echo site_url('utilitas/role') ?>"><i class="icon-asterisk"></i> Role</a></li>                        
                                <li><a href="<?php echo site_url('utilitas/right') ?>"><i class="icon-check"></i> Rights</a></li>  
                                <li><a href="<?php echo site_url('utilitas/modul') ?>"><i class="icon-tasks"></i> Modul</a></li>  
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a id="dLabel" data-toggle="dropdown" data-target="#" href="#">
                        Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li><a href="#">Some action</a></li>
                        <li><a href="#">Some other action</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Hover me for more options</a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Second level</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Even More..</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">3rd level</a></li>
                                        <li><a href="#">3rd level</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Second level</a></li>
                                <li><a href="#">Second level</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php //echo $this->session->userdata('username')?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user/preferences"><i class="icon-cogs"></i> Preferences</a></li>
                        <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('login/process_logout')?>"><i class="icon-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
