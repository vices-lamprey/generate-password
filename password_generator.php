<?php
// password_generator.php

require_once 'config.php';
require_once 'utils.php';

function generatePassword() {
    $password = '';

    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $digitChars = '0123456789';
    $specialChars = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    $availableChars = '';

    if (INCLUDE_UPPERCASE) {
        $availableChars .= $uppercaseChars;
    }
    if (INCLUDE_LOWERCASE) {
        $availableChars .= $lowercaseChars;
    }
    if (INCLUDE_DIGITS) {
        $availableChars .= $digitChars;
    }
    if (INCLUDE_SPECIAL_CHARS) {
        $availableChars .= $specialChars;
    }

    $charCount = strlen($availableChars);

    for ($i = 0; $i < PASSWORD_LENGTH; $i++) {
        $password .= getRandomElement(str_split($availableChars));
    }

    return $password;
}
