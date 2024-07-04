<!-- top navigation -->
<div class="top_nav" style="background-color: #3498db; color: #ffffff;">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle" style="color: #ffffff;"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                        <img src="<?= base_url('build/img/profile/') . $user['image']; ?>" alt="Profile Image" style="width: 29px; height: 29px; border-radius: 50%; margin-right: 10px;">
                        <?= $user['name']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" style="background-color: #ffffff;">
                        <a class="dropdown-item" href="<?= base_url('user/profile') ?>" style="color: #333333;">Profile</a>
                        <a class="dropdown-item tbl-logout" href="<?= base_url('login/logout') ?>" style="color: #333333;"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
