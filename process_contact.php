<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    $google_form_url = 'https://docs.google.com/forms/u/0/d/e/1FAIpQLSfmT0o44eKct3J3AAm0WuILwumF9RoF5jool7Bgsp3PPHtMsw/formResponse';

    $post_data = [
        'entry.1943647751' => $name,
        'entry.1080717091' => $email,
        'entry.1687413372' => $message,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $google_form_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo "Quote request submitted successfully!";
} else {
    echo "Invalid request method";
}
?>
