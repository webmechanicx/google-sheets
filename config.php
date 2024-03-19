<?php
require __DIR__ . '/vendor/autoload.php'; // Path to autoload.php

use Google\Client;
use Google\Service\Sheets;

$client = new Client();
$client->setAuthConfig( 'data/credentials.json' ); // Path to your OAuth client credentials
//$client->addScope( Sheets::SPREADSHEETS_READONLY );
$client->setScopes( [\Google_Service_Sheets::SPREADSHEETS] );

$service = new Sheets( $client );

// the spreadsheet id can be found in the url https://docs.google.com/spreadsheets/d/143xVs9l_2t0We355-75djiWmvZU-DYAnd/edit
$spreadsheetId = '';
