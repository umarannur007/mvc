  <!-- Full Page Intro -->
  <div class="view full-page-intro TopMargin">

  <!-- Full Page Intro -->
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold"><?= $this->title ?></h1>

            <hr class="hr-light">

            <p>
              <strong><?= $this->message ?></strong>
            </p>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form id="submit-me" action="">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Submit your record</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form3" name="firstname" class="form-control">
                    <label for="form3">Your First name</label>
                  </div>

                  <input type="hidden" name="formID" value="1">

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form3" name="lastname" class="form-control">
                    <label for="form3">Your Last name</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="form2" name="email" class="form-control">
                    <label for="form2">Your E-mail</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="number" id="form2" name="phone" class="form-control">
                    <label for="form2">Your Phone</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-calendar prefix grey-text"></i>
                    <input type="date" class="datepicker form-control" name="dob">
                    
                  </div>

                   <div class="md-form">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="Password" id="form6" class="form-control" name="password">
                    <label for="form6">Password</label>
                  </div>

                  <div class="md-form">
                    <i class="fa fa-map-marker prefix grey-text"></i>
                    <textarea type="text" id="form8" name="address" class="md-textarea"></textarea>
                    <label for="form8">Your Address</label>
                  </div>

                  <div class="md-form" id="responseDiv">
                  </div>

                  <div class="text-center">
                    <button class="btn btn-indigo" id="SubmitYou">Submit</button>
                    <hr>
                  </div>

                </form>
                <!-- Form -->
              </div>

            </div>

            <!--/.Card--> 
          </div>

          <!--Grid column-->
        </div>

        <!--Grid row-->
      </div>

      <!-- Content -->
    </div>

    <!-- Mask & flexbox options-->
  </div>

  <!-- Full Page Intro -->