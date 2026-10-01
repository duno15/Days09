<?php

function whoami()
{
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $age = isset($_POST["age"])
        ? filter_var($_POST["age"], FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]])
        : false;

    $has_name = $name !== "";
    $has_age = $age !== false;

    if ($has_name && $has_age) {
        echo "Hi, my name is " . $name . " and I'm " . $age . " years old.";
    } elseif ($has_age) {
        echo "Hi, I have no name and I'm " . $age . " years old.";
    } elseif ($has_name) {
        echo "Hi, my name is " . $name . ".";
    } else {
        echo "Hi, I have no name.";
    }
}
