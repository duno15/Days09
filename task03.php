<?php

function dynamic_body()
{
    $pages = ["home", "php", "sql"];

    if (isset($_GET["page"]) && in_array($_GET["page"], $pages, true)) {
        $file = __DIR__ . "/" . $_GET["page"] . ".html";
        if (file_exists($file)) {
            return file_get_contents($file);
        }
    }
    return "<p>Unknown page</p>";
}
