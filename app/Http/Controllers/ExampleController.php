<?php

namespace App\Http\Controllers;

use App\Models\ExampleForm;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use RahulHaque\Filepond\Facades\Filepond;
use Illuminate\Support\Facades\Storage;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'This Is An Example Form';
        return view('example.form',compact('data'));
    }

    public function view(Request $request){

        $data['title'] = 'This is an Example Table';
        if ($request->ajax()) {
            $data = ExampleForm::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('picture',function ($data){
                        return '<img src="asset(storage/'.$data->picture .')" alt="Girl in a jacket" width="500" height="600">';
                    })
                    ->make(true);
        }
        return view('example.datatables',compact(['data']));
    }

    public function viewFormJquery(){
        $data['title'] = 'Form Jquery';
        return view('example.formjquery',compact(['data']));
    }
    public function storejquery(Request $request) {
        $file = $request->file('filepond');
        dd($file);
        if($file){
            $validatedData = $request->validate([
                'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

               ]);

               $name = $request->picture->getClientOriginalName();
               $path = $request->picture->store('public/images');

            ExampleForm::updateOrCreate(
                ['id' => $request->id],
                ['first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'city' => $request->city,
                'country' => $request->country,
                'company' => $request->company,
                'email' => $request->email,
                'picture' => $path
                ]
            );
        }
        else {
            ExampleForm::updateOrCreate(
                ['id' => $request->id],
                ['first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'city' => $request->city,
                'country' => $request->country,
                'company' => $request->company,
                'email' => $request->email,
                ]
            );

        }

        return response()->json(['success'=>'data '.$request->first_name.' telah berhasil dimasukan']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->picture);
        $example = new ExampleForm();
        if ($request->picture) {
            $validatedData = $request->validate([
                'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

               ]);

               $name = $request->picture->getClientOriginalName();
               $path = $request->picture->store('public/images');

            $example->first_name = $request->first_name;
            $example->last_name = $request->last_name;
            $example->city = $request->city;
            $example->country = $request->country;
            $example->company = $request->company;
            $example->email = $request->email;
            $example->picture = $path;
        }
        else{
            $example->first_name = $request->first_name;
            $example->last_name = $request->last_name;
            $example->city = $request->city;
            $example->country = $request->country;
            $example->company = $request->company;
            $example->email = $request->email;
        }
        $example->save();
        return redirect()->back();
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
}
