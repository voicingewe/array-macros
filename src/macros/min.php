<?php

use Illuminate\Support\Arr;

/**
 * Get the min value of a given key.
 *
 * @param  callable|string|null  $callback
 * @return mixed
 */
Arr::macro('min', function (array $array, $callback = null) {
    $callback = Arr::valueRetriever($callback);

    $filter = Arr::filter($reduce, function ($value) {
        return !is_null($value);
    });

    return Arr::reduce($filter, function ($result, $item) use ($callback) {
        $value = $callback($item);
        return is_null($result) || $value < $result ? $value : $result;
    });
});