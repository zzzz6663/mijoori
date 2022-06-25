<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query();
        if ($request->search) {
            $search = $request->search;
            $users->where('name', 'LIKE', "%{$search}%")
                ->orWhere('family', 'LIKE', "%{$search}%")
                ->orWhere('code', 'LIKE', "%{$search}%")
                ->orWhere('mobile', 'LIKE', "%{$search}%")
                ->orWhere('shaba', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhereHas('province', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orWhereHas('city', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                });
        }
        $users = $users->whereIn('level', ['manager','analyzer'])->latest()->paginate(10);
        return view('admin.agent.all', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'name'=>'required|max:256',
            'family'=>'required|max:256',
            'mobile'=>'required|unique:users,mobile|max:256',
            'password'=>'required|max:256|min:6',
            'email'=>'required|unique:users,email|email|max:256',
            'level'=>'required|in:analyzer,manager|max:256',
            'avatar'=>'required',
        ]);
        $user=User::create($data);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $name_img = 'avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/avatar/'), $name_img);
            $data['avatar'] = $name_img;
            $user->update($data);
        }
        $user->assignRole($data['level']);
        alert()->success('کاربر با موفقیت ساخته شد ');
        return redirect()->route('agent.index');
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
    public function edit(Request $request, User $agent)
    {
        return view('admin.agent.edit',compact(['agent']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $agent)
    {

        $data= $request->validate([
            'name'=>'required|max:256',
            'family'=>'required|max:256',
            'mobile'=>'required|max:256|unique:users,mobile,'.$agent->id,
            'password'=>'required|max:256|min:6',
            'email'=>'required|email|max:256|unique:users,email,'.$agent->id,
            'level'=>'required|in:analyzer,manager|max:256',
            'avatar'=>'nullable',
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $name_img = 'avatar_' . $agent->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/avatar/'), $name_img);
            $data['avatar'] = $name_img;

        }
        $agent->assignRole($data['level']);
        $agent->update($data);
        alert()->success('کاربر با موفقیت به روز  شد ');
        return redirect()->route('agent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $agent)
    {
        $agent->delete();
        alert()->success('کاربر با موفقیت حذف شد ');
return redirect()->route('agent.index');
    }
}
