<?php
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push(__('base::breadcrumb.home'), route('home'));
});