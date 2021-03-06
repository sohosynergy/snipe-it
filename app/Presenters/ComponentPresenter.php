<?php

namespace App\Presenters;

use App\Helpers\Helper;

/**
 * Class ComponentPresenter
 * @package App\Presenters
 */
class ComponentPresenter extends Presenter
{

    /**
     * Json Column Layout for bootstrap table
     * @return string
     */
    public static function dataTableLayout()
    {
        $layout = [
            [
                "field" => "id",
                "searchable" => false,
                "sortable" => true,
                "switchable" => true,
                "title" => trans('general.id'),
                "visible" => false
            ],
            [
                "field" => "company",
                "searchable" => true,
                "sortable" => true,
                "switchable" => true,
                "title" => trans('general.company'),
                "visible" => false,
                "formatter" => 'companiesLinkObjFormatter',
            ],
            [
                "field" => "name",
                "searchable" => true,
                "sortable" => true,
                "title" => trans('general.name'),
                "visible" => true,
                "formatter" => 'componentsLinkFormatter',
            ], [
                "field" => "category",
                "searchable" => true,
                "sortable" => true,
                "title" => trans('general.category'),
                "formatter" => "categoriesLinkObjFormatter"
            ], [
                "field" => "qty",
                "searchable" => false,
                "sortable" => false,
                "title" => trans('admin/components/general.total'),
                "visible" => true,
            ], [
                "field" => "remaining",
                "searchable" => false,
                "sortable" => false,
                "title" => trans('admin/components/general.remaining'),
                "visible" => true,
            ], [
                "field" => "min_amt",
                "searchable" => false,
                "sortable" => false,
                "title" => trans('general.min_amt'),
                "visible" => true,
            ], [
                "field" => "order_number",
                "searchable" => true,
                "sortable" => true,
                "title" => trans('general.order_number'),
                "visible" => true,
            ],[
                "field" => "purchase_date",
                "searchable" => true,
                "sortable" => true,
                "title" => trans('general.purchase_date'),
                "visible" => true,
                "formatter" => "dateDisplayFormatter",
            ],[
                "field" => "purchase_cost",
                "searchable" => true,
                "sortable" => true,
                "title" => trans('general.purchase_cost'),
                "visible" => true,
            ],
        ];

        $layout[] = [
            "field" => "checkincheckout",
            "searchable" => false,
            "sortable" => false,
            "switchable" => true,
            "title" => 'Checkin/Checkout',
            "visible" => true,
            "formatter" => "componentsInOutFormatter",
        ];

        $layout[] = [
            "field" => "actions",
            "searchable" => false,
            "sortable" => false,
            "switchable" => false,
            "title" => trans('table.actions'),
            "formatter" => "componentsActionsFormatter",
        ];


        return json_encode($layout);
    }

    /**
     * Generate html link to this items name.
     * @return string
     */
    public function nameUrl()
    {
        return (string) link_to_route('consumables.show', e($this->name), $this->id);
    }


}
