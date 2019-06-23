<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$header_nav = "menu-item menu-item-type-custom menu-item-depth-0 megamenu-3-columns-group";

$header_nav_selected = "menu-item current-menu-item menu-item-has-children menu-item-depth-0 menu-item-simple-parent";

?>
 </style>
 
 <div id="primary-menu">
          <nav id="main-menu">
            <ul id="menu-header-menu" class="menu">
              <li class="<?php if($_SERVER['PHP_SELF'] == '/index.php'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>">Home</a><span class="arrow"> </span>
                <!--<ul class="sub-menu">
                  <li class="menu-item "><a href="#">Home Layout 2</a></li>
                  <li class="menu-item"><a href="#">Home Layout 3</a></li>
                  <li class="menu-item"><a href="#">Home Layout 4</a></li>
                </ul>!-->
              </li>
              <li class="<?php if($_GET['id'] == '1'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>category/1">Engineering <br /><span class="menu_small_txt">(Study Material)</span></a><span class="arrow"> </span>
			 <!--<li class="menu-item menu-item-type-custom menu-item-depth-0 megamenu-3-columns-group"><a href="coverage.php?id=1">Engineering</a><span class="arrow"> </span>!-->               
			   <!--<div class='megamenu-child-container'>
                  <ul class="sub-menu">
                    <li class="menu-item"><a href="#">II Column</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Fullwidth</a></li>
                        <li class="menu-item"><a href="#">With Right Sidebar</a></li>
                        <li class="menu-item"><a href="#">With Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="menu-item"><a href="#">III Column</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Fullwidth</a></li>
                        <li class="menu-item"><a href="#">With Right Sidebar</a></li>
                        <li class="menu-item"><a href="#">With Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="menu-item"><a href="#">IV Column</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Fullwidth</a></li>
                        <li class="menu-item"><a href="#">With Right Sidebar</a></li>
                        <li class="menu-item"><a href="#">With Left Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>!-->
              </li>
              <li class="<?php if($_GET['id'] == '2'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>category/2">Management <br /><span class="menu_small_txt">(Study Material)</span></a><span class="arrow"> </span>
                <!--<ul class="sub-menu">
                  <li class="menu-item"><a href="#">IDX Listing</a></li>
                  <li class="menu-item"><a href="#">IDX Single Listing</a></li>
                  <li class="menu-item"><a href="#">IDX Listing Shortcode</a></li>
                  <li class="menu-item"><a href="#">IDX Single Listing Shortcode</a></li>
                </ul>!-->
              </li>
              <li class="<?php if($_GET['id'] == '3'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>category/3">LITERATURE <br /><span class="menu_small_txt">(Collection)</span></a><span class="arrow"> </span>
					<!--<ul class="sub-menu">
                  <li class="menu-item"><a href="#">About Us</a></li>
                  <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">Header Types</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="#">Header Type 1</a></li>
                      <li class="menu-item"><a href="#">Header Type 2</a></li>
                      <li class="menu-item"><a href="#">Header Type 3</a></li>
                      <li class="menu-item"><a href="#">Header Type 4</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="#">Agents</a></li>
                  <li class="menu-item"><a href="#">Agencies</a></li>
                  <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">Property Types</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="#">Apartment</a></li>
                      <li class="menu-item"><a href="#">Building Area</a></li>
                      <li class="menu-item"><a href="#">Commercial</a></li>
                      <li class="menu-item"><a href="#">Condo</a></li>
                      <li class="menu-item"><a href="#">Cottage</a></li>
                      <li class="menu-item"><a href="#">Single Family</a></li>
                      <li class="menu-item"><a href="#">Villa</a></li>
                    </ul>
					li>
                  <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">Locations</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="#">Adelaide</a></li>
                      <li class="menu-item"><a href="#">Calgary</a></li>
                      <li class="menu-item"><a href="#">Cessnock</a></li>
                      <li class="menu-item"><a href="#">Helsinki</a></li>
                      <li class="menu-item"><a href="#">Melbourne</a></li>
                      <li class="menu-item"><a href="#">Sydney</a></li>
                    </ul>
                  </li>
                </ul>!-->
              </li>
              <li class="<?php if($_GET['id'] == '4'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>category/4">10+2 <br /><span class="menu_small_txt">(Study Material)</span></a><span class="arrow"> </span>
                <!--<div class='megamenu-child-container'>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">Shortcodes I</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Buttons</a></li>
                        <li class="menu-item"><a href="#">Tabs &#038; Toggles</a></li>
                        <li class="menu-item"><a href="#">Typography</a></li>
                        <li class="menu-item"><a href="#">Columns</a></li>
                        <li class="menu-item"><a href="#">Quotes</a></li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">Shortcodes II</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Dropcap</a></li>
                        <li class="menu-item"><a href="#">Highlighters</a></li>
                        <li class="menu-item"><a href="#">Fancy Boxes</a></li>
                        <li class="menu-item"><a href="#">Progress Bars</a></li>
                        <li class="menu-item"><a href="#">Icon Content</a></li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">Shortcodes III</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Carousels</a></li>
                        <li class="menu-item"><a href="#">Pricing Tables</a></li>
                        <li class="menu-item"><a href="#">Ordered Lists</a></li>
                        <li class="menu-item"><a href="#">Unordered Lists</a></li>
                        <li class="menu-item"><a href="#">Miscellaneous</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>!-->
              </li>
              <li class="<?php if($_GET['id'] == '6'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>category/6">Gyan Bhandar<br /><span class="menu_small_txt_new">New</span></a><span class="arrow"> </span>
                <!--<ul class="sub-menu">
                  <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">I Column</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="#">Without Sidebar</a></li>
                      <li class="menu-item"><a href="#">With Left Sidebar</a></li>
                      <li class="menu-item"><a href="#">With Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children menu-item-depth-1"><a href="#">II Column</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="#">Without Sidebar</a></li>
                      <li class="menu-item"><a href="#">With Left Sidebar</a></li>
                      <li class="menu-item"><a href="#">With Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>!-->
              </li>
              <!--<li class="<?php if($_GET['id'] == '7'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="#">Competitions+<br /><span class="menu_small_txt">(Coming Soon)</span></a><span class="arrow"> </span>
                
              </li>!-->
              <li class="<?php if($_SERVER['PHP_SELF'] == '/contactus'){ echo $header_nav_selected; }else{ echo $header_nav; } ?>"><a href="<?=SITE_SSL_PATH?>contactus">Contact</a><span class="arrow"> </span>
                <!--<ul class="sub-menu">
                  <li class="menu-item"><a href="#">Contact Layout 2</a></li>
                  <li class="menu-item"><a href="#">Contact Layout 3</a></li>
                </ul>!-->
              </li>
			  
            </ul>
          </nav>
          <!-- **Navigation - End** --> 
        </div>
      </div>