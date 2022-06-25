<?php

namespace App\Http\Controllers\admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Travel;
use Illuminate\Support\Facades\Validator;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user= auth()->user();
        $travels = Travel::query();
        if ($request->search) {
            $search = $request->search;
            $travels->whereHas('user',function ($query) use ($search){
                $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('family', 'LIKE', "%{$search}%")
                ->orWhere('mobile', 'LIKE', "%{$search}%");
            })
                ->orWhereHas('province', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orWhereHas('city', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                });
        }
        $travels = $travels->latest()->paginate(10);
        return view('admin.travels.all', compact(['travels','user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function travel_confirm(Travel $travel)
    {
        if($travel->confirm){
            $travel->update(['confirm'=>'0']);
            alert()->success('سفر با موفقیت رد  شد ');
        }else{
            $travel->update(['confirm'=>'1']);
            alert()->success('سفر با موفقیت  تایید شد ');
        }
     return redirect()->back();
    }
}
