<?php

function getUrl()
{
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    return explode('?', $uri)[0];
}