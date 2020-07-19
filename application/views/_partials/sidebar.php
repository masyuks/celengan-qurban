<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Celengan Qurban</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Home"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
            </li>
            <li class="menu-header">Main Menu</li>
            <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>ListMenu"><i class="far fa-square"></i> <span>List Menu</span></a></li>
             <li class="dropdown <?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Category</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Sapi">Sapi</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Kambing">Kambing</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Domba">Domba</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Unta">Unta</a></li>
              </ul>
            </li>
            <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">Article</a></li>
            <li class="<?php echo $this->uri->segment(2) == 'forms_editor' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Form_User"><i class="far fa-square"></i> <span>Form User</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'modules_datatables' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Riwayat_Transaksi"><i class="far fa-square"></i> <span>Riwayat Transaksi</span></a></li>
        </aside>
      </div>
