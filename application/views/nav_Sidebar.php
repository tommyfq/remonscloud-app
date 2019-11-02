<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="<?php if($active == "Dashboard"){ echo "active"; } ?>">
            <a class="" href="Dashboard">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="sub-menu <?php if($active == "Monitoring"){ echo "active"; } ?>">
            <a class="" href="Monitoring">
              <i class="icon_laptop"></i>
              <span>Monitoring</span>
            </a>
          </li>

          <li class="sub-menu <?php if($active == "Subscribe"){ echo "active"; } ?>">
            <a class="" href="Subscribe">
              <i class="icon_creditcard"></i>
              <span>Subscribe</span>
            </a>
          </li>

          <li class="sub-menu <?php if($active == "Export_Data"){ echo "active"; } ?>">
            <a class="" href="Export_Data">
              <i class="icon_documents"></i>
              <span>Export Data</span>
            </a>
          </li>

          <li class="sub-menu <?php if($active == "Perbandingan"){ echo "active"; } ?>">
            <a class="" href="Perbandingan">
              <i class="icon_datareport"></i>
              <span>Perbandingan</span>
            </a>
          </li>


          <li class="sub-menu <?php if($active == "Warning"){ echo "active"; } ?>">
            <a class="" href="Warning">
              <i class="icon_info_alt"></i>
              <span>Warning Monitoring</span>
            </a>
          </li>

          <li class="sub-menu <?php if($active == "List_Pengelola"){ echo "active"; } ?>">
            <a class="" href="List_Pengelola">
              <i class="icon_document"></i>
              <span>List Pengelola</span>
            </a>
          </li>

          <li class="sub-menu <?php if($active == "Pesan"){ echo "active"; } ?>">
            <a class="" href="Pesan">
              <i class="icon_comment_alt"></i>
              <span>Pesan</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->