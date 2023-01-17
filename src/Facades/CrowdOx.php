<?php namespace edh649\CrowdOxLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void freshClient() Create a fresh client instance
 * @method static \edh649\CrowdOx\Resources\States states()
 * @method static \edh649\CrowdOx\Resources\Projects projects()
 * @method static \edh649\CrowdOx\Resources\ProductVariations product_variations()
 * @method static \edh649\CrowdOx\Resources\OrderTransactions order_trgetValidResourcesansactions()
 * @method static \edh649\CrowdOx\Resources\OrderTags order_tags()
 * @method static \edh649\CrowdOx\Resources\OrderSelections order_selections()
 * @method static \edh649\CrowdOx\Resources\Orders orders()
 * @method static \edh649\CrowdOx\Resources\OrderLines order_lines()
 * @method static \edh649\CrowdOx\Resources\OrderAddresses order_addresses()
 * @method static \edh649\CrowdOx\Resources\Customers customers()
 * @method static \edh649\CrowdOx\Resources\Countries countries()
 * @method static \edh649\CrowdOx\Resources\Products products()
 */
class CrowdOx extends Facade {

    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'crowdox'; }

}
