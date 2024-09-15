<?php

namespace Neo\TestPackage\Models\Shopify;

use Illuminate\Database\Eloquent\Model;

class ShopifyOrder extends Model
{
    //
    protected $table = '';
    protected $connection = '';
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        // Set the table name dynamically from the config
        $this->table = config('testpackage.models.shopify.SHOPIFY_ORDER');
        $this->connection = config('testpackage.connection', 'mysql');
    }
}
