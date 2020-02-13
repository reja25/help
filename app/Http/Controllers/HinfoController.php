<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hinfo;
use DB;

class HinfoController extends Controller
{
    public function index()
    {
		$info=Hinfo::all();
		return view('houserent.index')->with('data',$info);
    }
	
	public function add(){
		
		return view('houserent.create');
	}
	
	
	public function store(Request $request){
		$info = new Hinfo;
		$info->hno = $request->hno;
		$info->hrent = $request->hrent;
		$info->status= $request->status;
		$info->save();
		return redirect('him');
	}
	
	public function edit_rent($id){
		$data = Hinfo::find($id);
		return view('houserent.edit',compact('data'));
	}
	
	public function update_rent(Request $request, $id){
		$info = Hinfo::find($id);
		
		$info->hno = $request->hno;
		$info->hrent = $request->hrent;
		$info->save();
		return redirect('him');
	}
	
	public function delete($id){
		$info = Hinfo::find($id);
		$info->delete();
		return redirect('him');
	} 
	
	
}