<?php

// URL of the Flask API
$api_url = 'http://127.0.0.1:5000/upload';

function magicsting($str) {
    echo "<pre>";
    print_r($str);
    echo "</pre>";
}

$Array_values = [[]];
$jsondata = $_REQUEST['jsondata'];
// magicsting($_REQUEST['jsondata']);
foreach (json_decode($jsondata) as $key => $value) {
    foreach ($value as $index => $element) {
        $Array_values[$key][$index] = $element;
    }
}


$json_data = [
    "data" => $Array_values,
    "fileName" => $_REQUEST['filename'] ?? "custom_filename.xlsx", // Optional: You can omit this field to auto-generate the filename
];

// Encode JSON data
$json_payload = json_encode($json_data);

// Set up cURL
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Decode and print the response
    $decoded_response = json_decode($response, true);
    print_r($decoded_response);

    // Download the Excel file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $decoded_response['fileName'] . '"');
    echo file_get_contents($decoded_response['downloadLink']);
}

// Close cURL session
curl_close($ch);

?>
