<?php

/**
 * Return the leftmost parameter not worth NULL, otherwise it will return NULL
 * @param ...$params
 * @return mixed|null
 */
function zz(&...$params)
{
    foreach($params as &$param)
        if ($param)
            return $param;
    return null;
}

/**
 * Return the leftmost parameter not worth NULL, otherwise it will return the default param
 * @param $default
 * @param ...$params
 * @return mixed
 */
function zzd($default, &...$params)
{
    return ($tmp = zz(...$params)) ? $tmp : $default;
}
