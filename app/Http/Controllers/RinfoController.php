<?php

namespace App\Http\Controllers;

use App\Mrp;
use Illuminate\Http\Request;
use App\Rinfo;
use App\Hinfo;
use Illuminate\Support\Facades\DB;

class RinfoController extends Controller
{
    public function index()
    {
        $total_renter = Rinfo::all()->count();
        $total_payments = Mrp::query()->sum('renter_payment');
		$total_rooms = Hinfo::all()->count();
		$total_rooms_bl = DB::table('hinfos')
							->select(DB::raw('COUNT(id) as id,sum(hrent) as hrent'))
							->whereNotIn('id', DB::table('rinfos')->where('status',1)->pluck('room_id'))
							->get();
	
		$total_due = Mrp::query()->sum('due_payment');
        return view('renter.dashboard',compact('total_payments','total_renter','total_rooms','total_rooms_bl','total_due'));
    }
	
	public function add(){
		$h_number = DB::table('hinfos')->select('id','hno')->whereNotIn('id', DB::table('rinfos')->where('status',1)->pluck('room_id'))->get();
		return view('renter.create',compact('h_number'));
	}
	
	
	public function store(Request $request){
            if($request->hasFile('image')){
                $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'rinfos'"));
                $img=time();
                $imageName = $img.'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(base_path().'/public/uploads/', $imageName);
                $data = $request->except('image');
                $data['image'] = $imageName;
                Rinfo::query()->create($data);
            }else{
                Rinfo::query()->create($request->except('image'));
            }
            return redirect('show');
	}
	//for houserent come from house number
	 public function get_hrent(){
		$return_data = '';
		$hno = $_GET['house_id'];
		$states = DB::table('hinfos')->where('id',$hno)->get();
		foreach($states as $state){
			$return_data=$state->hrent;
		}
		return $return_data;
	} //for houserent come from house number

    //for single view page
	public function show_details($id)
    {
        $data=Rinfo::find($id);
        $mrp = Mrp::latest()->where('renter_id',$id)->get();
		return view('renter.info',compact('data','mrp'));
    }
    //for single view page
	
	public function show()
    {
        $data=Rinfo::all();
		return view('renter.index',compact('data'));
    }
   
	public function edit($id){
		$data = Rinfo::find($id);
		$h_number = DB::table('hinfos')->select('id','hno')->get();
		return view('renter.edit')->with('data',$data)->with('h_number',$h_number);
	}
	
	public function update(Request $request, $id){
		$renter_info = Rinfo::query()->findOrFail($id);
		//dd($request->all());
        $renter_info->update($request->all());
        if($request->hasFile('image')){
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'rinfos'"));
            $img=time();
            $imageName = $img.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/public/uploads/', $imageName);
            $data = $request->except('image');
            $data['image'] = $imageName;
            $renter_info->update($data);
        }else{
            $renter_info->update($request->except('image'));
        }
        return redirect('show');
	}
	
	public function delete($id){
		$info = Rinfo::find($id);
		$info->delete();
		return redirect('show');
	}
	
	
}
