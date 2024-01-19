<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
// Read the GET parameter from the URL
$postcode = isset($_GET['search']) ? $_GET['search'] : '';

if (empty($postcode)) {
    // If the postcode is not provided, return an error response
    $response = array('error' => 'Postcode not provided');
} else {
    // Load the JSON data
    $json_data = file_get_contents('zipcode.json');
    
    if ($json_data === false) {
        // If unable to load JSON data, return an error response
        $response = array('error' => 'Unable to load postcode data');
    } else {
        // Decode the JSON data
        $data = json_decode($json_data, true);

        if (json_last_error() != JSON_ERROR_NONE) {
            // If JSON decoding fails, return an error response
            $response = array('error' => 'Error decoding JSON data');
        } else {
            // Search for the postcode in the JSON data
            $found = false;
            foreach ($data['state'] as $state) {
                foreach ($state['city'] as $city) {
                    foreach ($city['postcode'] as $code) {
                        if ($code == $postcode) {
                            $response = array('city' => $city['name'], 'state' => $state['name']);
                            $found = true;
                            break 3; // Break out of all loops
                        }
                    }
                }
            }

            if (!$found) {
                // If postcode not found, return an error response
                $response = array('error' => 'Postcode not found');
            }
        }
    }
}

// Return the response in JSON format
header('Content-Type: application/json');
echo json_encode($response);
?>
