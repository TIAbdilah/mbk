<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a class="active" href="<?php echo site_url('master/home')?>">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="icon-list-alt"></i>
            <span>Master</span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo site_url('master/content')?>">Content</a></li>
            <li><a  href="<?php echo site_url('master/berita')?>">Berita</a></li>
        </ul>
    </li>
    
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="icon-list-alt"></i>
            <span>Master Peta</span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo site_url('master_peta/daerah')?>">Daerah</a></li>
        </ul>
    </li>

    <!--multi level menu start-->
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="icon-sitemap"></i>
            <span>Utility</span>
        </a>
        <ul class="sub">
            <li><a href="<?php echo site_url('utilitas/listcode') ?>"><i class="icon-list-alt"></i> Listcode</a></li>
            <li class="sub-menu">
                <a  href="#">User & Role</a>
                <ul class="sub">
                    <li><a href="<?php echo site_url('utilitas/user') ?>"><i class="icon-user"></i> User</a></li>
                    <li><a href="<?php echo site_url('utilitas/role') ?>"><i class="icon-asterisk"></i> Role</a></li>                        
                    <li><a href="<?php echo site_url('utilitas/right') ?>"><i class="icon-check"></i> Rights</a></li>  
                    <li><a href="<?php echo site_url('utilitas/modul') ?>"><i class="icon-tasks"></i> Modul</a></li>  
                </ul>
            </li>
        </ul>
    </li>
    <!--multi level menu end-->

</ul>