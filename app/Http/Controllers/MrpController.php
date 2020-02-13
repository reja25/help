<?php

namespace App\Http\Controllers;

use App\Rinfo;
use Illuminate\Http\Request;
use App\Mrp;
use Illuminate\Support\Facades\DB;

class MrpController extends Controller
{

    public function index()
    {
        $info = Mrp::all();
		return view('payment.index')->with('data',$info);
    }

    public function add(){
        $renter_name = Rinfo::all();
        return view('payment.mrp',compact('renter_name'));
    }

    public function get_houserent(Request $request){
        $states = Rinfo::query()->findOrFail($request->rname);
        return [$states->room->hno, $states->room->hrent,$states->room->id];
    }
	
	public function store(Request $request){
        Mrp::create($request->all());
		return redirect('mrp');
	}

	public function edit_payment($id){
		$data = Mrp::query()->findOrFail($id);
		$renter_name = Rinfo::all();
		return view('payment.edit',compact('data','renter_name'));
	}
	
	public function update_payment(Request $request,$id)
    {
        $info = Mrp::query()->findOrFail($id);
        $info->update($request->all());

		return redirect('mrp');
	}
	
	public function delete($id){
		$info = Mrp::find($id);
		$info->delete();
		return redirect('mrp');
	} 

    
}
