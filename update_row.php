<?php
/**
 * Update an Existing Row.
 * Replace an existing row by new values for its cells of the google sheet:
 */
require __DIR__ . '/config.php'; // Path to config.php

$updateRow = [
    "1006",
    "Product6",
    "description6 updated row",
    "category1",
    "$122",
    "2024-03-19",
];

$rows       = [$updateRow];
$valueRange = new \Google_Service_Sheets_ValueRange();
$valueRange->setValues( $rows );
$range   = 'Sheet1!A7'; // where the replacement will start, here, first column and second line
$options = ['valueInputOption' => 'USER_ENTERED'];
$service->spreadsheets_values->update( $spreadsheetId, $range, $valueRange, $options );
