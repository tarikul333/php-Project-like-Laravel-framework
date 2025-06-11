<?php

function dd($value) 
{
    var_dump($value);
    echo "</pre>";
}

function basePath($path)
{
    return constant('BASE_PATH') . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    
    require basePath('views/' . $path);
}
