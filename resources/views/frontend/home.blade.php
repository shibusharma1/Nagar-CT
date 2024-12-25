<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nagar-CT | Home</title>
  <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/images/home/logo1.png') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/home.css')}}" />
</head>

<body>
  <!-- Header Section -->
  <header class="ev-header-section text-center text-white py-2">
    <div class="container">
      <div class="row p-0 align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="container">
            <h1>Book Your EV Anytime, Anywhere</h1>
            <p>
              With <strong>Nagar-CT</strong>, you can conveniently book electric vehicles at your doorstep.
            </p>
            <div class="mt-5">
              <button class="btn">
                <a href="index.html"><img src="{{ asset('assets/images/home/playstore.png')}}"
                    alt="Download Nagar-CT from Play Store" /></a>
              </button>
              <button class="btn">
                <a href="index.html"><img src="{{ asset('assets/images/home/appstore.png')}}"
                    alt="Download Nagar-CT from App Store" /></a>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="ev-image-container">
            <img src="{{ asset('assets/images/home/logo2.png')}}" alt="Electric Vehicle Illustration" width="600px"
              height="600px" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Footer Section -->
  <footer class="ev-footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 text-center text-md-start ev-footer-content">
          <p class="mb-0 ev-footer-text">
            2024 &copy; Copyright <strong>Nagar-CT</strong> <br />
          </p>
          <p class="mb-0 ev-footer-text">
            Designed and Developed by <strong>Himalaya Darshan College</strong>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>