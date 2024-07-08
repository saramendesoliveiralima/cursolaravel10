<?php

use App\Http\Controllers\Api\SupportController;
use Illuminate\Support\Facades\Route;

    Route::apiResources('/supports', SupportController::class);

?>
