<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiKey = 'DEIN_OPENAI_API_SCHLÜSSEL_HIER';
    $text = $_POST['text'];
    $url = 'https://api.openai.com/v1/audio/speech';
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    );
    $data = array(
        'model' => 'tts-1',
        'input' => $text,
        'voice' => 'alloy'
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200) {
        header('Content-Type: audio/mpeg');
        header('Content-Disposition: attachment; filename="speech.mp3"');
        echo $response;
    } else {
        http_response_code($httpCode);
        echo 'Fehler beim Erstellen der Sprachausgabe: ' . $response;
    }
}
?>
