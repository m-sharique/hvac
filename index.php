<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EliteBreeze | Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .grid-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px 0;
        }
        .grid-container .button {
            margin: 5px;
            width: 100%;
        }
        .logo img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .boxcontainer {
            margin-bottom: 20px;
        }
        .gallery {
            margin: 10px 0;
            text-align: center;
        }
        .gallery img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .desc {
            font-size: 1.1em;
            text-align: left;
        }
        .contact p {
            margin: 0;
        }
        .social-links a {
            margin-right: 10px;
            color: #333;
            font-size: 1.5em;
        }
        .social-links a:hover {
            color: #007bff;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
            margin-top: 30px;
        }
    </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">
      <img src="./images/logo.png" alt="EliteBreeze Logo" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link p-3" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="logo text-center">
    <img src="./images/logo.png" alt="EliteBreeze Logo">
  </div>

  <hr class="my-4">

  <div class="container">
    <div class="info">
      <div class="boxcontainer">
        <h3>Breathe Easy with EliteBreeze</h3>
        <p><b>Welcome to EliteBreeze, where comfort meets expertise.</b></p>
        <p>We understand that a comfortable living or working environment is essential, and we are committed to providing top-notch HVAC solutions that ensure you breathe easy, no matter the season. Serving the vibrant cities of Thane and Mumbai, EliteBreeze is your trusted partner for reliable, efficient, and expert HVAC services.</p>
      </div>

      <div class="boxcontainer">
        <h3>Why Choose EliteBreeze?</h3>
        <p>At EliteBreeze, we are driven by our passion for creating comfortable and healthy environments. Our brand essence, <b>"Expertise in Comfort"</b>, reflects our commitment to delivering exceptional HVAC services tailored to your unique needs. With a focus on innovation, quality, and customer satisfaction, we ensure that every project we undertake exceeds expectations.</p>
      </div>

      <div class="boxcontainer">
        <p><b>Experience Unparalleled Comfort:</b> Our HVAC solutions are designed to offer the highest level of comfort, combining cutting-edge technology with expert craftsmanship.</p>
        <p>Tailored Services: Whether you're a homeowner or a business, our services are customized to meet your specific requirements, ensuring optimal performance and energy efficiency.</p>
      </div>

      <div class="boxcontainer">
        <p><b>Ready to transform your space with EliteBreeze?</b> Contact us today to learn more about our services or to schedule a consultation. Experience the difference that expertise in comfort can make.</p>
      </div>
    </div>

    <div class="text-center">
      <h2 class="article">LATEST ARTICLE</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="gallery">
          <img src="./images/samplem1.jpeg" alt="5 reasons why HVAC IS NECESSARY">
          <div class="desc"><b>1-Enhanced Air Quality:</b><br> Improved indoor air quality is especially important for individuals with allergies, asthma, or other respiratory conditions, ensuring a healthier living environment.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery">
          <img src="./images/samplem2.jpeg" alt="5 reasons why HVAC IS NECESSARY">
          <div class="desc"><b>2- Extended Equipment Lifespan:</b><br> Investing in regular maintenance can delay the need for costly replacements, saving you money in the long run.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery">
          <img src="./images/installation.jpeg" alt="5 reasons why HVAC IS NECESSARY">
          <div class="desc"><b>3- Improved Energy Efficiency:</b><br> A well-maintained HVAC system consumes less energy, which translates to lower utility bills and reduced environmental impact.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery">
          <img src="./images/samplem4.jpeg" alt="5 reasons why HVAC IS NECESSARY">
          <div class="desc"><b>4-Reduced Risk of Breakdowns:</b><br> Fewer unexpected repairs mean less inconvenience and lower repair costs, as well as ensuring your system is reliable when you need it most.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="gallery">
          <img src="./images/samplem5.jpeg" alt="5 reasons why HVAC IS NECESSARY">
          <div class="desc"><b>5-Compliance with Manufacturer’s Warranty:</b><br> Regular maintenance keeps your warranty valid, giving you peace of mind and protection against unexpected expenses.</div>
        </div>
      </div>
    </div>

    <div class="contact mt-5">
      <h4>Contact Us Today:</h4>
      <p><b>Phone:</b> <a href="tel:9082947505">9082947505</a></p>
      <p><b>Email us:</b> <a href="mailto:musab.elitebreeze@gmail.com" class="email-link">musab.elitebreeze@gmail.com</a></p>
      <p><b>Location:</b> Serving Thane and Mumbai</p>
      <div class="social-links">
        <a href="https://www.instagram.com/elitebreeze.mumbai?igsh=MWZmcnd4emJ1NWt2Nw==" target="_blank" title="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/company/elitebreezehvac/" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </div>
  </div>

  <footer class="footer">
    <p>&copy; 2024 EliteBreeze</p>
    <p><a href="mailto:musab.elitebreeze@gmail.com">Contact Us</a></p>
    <p>Follow us on:
      <a href="https://www.instagram.com/elitebreeze.mumbai?igsh=MWZmcnd4emJ1NWt2Nw==" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/company/elitebreezehvac/" target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </p>
  </footer>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
