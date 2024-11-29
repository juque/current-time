<?php

use Acme\CurrentTime\Http\Controllers\TimeController;

Route::get('/time', [TimeController::class, 'show']);
