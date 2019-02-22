removed codes


       <li class="treeview <?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span> Manage FAQ</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('add-news') ?>" <?php if ($data["page"] == 'Add News') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> Add FAQ</a>
                     </li>
                     <li><a href="<?php echo url('view-news'); ?>" <?php if ($data["page"] == 'View News' || $data["page"] == 'Edit News') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> View/Edit FAQ</a>
                     </li>
                  </ul>
               </li>


deleted from add page, faq section

