<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gambar;
use App\Models\Kegiatan;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Img;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'KEGIATAN BEM UNTAN';
        if ($request->ajax()) {
            $data = Kegiatan::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('picture',function ($data){
                        return '<img src="asset(storage/'.$data->picture .')" alt="Girl in a jacket" width="500" height="600">';
                    })
                    ->addColumn('action', function ($content) {
                        return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                    })
                    ->editColumn('struktur',function ($data){
                        return $data->struktur->nama;
                    })
                    ->addColumn('gambar', function ($data) {
                        $gambar = 'berita.index';
                        return '<a href="/admin/kegiatan/show/'.$data->id .'" class="edit btn btn-success btn-sm"><i class="bi bi-card-image"></i></a>';
                    })
                    ->rawColumns(['gambar','action'])
                    ->make(true);
        }
        $data['struktur'] = Struktur::orderBy('id', 'DESC')->get();
        return view('admin.kegiatan.index',compact(['data']));
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
        $data= Kegiatan::updateOrCreate(['id' => $request->id],
            [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'struktur_id' => $request->struktur_id,
            ]);
            $img = $data->gambar()->latest()->value('link');
            $path = null;
            if ($request->gambar) {
                $name_picture = $request->judul .Str::random(6) . '.webp';
                $picture = Img::make($request->gambar)->resize(null, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode('webp', 100);
                $namePath = strtolower('Kegiatan');
                $path = $namePath . "/" . $name_picture;
                Storage::put("public/" . $path, $picture);

                if ($path != null) {
                    $data->gambar()->updateOrcreate(['name' => $data->judul, 'link' => $path]);
                }

            }
        return response()->json(['success' => 'Berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $get = Kegiatan::find($id);
        $data = $get->gambar;
        // $data = Gambar::where('gambars_id',$id)->where('gambars_type', 'App\Models\Berita')->get();
        // dd($data);
        $title = $get->judul;
        return view('admin.kegiatan.gambar', compact(['data','title']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kegiatan::find($id);

        return $data;
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
        Kegiatan::find($id)->delete();
        return response()->json(['success' => 'Berhasil dihapus']);
    }
    public function deleteGambar($id){
        $data = Gambar::find($id);
        // unlink('storage/berita'.$data->nama);
        Gambar::where('id', $id)->delete();
        File::delete($data->link);
        return back()->with("success", "Image deleted successfully.");
    }
}
