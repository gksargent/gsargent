<header>

  <nav>
    <div class="brand-content">
      <div class="brand-mark">Greg Sargent</div>
      <!-- <div class="brand-slogan">Product Designer</div> -->
    </div><!-- end brand-content -->
    <ul>
      <li><a <?php if ($pageId == home) {echo "class='active-view'";} ?> href=<?php echo "$dynamicRootPath/";?>>Home</a></li>
      <li><a <?php if ($pageId == contact) {echo "class='active-view'";} ?> href=<?php echo "$dynamicRootPath/contact";?>>Contact</a></li>
      <li><a <?php if ($pageId == styleguide) {echo "class='active-view'";} ?> href=<?php echo "$dynamicRootPath/styleguide";?>>Styleguide</a></li>
    </ul>
  </nav>

</header>
