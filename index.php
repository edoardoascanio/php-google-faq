<?php

$data = [
    [
        "question" => "",
        "answer" => [
            "svvdsns <a href='#'>link</a>",
            [
                [
                    "aasdds",
                    "aasdds",
                ],

                [
                    "aasdds",
                    "aasdds",
                ],

                [
                    "aasdds",
                    "aasdds",
                ]
            ]
        ]
    ]
];

foreach ($data as $question) {
    $answer = $question["answer"];

    foreach ($answer as $singleRow) {
        if (is_array($singleRow)) {
        } else {
            echo $singleRow;
        }
    }
}
