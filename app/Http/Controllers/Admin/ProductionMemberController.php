<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Production_member;
use Illuminate\Http\Request;
use Session;

class ProductionMemberController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Production Memeber';


        $production_member_query = Production_member::query();

        //$filter = $request->input('filter');
        $search = $request->input('s');
        $serach_by = $request->input('s_by');

        switch($serach_by){
            case 'name':
                $production_member = $production_member_query->when($search, function($query)use($search){
                    return $query->where('name', 'like', "%".$search."%");
                });
                break;
            case 'role':
                $production_member = $production_member_query->when($search, function($query)use($search){
                    return $query->where('role', 'like', "%".$search."%");
                });
                break;
            case 'country':
                $production_member = $production_member_query->when($search, function($query)use($search){
                    return $query->where('nationality', 'like', "%".$search."%");
                });
                break;
            default:
                $production_member = $production_member_query->when($search, function($query) use($search){
                    return $query->where('name', 'like', "%".$search."%")
                        ->orWhere('nationality', 'like', "%".$search."%")
                        ->orWhere('role', 'like', '%'.$search.'%');
                });
                break;
        }

        // $production_member =  $production_member_query->when($search, function($query) use($search){
        //     return $query->where('name', 'like', "%".$search."%")
        //         ->orWhere('nationality', 'like', "%".$search."%")
        //         ->orWhere('role', 'like', '%'.$search.'%');
        // })->get();

        return view('admin.pages.production_member.index', [
            'page_title' => $page_title,
            'members' => $production_member->get()
        ]);
    }

    public function create()
    {
        $page_title = "Production Memeber Add";
        return view('admin.pages.production_member.create', [
            'page_title' => $page_title
        ]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $attributes = $request->validate([
            'name' => ['required'],
            'image' => ['required',], // Validate image type and size
            'nationality' => ['required'],
            'role' => ['required'],
            'dof' => ['required']
        ]);


        if ($request->hasFile('image') && $request->file('image')->isValid()) {


            $image = $request->file('image');


            $imageName = time() . '.' . $image->getClientOriginalExtension();


            $image->move(public_path('upload/source'), $imageName);


            $attributes['image'] = $imageName;
        }


        $member = Production_member::create($attributes);


        if ($member) {
            Session::flash('flash_message', 'Member successfully added');
            return redirect('admin/production/members');
        }


        return redirect()->back()->with('error', 'There was an issue creating the member.');
    }


    public function show()
    {

    }


    public function destroy($id)
    {
        $member = Production_member::findOrFail($id);
        $member->delete();

        Session::flash('flash_message', trans('words.deleted'));
        return redirect()->back();
    }

    public function edit($id)
    {
        $member = Production_member::find($id);

        if(!$member){
            return "member not found";
        }


        $page_title = "Production Memeber Edit";
        return view('admin.pages.production_member.edit', [
            'page_title' => $page_title,
            'member' => $member
        ]);
    }

    public function update(Request $request, $id)
    {

        $member = Production_member::find($id);


        if (!$member) {
            return redirect()->back()->with('error', 'There was an issue updating the member.');
        }


        $attributes = $request->validate([
            'name' => ['required'],
            'image' => ['nullable', 'max:2048'],
            'nationality' => ['required'],
            'role' => ['required'],
            'dof' => ['required']
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {


            if (file_exists(public_path('upload/source/' . $member->image))) {
                unlink(public_path('upload/source/' . $member->image));
            }


            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload/source'), $imageName);

            $attributes['image'] = $imageName;
        }


        $member->update($attributes);




        if ($member) {
            Session::flash('flash_message', trans('words.successfully_updated'));
            return redirect('admin/production/members');
        }



    }

}
