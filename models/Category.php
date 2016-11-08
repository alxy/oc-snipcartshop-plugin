<?php namespace OFFLINE\SnipcartShop\Models;

use Illuminate\Http\Request;
use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name', 'meta_description', 'meta_title'];

    public $rules = [
        'name' => 'required',
    ];

    public $timestamps = true;

    public $table = 'offline_snipcartshop_categories';

    public $belongsToMany = [
        'products' => [
            'OFFLINE\SnipcartShop\Models\Product',
            'table'    => 'offline_snipcartshop_category_product',
            'key'      => 'category_id',
            'otherKey' => 'product_id',
        ],
    ];

    /**
     * Returns an array with possible parent categories.
     *
     * If we are in create mode (no id) all categories are returned.
     * If an id is set, we need to exclude the current node itself to
     * prevent an infinite parent-child relationship.
     *
     * @return array
     */
    public function getParentOptions()
    {
        $options = [
            // null key for "no parent"
            null => '(' . trans('offline.snipcartshop::lang.plugin.category.no_parent') . ')'
        ];

        // In edit mode, exclude the node itself.
        $items = $this->id ? Category::withoutSelf()->get() : Category::getAll();
        $items->each(function($item) use (&$options) {
            return $options[$item->id] = sprintf('%s %s', str_repeat('--', $item->getLevel()), $item->name);
        });

        return $options;
    }
}