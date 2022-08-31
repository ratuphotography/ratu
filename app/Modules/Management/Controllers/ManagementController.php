<?php

namespace App\Modules\Management\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Management::index');
    }

    public function account()
    {    
        return view('Management::account.index');
    }

    public function absence()
    {    
        return view('Management::absence.index');
    }

    public function list_absence_category()
    {   $absence_categories = \Models\AbsenceCategory::all();
        return view('Management::absence.list_absence_category', ['absence_categories'=> $absence_categories]);
    }

    public function list_absence_regulation()
    {   $absence_regulations = \Models\AbsenceRegulation::all();
        return view('Management::absence.list_absence_regulation', ['absence_regulations'=> $absence_regulations]);
    }

    public function list_absence_team()
    {   $absences = \Models\Absence::all();
        return view('Management::absence.list_absence_team', ['absences'=> $absences]);
    }

    public function value()
    {
        return view('Management::value.index');
    }

    public function list_value_category()
    {   $value_categories = \Models\CategoryValue::all();
        return view('Management::value.list_value_category', ['value_categories'=> $value_categories]);
    }

    public function list_value_transaction()
    {   $value_transactions = \Models\ValueTransaction::all();
        return view('Management::value.list_value_transaction', ['value_transactions'=> $value_transactions]);
    }

    public function list_value()
    {   $values = \Models\value::all();
        return view('Management::value.list_value', ['values'=> $values]);
    }


    public function team()
    {
        return view('Management::team.index');
    }
 
}
