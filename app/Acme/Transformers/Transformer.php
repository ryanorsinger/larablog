<?php

namespace Acme\Transformers;


abstract class Transformer {

    /**
     * transformCollection transforms a collection of lessons
     * @param  $items (so it can be generic)
     * @return array
     */
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}
