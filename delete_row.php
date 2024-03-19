<?php
/**
 * Delete a Single or Multiple Rows.
 * Delete a single or multiple rows by specifying a range of cells to clear of the google sheet:
 */
require __DIR__ . '/config.php'; // Path to config.php

$range = 'Sheet1!A7:F7'; // the range to clear, the 7th and 7th lines
$clear = new \Google_Service_Sheets_ClearValuesRequest();
$service->spreadsheets_values->clear( $spreadsheetId, $range, $clear );
