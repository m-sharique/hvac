<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $project_details = htmlspecialchars($_POST['project_details']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }
    
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

    echo "Quote request submitted successfully!";
} else {
    echo "Invalid request method";
}
?>