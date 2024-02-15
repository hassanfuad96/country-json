<?php

// Set the content type to JSON
header('Content-Type: application/json');

// Enable CORS for all origins
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Your existing data
$data = [
    "categories" => [
        [
            "name" => "OTHER",
            "display_name" => "Other"
        ],
        [
            "name" => "AUTO",
            "display_name" => "Automotive"
        ],
        [
            "name" => "BEAUTY",
            "display_name" => "Beauty, spa, salon"
        ],
        [
            "name" => "APPAREL",
            "display_name" => "Clothing"
        ],
        [
            "name" => "EDU",
            "display_name" => "Education"
        ],
        [
            "name" => "ENTERTAIN",
            "display_name" => "Entertainment"
        ],
        [
            "name" => "EVENT_PLAN",
            "display_name" => "Event planning and service"
        ],
        [
            "name" => "FINANCE",
            "display_name" => "Finance and banking"
        ],
        [
            "name" => "GROCERY",
            "display_name" => "Food and groceries"
        ],
        [
            "name" => "GOVT",
            "display_name" => "Government"
        ],
        [
            "name" => "HOTEL",
            "display_name" => "Hotel and lodging"
        ],
        [
            "name" => "HEALTH",
            "display_name" => "Medical and health"
        ],
        [
            "name" => "NONPROFIT",
            "display_name" => "Charity, Non-profit"
        ],
        [
            "name" => "PROF_SERVICES",
            "display_name" => "Professional services"
        ],
        [
            "name" => "RETAIL",
            "display_name" => "Shopping & Retail"
        ],
        [
            "name" => "TRAVEL",
            "display_name" => "Travel and transportation"
        ],
        [
            "name" => "RESTAURANT",
            "display_name" => "Restaurant/Cafe"
        ]
        
    ]
];

// Merge the existing data with the new data
$data["categories"] = array_merge($data["categories"]);

// Convert the merged data to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Output the JSON data
echo $jsonData;
