<?php

use App\Providers\AppServiceProvider;
<<<<<<< HEAD

return [
    AppServiceProvider::class,
=======
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\VoltServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
    VoltServiceProvider::class,
>>>>>>> master
];
