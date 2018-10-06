<?php

use Illuminate\Support\Arr;

/**
 * Get the items in the collection whose keys are not present in the given items.
 *
 * @param  mixed   $items
 * @param  callable  $callback
 * @return static
 */
Arr::macro('diffAssocUsing', function ($items, callable $callback) {
    return array_diff_uassoc($items, $Arr::getArrayableItems($items), $callback);
});