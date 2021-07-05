<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InstallmentController extends Controller
{
    public function show()
    {

        return view('installment.create');

    }

    public function addInstallments(Request $request){
        
    $user = DB::table('users')->where('file_no', $request->file_no)->first();
    //dd($user);
    $user_id=$user->id;
    $user_file_table = $user->file_no;
    $user_name_table = $user->member_name;
    $total_amount_table = $user->total_amount;

    $ins =  DB::table('installments')->where('user_id', $user_id)->first();
    $ins_date_table = $ins->installment_date;
    $ins_amount_table = $ins->installment_amount;

    $ins =  DB::table('installments')->where('user_id', $user_id)->get();
    $num_ins_table = $ins->count();

    // $due =  DB::table('installments')->where('total_due', $request->file)->get();
    // $due_table = $due->id;
    

    $installment = new Installment();
    $installment->user_id = $user_id;
		$installment->installment_amount = $request->installment;
		$installment->save();
    return view('installment.add')->with(compact('user_file_table','user_name_table', 'ins_date_table', 'total_amount_table','ins_amount_table','num_ins_table'));
    
	}


}