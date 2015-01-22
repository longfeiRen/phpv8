<?php

// Shop

Breadcrumbs::register('admin.shop.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Shop::global.title'), route('admin.shop.index'));
});

Breadcrumbs::register('admin.shop.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Shop\Models\Shop $shop
    ) {
    $breadcrumbs->parent('admin.shop.index');
    $breadcrumbs->push($shop->title, route('admin.shop.edit', $shop->id));
});

Breadcrumbs::register('admin.shop.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.shop.index');
    $breadcrumbs->push(trans('Shop::global.add'), route('admin.shop.create'));
});
