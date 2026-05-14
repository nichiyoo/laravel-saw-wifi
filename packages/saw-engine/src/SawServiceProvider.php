<?php

namespace Repo\SawEngine;

use Repo\SawEngine\Engine\SawEngine;
use Repo\SawEngine\Engine\Normalizer;
use Illuminate\Support\ServiceProvider;
use Repo\SawEngine\Engine\WeightedScorer;
use Repo\SawEngine\Contracts\SawEngineContract;

final class SawServiceProvider extends ServiceProvider
{
    /**
     * Register the SAW engine bindings into the service container.
     */
    public function register(): void
    {
        $this->app->bind(SawEngineContract::class, function () {
            return new SawEngine(
                new Normalizer(),
                new WeightedScorer(),
            );
        });
    }
}
