<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Submission Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .status-container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            box-shadow: grey 2px 2px 10px;
            text-align: center;
            border-radius: 8px;
        }

        .status-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .status-container p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #666;
        }

        .status-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .status-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="status-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $phone = htmlspecialchars($_POST['phone']);
            $project_details = htmlspecialchars($_POST['project_details']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<h1>Submission Failed</h1>";
                echo "<p>Invalid email format. Please go back and try again.</p>";
            } else {
                $google_form_url = 'https://docs.google.com/forms/u/0/d/e/1FAIpQLSewr9Dzmoa86gQsgdlVx-gq-up3RjxQczF0KM7TBdvwcke4bg/formResponse';

                $post_data = [
                    'entry.1943647751' => $name,
                    'entry.1080717091' => $email,
                    'entry.1166974658' => $phone,
                    'entry.1687413372' => $project_details,
                ];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $google_form_url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($ch);
                curl_close($ch);

                echo "<h1>Submission Successful</h1>";
                echo "<p>Thank you for your submission, $name! We have received your project details and will get back to you soon.</p>";
            }
        } else {
            echo "<h1>Invalid Request</h1>";
            echo "<p>Your request could not be processed. Please try again.</p>";
        }
        ?>
        <a href="/contact">Go Back to Contact Page</a>
    </div>

</body>

</html>
