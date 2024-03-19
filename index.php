<?php
require __DIR__ . '/config.php'; // Path to config.php

// request to get spreadsheet
$spreadsheet = $service->spreadsheets->get( $spreadsheetId );

var_dump( $spreadsheet );
