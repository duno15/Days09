<?php

function render_body($page)
{
    $pages = ["home", "php", "sql"];

    if (in_array($page, $pages, true)) {
        $file = __DIR__ . "/" . $page . ".html";
        if (file_exists($file)) {
            return file_get_contents($file);
        }
    }
    return "<p>Unknown page</p>";
}
