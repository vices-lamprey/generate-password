<?php
// utils.php

function getRandomElement(array $array) {
    return $array[array_rand($array)];
}
