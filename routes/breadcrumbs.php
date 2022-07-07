<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\City;
use App\Models\User;
use App\Models\Travel;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use App\Models\Province;
use App\Models\Adventure;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('agent.index', function (BreadcrumbTrail $trail) {
    // $trail->parent('admin.provinces');
    $trail->push('لیست همکاران', route('agent.index'));
});
Breadcrumbs::for('agent.create', function (BreadcrumbTrail $trail ) {
    $trail->parent('agent.index');
    $trail->push('تعرفه همکار جدید ', route('agent.create'));
});
Breadcrumbs::for('agent.edit', function (BreadcrumbTrail $trail,User $user) {
    $trail->parent('agent.index');
    $trail->push('ویرایش همکار  ', route('agent.edit',$user->id));
});

// Home



Breadcrumbs::for('adventure.index', function (BreadcrumbTrail $trail) {
    $trail->push('لیست  ماجراجویی ها', route('adventure.index'));
});
Breadcrumbs::for('adventure.show', function (BreadcrumbTrail $trail,Adventure $adventure) {
    $trail->parent('adventure.index');
    $trail->push('اطلاعات ماجراجویی   ', route('adventure.show',$adventure->id));
});

Breadcrumbs::for('travel.index', function (BreadcrumbTrail $trail) {
    $trail->push('لیست سفرها', route('travel.index'));
});
Breadcrumbs::for('travel.show', function (BreadcrumbTrail $trail,Travel $travel) {
    $trail->parent('travel.index');
    $trail->push('اطلاعات سفر   ', route('travel.show',$travel->id));
});

Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail) {
    $trail->push('لیست کاربران', route('user.index'));
});
Breadcrumbs::for('user.show', function (BreadcrumbTrail $trail,User $user) {

    $trail->parent('user.index');
    $trail->push('پروفایل کاربر  ', route('user.show',$user->id));
});
Breadcrumbs::for('user.edit', function (BreadcrumbTrail $trail,User $user) {
    $trail->parent('user.index');
    $trail->push('ویرایش مشتری  ', route('user.edit',$user->id));
});
Breadcrumbs::for('province.index', function (BreadcrumbTrail $trail) {
    $trail->push('لیست استان ها', route('province.index'));
});
Breadcrumbs::for('province.show', function (BreadcrumbTrail $trail,Province $province) {
    $trail->parent('province.index');
    $trail->push('لیست اشخاص     ', route('province.show',$province->id));
});
Breadcrumbs::for('province.edit', function (BreadcrumbTrail $trail,Province $province) {
    $trail->parent('province.index');
    $trail->push('ویرایش استان        ', route('province.edit',$province->id));
});


Breadcrumbs::for('city.index', function (BreadcrumbTrail $trail) {
    $trail->push('لیست شهر  ها', route('province.index'));
});
Breadcrumbs::for('city.show', function (BreadcrumbTrail $trail,City $city) {
    $trail->parent('city.index');
    $trail->push('لیست اشخاص     ', route('city.show',$city->id));
});
Breadcrumbs::for('city.edit', function (BreadcrumbTrail $trail,City $city) {
    $trail->parent('city.index');
    $trail->push('ویرایش شهر       ', route('city.edit',$city->id));
});

// // Home > Blog
// Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });
