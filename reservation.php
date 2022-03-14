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
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
          <div class="container">
            <div class="title-wrapper">
              <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Reservations</div>
              <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
              <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle"></div>
            </div>
          </div>
        </div>
        <div class="page-content-wrapper">
          <section class="section-reservation-form padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2">
                  <h3 class="title"><span>Reservation Form</span></h3>
                </div>
                <div class="reservation-form">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <p class="reservation-form-title text-center">We will be happy to find you a table here at Mambo please give us some info so we can best serve you. We can also be reached by phone at:<span class="text-default"> (770) 485-4026</span></p>
                    </div>
                  </div>
                  <div class="swin-sc swin-sc-contact-form light mtl">

                    <form method="post" action="reservation_script.php" id="iForm">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type="text" placeholder="Name" class="form-control" required="true" name="username">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                          <input type="email" placeholder="Email" class="form-control" name="email" required="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <div class="fa fa-phone"></div>
                          </div>
                          <input type="text" placeholder="Phone" class="form-control" required="true" name="phone" required>
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-male"></i></div>
                          <select type="text" placeholder="People" class="form-control" name="people">
                            <option>1 person</option>
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                            <option>6 People</option>
                            <option>7 People</option>
                            <option>8 People</option>
                            <option>9 People</option>
                            <option>10 People</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          <input type="text" placeholder="Date" class="form-control datepicker" name="date" required="true">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <div class="fa fa-clock-o"></div>
                          </div>
                          <select type="text" placeholder="Time" class="form-control" name="time">

                            <option>11:00 AM</option>
                            <option>11:15 AM</option>
                            <option>11:30 AM</option>
                            <option>11:45 AM</option>
                            <!-- <option>12:00 AM</option>
                            <option>12:15 AM</option>
                            <option>12:30 AM</option>
                            <option>12:45 AM</option> -->
                            <option>1:00 PM</option>
                            <option>1:15 PM</option>
                            <option>1:30 PM</option>
                            <option>1:45 PM</option>
                            <option>2:00 PM</option>
                            <option>2:15 PM</option>
                            <option>2:30 PM</option>
                            <option>2:45 PM</option>
                            <option>3:00 PM</option>
                            <option>3:15 PM</option>
                            <option>3:30 PM</option>
                            <option>3:45 PM</option>
                            <option>4:00 PM</option>
                            <option>4:15 PM</option>
                            <option>4:30 PM</option>
                            <option>4:45 PM</option>
                            <option>5:00 PM</option>
                            <option>5:15 PM</option>
                            <option>5:30 PM</option>
                            <option>5:45 PM</option>
                            <option>6:00 PM</option>
                            <option>6:15 PM</option>
                            <option>6:30 PM</option>
                            <option>6:45 PM</option>
                            <option>7:00 PM</option>
                            <option>7:15 PM</option>
                            <option>7:30 PM</option>
                            <option>7:45 PM</option>
                            <option>8:00 PM</option>
                            <option>8:15 PM</option>
                            <option>8:30 PM</option>
                            <option>8:45 PM</option>
                            <option>9:00 PM</option>
                            <option>9:15 PM</option>
                            <option>9:30 PM</option>
                            <option>9:45 PM</option>
                            <option>10:00 PM</option>
                            <option>10:15 PM</option>
                            <option>10:30 PM</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="swin-btn-wrap center"><button type="submit" class="swin-btn center form-submit"> <span>Book Table</span></button></div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- <div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div> -->
              </div>
            </div>
          </section>

          <!-- <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2 light">
                    <h3 class="title"><span>Fooday Best Service</span></h3>
                  </div>
                  <div class="swin-sc swin-sc-iconbox light">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item icon-box-02 wow fadeInUpShort">
                          <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                          <h4 class="title">Reservation</h4>
                          <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                          <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                          <h4 class="title">Private Event</h4>
                          <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                          <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                          <h4 class="title">Online Order</h4>
                          <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                        <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                          <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                          <h4 class="title">Fast Delivery</h4>
                          <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

        </div>
      </div>

      <!-- import footer file -->
      <?php require './components/footer.php'; ?>

      <a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </div>

  <!-- import scripts file -->
  <?php require './components/scripts.php'; ?>

  <script src="https://malsup.github.com/jquery.form.js"></script>
  <style type="text/css">
    .alert-me {
      margin-top: 10px;
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>
  <script type="text/javascript">
    $('#iForm').ajaxForm({
      beforeSend: function() {

        $(".alert-me").remove();
        $(".swin-btn-wrap").append("<div class='alert alert-info alert-me'>Loading....</div>");

      },
      success: function(msg) {
        $(".alert-me").removeClass("alert-danger").removeClass("alert-info").addClass("alert-success").html(msg)
      },
      error: function(msg) {
        $(".alert-me").removeClass("alert-success").removeClass("alert-info").addClass("alert-danger").html("Try Again!")
      }
    });
  </script>
</body>

</html>