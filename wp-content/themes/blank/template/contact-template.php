<?php
/* Template Name: CONTACT */
  get_header();
?>
<br>
<br>

<title>CONTACT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="http://localhost/ravenshoeshop/wp-content/themes/blank/template/css/contact-template.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container">
<div class="jumbotron mb-5 red">
    <h3 class="text-center ourprod">CONTACT US</h3>
</div>
</div>

<div class="container mb-5">

    <div class="row">

      <div class="col-md-12 col-lg-offset-3">


        <form id="contact-form" method="post" action="" role="form">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Firstname *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Lastname *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_phone">Phone</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
          </div>

        </div>

        </form>

      </div>

    </div>

  </div>

  <hr>
  <br>
  <br>

  <div class="container">
    <div class="jumbotron text-center red">
        <h3 class="ourprod">OUR LOCATION</h3>
      </div>
    </div>

    <div class="centermap">
      <!--Google map-->
      <div id="map-container-google-3" class="z-depth-1-half map-container-3">
        <iframe src="https://maps.google.com/maps?q=Diamond%20village%20dasmarinas&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
        </div>

    </div>
  </div>

  <br>
  <br>


<?php
  get_footer();
?>