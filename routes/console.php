<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// registro un comando de consola de ejemplo.
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('muestro una cita inspiradora.');
