<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class CreateJobController extends Controller
{
    public function create(){
        // validar que el rol del usurio sera administrador de una empresa

        $company = Company::find(auth()->user()->company_id);
        $job = Job::create([
            'user_id' => auth()->user()->id,
            // 'company_id' => $company->id
            'company_id' => 2,
            'district_id' => 150131
        ]);

        // dd($company);
        // dd($job);

        //Redireccionar a el componente de créate 
        //Crear una ruta para el componente y que este reciba un parámetro 
      
    return redirect()->route('job.edit', ['id_job' => $job->id] );
        // return redirect()->route('job.edit', ['id_job' => 1]);
    }
}
