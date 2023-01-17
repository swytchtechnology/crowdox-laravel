<?php namespace edh649\CrowdOxLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void freshClient() Create a fresh client instance
 * @method static \edh649\CrowdOx\Resources\States states(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\Projects projects(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\ProductVariations product_variations(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\OrderTransactions order_transactions(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\OrderTags order_tags(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\OrderSelections order_selections(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\Orders orders(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\OrderLines order_lines(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\OrderAddresses order_addresses(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\Customers customers(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\Countries countries(string|int $resource_id = null)
 * @method static \edh649\CrowdOx\Resources\Products products(string|int $resource_id = null)
 */
class CrowdOx extends Facade {

    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'crowdox'; }

}
