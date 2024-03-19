<?php
/**
 * Fetch All the Rows of a Sheet
 * We read all the rows of a given google sheet:
 */
require __DIR__ . '/config.php'; // Path to config.php

// get all the rows of a sheet
$range    = 'Sheet1'; // here we use the name of the Sheet to get all the rows
$response = $service->spreadsheets_values->get( $spreadsheetId, $range );
$values   = $response->getValues();

// output
var_dump( $values );
