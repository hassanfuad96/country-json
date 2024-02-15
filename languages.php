<?php

// Set the content type to JSON
header('Content-Type: application/json');

// Enable CORS for all origins
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Your existing data
$data = [
    "languages" => [
        [
            "code" => "af",
            "display_name" => "Afrikaans"
        ],
        [
            "code" => "sq",
            "display_name" => "Albanian"
        ],
        [
            "code" => "ar",
            "display_name" => "Arabic"
        ],
        [
            "code" => "az",
            "display_name" => "Azerbaijani"
        ],
        [
            "code" => "bn",
            "display_name" => "Bengali"
        ],
        [
            "code" => "bg",
            "display_name" => "Bulgarian"
        ],
        [
            "code" => "ca",
            "display_name" => "Catalan"
        ],
        [
            "code" => "zh_CN",
            "display_name" => "Chinese (CHN)"
        ],
        [
            "code" => "zh_HK",
            "display_name" => "Chinese (HKG)"
        ],
        [
            "code" => "zh_TW",
            "display_name" => "Chinese (TAI)"
        ],
        [
            "code" => "hr",
            "display_name" => "Croatian"
        ],
        [
            "code" => "cs",
            "display_name" => "Czech"
        ],
        [
            "code" => "da",
            "display_name" => "Danish"
        ],
        [
            "code" => "nl",
            "display_name" => "Dutch"
        ],
        [
            "code" => "en",
            "display_name" => "English"
        ],
        [
            "code" => "en_GB",
            "display_name" => "English (UK)"
        ],
        [
            "code" => "en_US",
            "display_name" => "English (US)"
        ],
        [
            "code" => "et",
            "display_name" => "Estonian"
        ],
        [
            "code" => "fil",
            "display_name" => "Filipino"
        ],
        [
            "code" => "fi",
            "display_name" => "Finnish"
        ],
        [
            "code" => "fr",
            "display_name" => "French"
        ],
        [
            "code" => "ka",
            "display_name" => "Georgian"
        ],
        [
            "code" => "de",
            "display_name" => "German"
        ],
        [
            "code" => "el",
            "display_name" => "Greek"
        ],
        [
            "code" => "gu",
            "display_name" => "Gujarati"
        ],
        [
            "code" => "ha",
            "display_name" => "Hausa"
        ],
        [
            "code" => "he",
            "display_name" => "Hebrew"
        ],
        [
            "code" => "hi",
            "display_name" => "Hindi"
        ],
        [
            "code" => "hu",
            "display_name" => "Hungarian"
        ],
        [
            "code" => "id",
            "display_name" => "Indonesian"
        ],
        [
            "code" => "ga",
            "display_name" => "Irish"
        ],
        [
            "code" => "it",
            "display_name" => "Italian"
        ],
        [
            "code" => "ja",
            "display_name" => "Japanese"
        ],
        [
            "code" => "kn",
            "display_name" => "Kannada"
        ],
        [
            "code" => "kk",
            "display_name" => "Kazakh"
        ],
        [
            "code" => "rw_RW",
            "display_name" => "Kinyarwanda"
        ],
        [
            "code" => "ko",
            "display_name" => "Korean"
        ],
        [
            "code" => "ky_KG",
            "display_name" => "Kyrgyz (Kyrgyzstan)"
        ],
        [
            "code" => "lo",
            "display_name" => "Lao"
        ],
        [
            "code" => "lv",
            "display_name" => "Latvian"
        ],
        [
            "code" => "lt",
            "display_name" => "Lithuanian"
        ],
        [
            "code" => "mk",
            "display_name" => "Macedonian"
        ],
        [
            "code" => "ms",
            "display_name" => "Malay"
        ],
        [
            "code" => "ml",
            "display_name" => "Malayalam"
        ],
        [
            "code" => "mr",
            "display_name" => "Marathi"
        ],
        [
            "code" => "nb",
            "display_name" => "Norwegian"
        ],
        [
            "code" => "fa",
            "display_name" => "Persian"
        ],
        [
            "code" => "pl",
            "display_name" => "Polish"
        ],
        [
            "code" => "pt_BR",
            "display_name" => "Portuguese (BR)"
        ],
        [
            "code" => "pt_PT",
            "display_name" => "Portuguese (POR)"
        ],
        [
            "code" => "pa",
            "display_name" => "Punjabi"
        ],
        [
            "code" => "ro",
            "display_name" => "Romanian"
        ],
        [
            "code" => "ru",
            "display_name" => "Russian"
        ],
        [
            "code" => "sr",
            "display_name" => "Serbian"
        ],
        [
            "code" => "sk",
            "display_name" => "Slovak"
        ],
        [
            "code" => "sl",
            "display_name" => "Slovenian"
        ],
        [
            "code" => "es",
            "display_name" => "Spanish"
        ],
        [
            "code" => "es_AR",
            "display_name" => "Spanish (ARG)"
        ],
        [
            "code" => "es_ES",
            "display_name" => "Spanish (SPA)"
        ],
        [
            "code" => "es_MX",
            "display_name" => "Spanish (MEX)"
        ],
        [
            "code" => "sw",
            "display_name" => "Swahili"
        ],
        [
            "code" => "sv",
            "display_name" => "Swedish"
        ],
        [
            "code" => "ta",
            "display_name" => "Tamil"
        ],
        [
            "code" => "te",
            "display_name" => "Telugu"
        ],
        [
            "code" => "th",
            "display_name" => "Thai"
        ],
        [
            "code" => "tr",
            "display_name" => "Turkish"
        ],
        [
            "code" => "uk",
            "display_name" => "Ukrainian"
        ],
        [
            "code" => "ur",
            "display_name" => "Urdu"
        ],
        [
            "code" => "uz",
            "display_name" => "Uzbek"
        ],
        [
            "code" => "vi",
            "display_name" => "Vietnamese"
        ],
        [
            "code" => "zu",
            "display_name" => "Zulu"
        ],

    ]
];

// Merge the existing data with the new data
$data["languages"] = array_merge($data["languages"]);

// Convert the merged data to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Output the JSON data
echo $jsonData;
