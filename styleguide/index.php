<?php
//================= CONTENT PAGE TEMPLATE =============

//Document root construction
$documentRoot = '';
$relativePath = '..';
$dynamicRootPath = $documentRoot.$relativePath;

//Modules
include $dynamicRootPath.'/modules/base-variables.php';

// Page-specific variables
$pageTitle = 'Styleguide';
$pageId = styleguide;
$pageDescription = "A spot to document all the design tokens and decisions for this site.";

 ?>

<!DOCTYPE html>
<html>

<?php include $dynamicRootPath.'/modules/head.php'; ?>
<?php include $dynamicRootPath.'/modules/header.php'; ?>

<body>
  <main>

    <section id='top-section' class='standard-top-section'>

      <h1><?php echo $pageTitle ?></h1>
      <p><?php echo $pageDescription; ?></p>

    </section>

    <section id='middle-section'>

      <article>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>

        <div class="container-space-between">
          <div class="color-swatch-container">
            <div class="color-swatch-large"></div>
            <p class="color-swatch-label">Color Swatch</p>
          </div>

        </div>
        <i class="material-icons mi-huge icon-branded">face</i>


      </article>

    </section>



  </main>
<?php include $dynamicRootPath.'/modules/footer.php'; ?>
</body>

</html>
