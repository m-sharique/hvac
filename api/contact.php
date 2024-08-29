<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="eb.css">
  <title>Contact Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    .form-container {
      max-width: 90%;
      width: 75%;
      min-width: 80%;
      margin: 0 auto;
      padding: 20px;
      border-radius: 10px;
      background: linear-gradient(145deg, #ffffff, #e0e0e0);
      box-shadow:  9px 9px 40px #dbdbdb,
                  -9px -9px 40px #ffffff;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }

    #message,
    #project_details {
      resize: none;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/index">
      <img src="./images/logo.png" alt="EliteBreeze Logo" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link p-3" href="/index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="/aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="/blogs">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="/contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="form-container">
    <h1>Contact Us</h1>
    <form id="contactForm" method="POST" action="/process_contact">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="form-control">Send Message</button>
      </div>
    </form>
  </div>
    <br>
  <div class="form-container">
    <h1>Request a Quote</h1>
    <form id="quoteForm" method="POST" action="/process_quote">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="project_details">Project Details:</label>
        <textarea id="project_details" name="project_details" rows="4" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="form-control">Request Quote</button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer class="footer text-center mt-4">
    <p>&copy; 2024 EliteBreeze</p>
    <p><a href="mailto:musab.elitebreeze@gmail.com">Contact Us</a></p>
    <p>Follow us on:</p>
    <p>
      <a href="https://www.instagram.com/elitebreeze.mumbai?igsh=MWZmcnd4emJ1NWt2Nw==" target="_blank" class="me-2">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/company/elitebreezehvac/" target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </p>
  </footer>
</body>

</html>