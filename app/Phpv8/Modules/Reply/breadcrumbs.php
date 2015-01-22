<?php

// Reply

Breadcrumbs::register('admin.reply.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Reply::global.title'), route('admin.reply.index'));
});

Breadcrumbs::register('admin.reply.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Reply\Models\Reply $Reply
    ) {
    $breadcrumbs->parent('admin.reply.index');
    $breadcrumbs->push($Reply->title, route('admin.reply.edit', $Reply->id));
});

Breadcrumbs::register('admin.reply.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.reply.index');
    $breadcrumbs->push(trans('Reply::global.add'), route('admin.reply.create'));
});
