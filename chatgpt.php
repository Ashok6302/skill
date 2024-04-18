<?php
session_start();

// Assuming you have a users_details class to get user details
// Include any necessary files or define the users_details class here

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prompt = $_POST['prompt'];

        $model_engine = "text-davinci-003";

        // Use your OpenAI API key
        $api_key = "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";
        
        $data = array(
            'prompt' => $prompt,
            'max_tokens' => 1024,
            'n' => 1,
            'stop' => null,
            'temperature' => 0.5,
        );

        $headers = array(
            "Content-Type: application/json",
            "Authorization: Bearer $api_key",
        );

        $data_string = json_encode($data);

        $ch = curl_init("https://api.openai.com/v1/engines/$model_engine/completions");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response)->choices[0]->text;
        var_dump($response);
        $_SESSION['response'] = $response;
        header("Location: Query.php");
    }
} catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage();
}

?>
