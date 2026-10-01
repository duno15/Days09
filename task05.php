<?php

function form_is_submitted()
{
    return isset($_POST["submit"]);
}

function whoami()
{
    $curriculums = [
        "pge" => "PGE (Programme Grande Ecole)",
        "bachelor" => "Bachelor",
        "msc" => "MSC Pro",
        "coding" => "Coding Academy",
        "wac" => "Web@cademie",
    ];

    $name = isset($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : "";
    $age = isset($_POST["age"])
        ? filter_var($_POST["age"], FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]])
        : false;
    $curriculum = isset($_POST["curriculum"]) ? $_POST["curriculum"] : "";

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

    if (isset($curriculums[$curriculum])) {
        echo " I'm a student of " . $curriculums[$curriculum] . ".";
    }
}
