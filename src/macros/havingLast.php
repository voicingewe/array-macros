<?php

use Illuminate\Support\Arr;

/**
 * Get the first item by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */
Arr::macro('havingLast', function ($array, $key, $operator, $value = null) {
    $args = array_slice(func_get_args(), 1);
    return Arr::last($array, Arr::operatorForWhere(...$args()));
});