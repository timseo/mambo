<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<!-- Import head file -->
<?php require './components/head.php'; ?>

<body>
  <style type="text/css">
    .alert-me {
      margin-top: 10px;
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>

  <!-- Import loader file -->
  <?php require './components/loader.php'; ?>

  <div id="pagewrap" class="pagewrap">
    <div id="html-content" class="wrapper-content">

      <!-- import header file -->
      <?php require './components/header.php'; ?>

      <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-contact">
          <div class="container">
            <div class="title-wrapper">
              <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Contact Us</div>
              <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
              <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle"></div>
            </div>
          </div>
        </div>
        <div class="page-content-wrapper">
          <section class="ct-info-section padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-sm-12">
                  <div class="swin-sc swin-sc-title style-2 text-left">
                    <p class="title"><span>Get In Touch</span></p>
                  </div>
                  <div class="reservation-form style-02">
                    <div class="swin-sc swin-sc-contact-form light mtl style-full">
                      <form method="post" action="contact_form.php" id="cForm">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" placeholder="Name" class="form-control" name="username" required="true">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="text" placeholder="Email" class="form-control" name="email" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <div class="fa fa-phone"></div>
                            </div>
                            <input type="text" placeholder="Phone" class="form-control" name="phone" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <textarea placeholder="Message" class="form-control" name="message" required="true"></textarea>
                        </div>
                        <div class="form-group">
                          <div class="swin-btn-wrap"><button type="submit" class="swin-btn center form-submit"><span>Send</span></button></div>
                        </div>
                      </form>
                    </div>
                    <?php
                      if (isset($_SESSION['form_contact_state'])) {
                        echo '<p class="text-success message-succesfull-form">'. $_SESSION['form_contact_state'] . '</p>';
                        unset($_SESSION['form_contact_state']);
                      }
                    ?>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="swin-sc swin-sc-title style-2 text-left">
                    <p class="title"><span>Contact Info</span></p>
                  </div>
                  <div class="swin-sc swin-sc-contact">
                    <div class="media item">
                      <div class="media-left">
                        <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading title">Mambo Italian Street Food</h4>
                        <div class="description">2022 Powers Ferry Rd Ste 240 Atlanta GA 30339</div>
                      </div>
                    </div>

                    <div class="media item">
                      <div class="media-left">
                        <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading title">Phone Number</h4>
                        <div class="description">(770) 485-4026</div>
                      </div>
                    </div>
                    <div class="media item">
                      <div class="media-left">
                        <div class="wrapper-icon"><i class="icons fa fa-envelope"></i></div>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading title">Mail</h4>
                        <div class="description">
                          <p>mambostreet@gmail.com</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="map-section padding-bottom-100">
            <div class="container">
              <div id="map"></div>
            </div>
          </section>
        </div>
      </div>

      <!-- import footer file -->
      <?php require './components/footer.php'; ?>

      <a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </div>

  <!-- import scripts file -->
  <?php require './components/scripts.php'; ?>


  <!-- Own script to this page -->
  <script type="text/javascript">
    function goForm() {

      $('#cForm').ajaxSubmit({
        beforeSend: function() {

          $(".alert-me").remove();
          $(".swin-btn-wrap").append("<div class='alert alert-info alert-me'>Loading....</div>");

        },
        success: function(msg) {
          $(".alert-me").removeClass("alert-danger").removeClass("alert-info").addClass("alert-success").html(msg)
        },
        error: function(msg) {
          $(".alert-me").removeClass("alert-success").removeClass("alert-info").addClass("alert-danger").html("Please fill in all Fields!")
        }
      });
    }
  </script>

</body>

</html>