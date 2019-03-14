<?php

namespace bmadigan\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class LaravelPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('bmadigan', function ($command) {
            //Preset::install($command);
            $command->info('its me');

//            $command->info('Preset scaffolding installed successfully.');
//            $command->info('Please run "yarn && yarn run dev" to compile your fresh scaffolding.');
        });
    }
}
