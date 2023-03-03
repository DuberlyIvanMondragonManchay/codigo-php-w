<?php

use App\Http\Controllers\CreateJobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyWelcomeController;
use App\Http\Livewire\AddUsersComponent;
use App\Http\Livewire\ApplicantRegistrationComponent;
use App\Http\Livewire\CompanyRegistrationComponent;
use App\Http\Livewire\CreateJobComponent;
use App\Http\Livewire\JobComponent;
use App\Http\Livewire\ListJobsComponent;
use App\Http\Livewire\PostulantJobsComponent;
use Illuminate\Support\Facades\Route;
use Spatie\WelcomeNotification\WelcomesNewUsers;

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [MyWelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [MyWelcomeController::class, 'savePassword']);
});
Route::get('/', function () {
    return view('pages.home');
});

Route::get('busco-talento', function() {
    return view('pages.busco-talento');
})->name('busco-talento');

Route::get('postulant/dashboard', function() {
    return view('home');
})->name('postulant.dashboard');

Route::get('dashboard', function() {
    return view('home');
})->name('dashboard');

Route::get('applicants/jobs', ListJobsComponent::class);

Auth::routes([
    'register' => false,
]);

Route::middleware(['guest'])->group(function () {
    Route::get('company-registration', CompanyRegistrationComponent::class)->name('company_registration');

    Route::get('applicant-registration', ApplicantRegistrationComponent::class)->name('applicant_registration');

    Route::get('record-type', function() {
        return view('record_type');
    })->name('record_type');



    Route::get('hanntronico', function(){

        // $productos = [
        //                 "nombre" => 'vita', "precio" => '100.00'
        //              ];

        $productos = [
                        ['id' => 1, 'nombre' => 'vitaenergía'],
                        ['id' => 2, 'nombre' => 'on'],
                        ['id' => 3, 'nombre' => 'no stress'],
                    ];


        return view('hanntronico', ['productos' => $productos]);
    })->name('hanntronico');

});

Route::middleware(['auth'])->group(function () {
    Route::get('jobs/create', [CreateJobController::class, 'create'])->name('create.job');
    Route::get('jobs/job/{id_job}', CreateJobComponent::class)->name('job.edit');
    Route::get('jobs', JobComponent::class)->name('create.index')->name('jobs');
    Route::get('add-users', AddUsersComponent::class);

    Route::get('postulant-jobs/{id_job}', PostulantJobsComponent::class)->name('postulant_jobs');

    // Route::get('postulant-jobs', [JobComponent::class, 'listJobs'])->name('postulant_jobs'); //no carga render

});
