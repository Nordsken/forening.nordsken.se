<?php

/**
 * Determine if the current request matches a given string.
 *
 * @param $path
 * @param string $class
 *
 * @return string
 */
function is_active( $path, $class = 'active' )
{
    return Request::is( $path ) ? $class : '';
}