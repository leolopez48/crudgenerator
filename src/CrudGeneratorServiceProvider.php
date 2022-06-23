<?php

namespace Leolopez\Crudgenerator;

use Illuminate\Support\ServiceProvider;
use Leolopez\Crudgenerator\Commands\GenerateApiFileCommand;
use Leolopez\Crudgenerator\Commands\GenerateControllerCommand;
use Leolopez\Crudgenerator\Commands\GenerateCrudCommand;
use Leolopez\Crudgenerator\Commands\GenerateModelCommand;
use Leolopez\Crudgenerator\Commands\GenerateVueCommand;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->commands([
            GenerateControllerCommand::class,
            GenerateModelCommand::class,
            GenerateApiFileCommand::class,
            GenerateVueCommand::class,
            GenerateCrudCommand::class,
        ]);
    }
}
