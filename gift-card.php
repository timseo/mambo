<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<!-- Import head file -->
<?php require './components/head.php'; ?>

<body>

  <!-- Import loader file -->
  <?php require './components/loader.php'; ?>

  <div id="pagewrap" class="pagewrap">
    <div id="html-content" class="wrapper-content">

      <!-- import header file -->
      <?php require './components/header.php'; ?>

      <div class="page-container">

        <div class="top-header top-bg-parallax">
          <div data-parallax="scroll" data-image-src="assets/images/slider/mambo-slider.jpg" class="slides parallax-window">
            <div class="slide-content slide-layout-02">
              <div class="container">
                <div class="slide-content-inner">
                  <center>
                    <iframe width="100%" height="850" id="loopz-card-purchase" src="https://my.loopz.io/card-checkout/0f524d59-19c9-4bb1-b8d0-d5d5d1087a38?primaryColor=#3f51b5&accentColor=#ff8a65" style="border-width: 0px; min-width:300px;"></iframe>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <!-- import footer file -->
      <?php require './components/footer.php'; ?>

      <a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </div>

  <!-- import scripts file -->
  <?php require './components/scripts.php'; ?>
  
</body>

</html>