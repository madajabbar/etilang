@extends('layouts.frontend')

@section('content')
    {{-- start kegiatan --}}
    <section class=" border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-left text-gray-800">
                Kegiatan
            </h1>

            <div class="w-full mb-4">
                <div class="h-1 ml-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-3 ">
                @forelse($kegiatan as $data)
                <div class="mx-auto p-2 sm:p-10 text-center cursor-pointer">
                    <div
                        class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-white transition duration-500  bg-white">
                        <div class="space-y-10">
                            <div class="px-6 py-4">
                                <div class="space-y-5">
                                    <div class="font-bold text-xl mb-2 text-gray-700">{{$data->judul}}</div>
                                    <p class="text-gray-700 text-base">
                                        {{Str::limit($data->deskripsi, 100)}}
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        Kegiatan dari {{$data->struktur->nama}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="mx-auto p-2 sm:p-10 text-center cursor-pointer">
                    <div
                        class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-white transition duration-500  bg-white">
                        <div class="space-y-10">
                            <div class="px-6 py-4">
                                <div class="space-y-5">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Tidak Ada Kegiatan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    {{-- end kegiatan --}}
@endsection
