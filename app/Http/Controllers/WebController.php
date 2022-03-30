<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UserTrait;
use App\Traits\DirectorTrait;
use App\Traits\PatientTrait;

class WebController extends Controller
{
    use UserTrait;
    use DirectorTrait;
    use PatientTrait;

    static $gender = [
        0 => 'Masculino',
        1 => 'Femenino',

    ];
}
