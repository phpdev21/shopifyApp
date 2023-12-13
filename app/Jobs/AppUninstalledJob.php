<?php 

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Osiset\ShopifyApp\Contracts\Queries\Shop as IShopQuery;
use DB;

class AppUninstalledJob implements ShouldQueue
{
    use InteractsWithQueue;

    private $shopDomain;

    public function __construct(string $shopDomain)
    {
        $this->shopDomain = $shopDomain;
    }

    public function handle(IShopQuery $shopQuery)
    {
        // $shop = $shopQuery->where('shopify_domain', $this->shopDomain)->first();

        // if ($shop) {
            // Remove any data associated with the uninstalled shop
            // For example:
            DB::table('users')->where('name', $this->shopDomain)->delete();
        // }
    }
}
