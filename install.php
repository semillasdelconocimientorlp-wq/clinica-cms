<?php

// Installation Wizard

// Check requirements
function checkRequirements() {
    $requirements = [
        'PHP' => version_compare(PHP_VERSION, '7.4', '>='),
        'mysqli' => function_exists('mysqli_connect'),
        'gd' => extension_loaded('gd'),
        'mbstring' => extension_loaded('mbstring')
    ];

    foreach ($requirements as $extension => $isAvailable) {
        if (!$isAvailable) {
            echo "{$extension} is not installed or enabled.\n";
        }
    }
}

// Install function
function install() {
    // Place installation logic here.
    echo 'Installation started...';
}

// Check requirements before installation
checkRequirements();

// If requirements are met, proceed to install
install();
?>