<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?=base_url('assets/templates/images/user.png')?>" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">Menu Utama</li>
            <li class="active">
                <a href="<?=base_url('kampus')?>">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">text_fields</i>
                    <span>Data Kampus</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?=base_url('kampus/data_mahasiswa')?>">Mahasiswa</a>
                    </li>
                    <li>
                        <a href="<?=base_url('kampus/data_dosen')?>">Dosen</a>
                    </li>
                    <li>
                        <a href="<?=base_url('kampus/data_prodi')?>">Prodi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="material-icons">layers</i>
                    <span>Data Akademik</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?=base_url('kampus/data_kelas')?>">Kelas</a>
                    </li>
                    <li>
                        <a href="<?=base_url('kampus/data_krs')?>">KRS</a>
                    </li>
                </ul>
            </li>

            <li class="header">Pengolahan</li>
              <li>
                  <a href="javascript:void(0);"  class="menu-toggle">
                      <i class="material-icons col-red">donut_large</i>
                      <span>System</span>
                  </a>
                  <ul class="ml-menu">
                    <li>
                        <a href="<?=base_url('kampus/wali_kelas')?>">Wali Kelas</a>
                    </li>
                    <li>
                        <a href="<?=base_url('kampus/import_data')?>">Import Data Mahasiswa</a>
                    </li>
                    <li>
                        <a href="<?=base_url('kampus/import_data_dosen')?>">Import Data Dosen</a>
                    </li>
                  </ul>
              </li>

            <li>
              <a href="<?=base_url('kampus/logout')?>" >
                  <i class="material-icons">view_list</i>
                  <span>Logout</span>
              </a>
            </li>

            <li class="header">Akhir Menu</li>
            <!--
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-amber">donut_large</i>
                    <span>--------------</span>
                </a>
            </li>
          -->
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal text-center">
        <div class="copyright">
            &copy; 2016 <a href="">PASIM </a>
        </div>
    </div>
    <!-- #Footer -->
</aside>
