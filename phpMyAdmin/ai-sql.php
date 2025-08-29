<?php
header("Content-Type: application/json");

// Get input
$input = json_decode(file_get_contents("php://input"), true);
$prompt = $input["prompt"] ?? "";

if (!$prompt) {
    echo json_encode(["error" => "No prompt provided"]);
    exit;
}

// Replace with your actual API key
$apiKey = "AIzaSyBYhlDqoLiNAxS2Fn1v-DUFgYPt9B7FgQ4";
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . urlencode($apiKey);

// Prepare request payload
$data = [
    "contents" => [
        [
            "parts" => [
                [
                    "text" => "Convert this English request to a valid MySQL SQL query. 
                              Return only raw SQL without markdown, without ```sql, 
                              and without triple backticks:\n\n" . $prompt
                ]
            ]
        ]
    ]
];

// cURL request
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
    curl_close($ch);
    exit;
}
curl_close($ch);

// Decode response
$result = json_decode($response, true);

// Gemini API response format may vary — safest extraction:
$query = "";
if (isset($result["candidates"][0]["content"]["parts"][0]["text"])) {
    $query = $result["candidates"][0]["content"]["parts"][0]["text"];
} elseif (isset($result["candidates"][0]["output"])) {
    $query = $result["candidates"][0]["output"];
}

// Final output
echo json_encode([
    "query" => trim($query),
    "raw_response" => $result  // keep raw response for debugging
]);
?>
