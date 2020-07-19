<?php

namespace App\Providers;

use App\Models\Repositories\Publico\CardStructure\CardStructureInterface;
use App\Models\Repositories\Publico\CardStructure\CardStructureRepository;
use App\Models\Repositories\Publico\Game\GameInterface;
use App\Models\Repositories\Publico\Game\GameRepository;
use App\Models\Repositories\Publico\GameCards\GameCardsInterface;
use App\Models\Repositories\Publico\GameCards\GameCardsRepository;
use App\Models\Repositories\Publico\GameCardsColumns\GameCardsColumnsInterface;
use App\Models\Repositories\Publico\GameCardsColumns\GameCardsColumnsRepository;
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
        $this->app->bind(GameCardsInterface::class, GameCardsRepository::class);
        $this->app->bind(GameCardsColumnsInterface::class, GameCardsColumnsRepository::class);
    }
}
