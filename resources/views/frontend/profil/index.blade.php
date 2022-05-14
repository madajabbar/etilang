@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class="container border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                STRUKTUR
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @foreach($struktur as $data)

                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                    <div class="flex justify-center">
                        <a href="{{url('structure/'.$data->id)}}">
                        <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
                          <div class="p-6 flex flex-col justify-start">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">{{$data->nama}}</h5>
                            <p class="text-gray-700 text-base mb-4">
                              Periode {{$data->periode->periode}}
                            </p>
                            <p class="text-gray-600 text-xs">Dibuat {{$data->created_at->format('Y-m-d')}}</p>
                          </div>
                        </div>
                    </a>
                      </div>
                </div>

            @endforeach
        </div>
    </section>
    {{-- end berita --}}
@endsection
