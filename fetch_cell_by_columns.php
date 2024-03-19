<?php
/**
 * Fetch a Few Rows by Using a Range
 * We read the cells of a given column to avoid fetching everything
 */
require __DIR__ . '/config.php'; // Path to config.php

// the column containing the movie title
$range    = 'Sheet1!B1:B21';
$response = $service->spreadsheets_values->get( $spreadsheetId, $range );
$values   = $response->getValues();
var_dump( $values );
