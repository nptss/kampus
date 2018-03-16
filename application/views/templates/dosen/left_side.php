<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?=base_url('assets/templates/images/user.png')?>" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->userdata('nama_dosen')?></div>
            <div class="email"><?=$this->session->userdata('nidn')?></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li role="seperator" class="divider"></li>
                    <li><a href="<?=base_url('dosen/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
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
                <a href="<?=base_url('front_dosen/datacontrol')?>">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">text_fields</i>
                    <span>Data</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?=base_url('front_dosen/datacontrol/wali')?>">Mahasiswa Bimbingan</a>
                    </li>
                    <li>
                        <a href="<?=base_url('front_dosen/datacontrol/data_krs')?>">KRS Mahasiswa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="material-icons">layers</i>
                    <span>Permasalahan</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?=base_url('front_dosen/datacontrol/konsultasi')?>">Konsultasi</a>
                    </li>
                    <li>
                        <a href="<?=base_url('front_dosen/datacontrol/chating')?>">Chating</a>
                    </li>
                </ul>
            </li>

            <li class="header">Tentang Saya</li>
              <li>
                  <a href="javascript:void(0);"  class="menu-toggle">
                      <i class="material-icons col-red">donut_large</i>
                      <span>Biodata</span>
                  </a>
                  <ul class="ml-menu">
                    <li>
                        <a href="<?=base_url('front_dosen/datacontrol/data_diri')?>">Data diri</a>
                    </li>
                    <li>
                        <a href="<?=base_url('front_dosen/datacontrol/catatan_dosen')?>">Catatan Untuk Mahasiswa</a>
                    </li>
                  </ul>
              </li>

            <li>
              <a href="<?=base_url('dosen/logout')?>" >
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
