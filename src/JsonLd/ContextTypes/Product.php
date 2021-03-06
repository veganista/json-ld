<?php
namespace JsonLd\ContextTypes;
class Product extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'name' => null,
        'description' => null,
        'brand' => null,
        'image' => null,
        'sku' => null,
        'url' => null,
        'offers' => Offer::class
    ];
}
