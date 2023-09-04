<?php
// Include the Composer autoloader
require "vendor/autoload.php";

// Import the necessary classes
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Color\Color;

// Get the text data from the POST request
$text = $_POST["text"];

// Create a new QR code instance
$qr_code = QrCode::create($text)
// Add Custom Size to the Code

                ->setSize(600)
                ->setMargin(40)
                ;

$label = Label::create("GENERATED FAM")
// Add Custom Color to the Label
                ->setTextColor(new Color(0, 0, 255));

// Create a new PNG writer
$writer = new PngWriter;

// Generate the QR code image using the PNG writer
$result = $writer->write($qr_code, label: $label);

// Set the appropriate content type header for the image
header("Content-Type: " . $result->getMimeType());

// Output the QR code image
echo $result->getString();
