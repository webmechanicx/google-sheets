<?php
/**
 * Append a New Row
 * write a new row at the end of the google sheet:
 */
require __DIR__ . '/config.php'; // Path to config.php

$newRows = [
    "1006",
    "Product6",
    "description6",
    "category1",
    "$150",
    "2024-03-19",
];

$rows = [$newRows];
// you can append several rows at once
$valueRange = new \Google_Service_Sheets_ValueRange();
$valueRange->setValues( $rows );
$range   = 'Sheet1'; // the service will detect the last row of this sheet
$options = ['valueInputOption' => 'USER_ENTERED'];
$service->spreadsheets_values->append( $spreadsheetId, $range, $valueRange, $options );
