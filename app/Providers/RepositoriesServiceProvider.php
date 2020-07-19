<?php

namespace App\Providers;

use App\Models\Repositories\Publico\CardStructure\CardStructureInterface;
use App\Models\Repositories\Publico\CardStructure\CardStructureRepository;
use App\Models\Repositories\Publico\Game\GameInterface;
use App\Models\Repositories\Publico\Game\GameRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(GameInterface::class, GameRepository::class);
        $this->app->bind(CardStructureInterface::class, CardStructureRepository::class);
    }
}
