<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Livewire\Chart;
use App\Livewire\Settings;
use App\Livewire\ActivityJustification;
use App\Livewire\ActivityJustificationForm;
use App\Livewire\PersonalServices;
use App\Livewire\PersonalServicesForm;
use App\Livewire\PersonnelSchedule;
use App\Livewire\PersonnelScheduleForm;
use App\Livewire\Mooe;
use App\Livewire\MaintenanceForm;
use App\Livewire\CapitalOutlay;
use App\Livewire\CapitalOutlayForm;
use App\Livewire\PPMP;
use App\Livewire\PpmpForm;
use App\Livewire\BUR;
use App\Livewire\Amendment;
use App\Livewire\BurForm;
use App\Livewire\AmendmentForm;
use App\Livewire\Appropriations;
use Illuminate\Support\Facades\DB;

use App\Livewire\LoadCapitalOutlay;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/chart', Chart::class);

Route::get('/settings', Settings::class);

Route::get('/activity-justification', ActivityJustification::class);

Route::get('/activity-justification-form', ActivityJustificationForm::class);

Route::get('/personal-services', PersonalServices::class);

Route::get('/personal-services-form', PersonalServicesForm::class);

Route::get('/personnel-schedule', PersonnelSchedule::class);

Route::get('/personnel-schedule-form', PersonnelScheduleForm::class);

Route::get('/MOOE', Mooe::class);

Route::get('/MOOE-form', MaintenanceForm::class);

Route::get('/capital-outlay', LoadCapitalOutlay::class);

Route::get('/capital-outlay-form', CapitalOutlayForm::class);

Route::get('/PPMP', PPMP::class);

Route::get('/PPMP-form', PpmpForm::class);

Route::get('/BUR', BUR::class);

Route::get('/appropriations', Appropriations::class);

Route::get('/amendment', Amendment::class);

Route::get('/BUR-form', BurForm::class);

Route::get('/amendment-form', AmendmentForm::class);

Route::get('/capital-outlay-form', CapitalOutlayForm::class);


Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is working';
    } catch (\Exception $e) {
        return 'Database connection is not working: ' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
