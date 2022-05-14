@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class=" border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                Berita Terbaru
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @foreach ($berita as $data)
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                    <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline shadow">

                            <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                                Berita {{ $loop->iteration }}
                            </p>
                            @forelse ($data->gambar as $gambar)
                                @if ($loop->last)
                                    <img class="rounded-t-lg w-5/6 h-48 mx-auto"
                                        src="{{ asset('storage/' . $gambar->link) }}" alt="berita" />
                                @endif
                            @empty
                                <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                                    alt="tes" />
                            @endforelse
                            <div class="w-full font-bold text-center text-xl text-gray-800 px-6">
                                {{ $data->judul }}
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                {!! Str::limit($data->isi, 50, $end = '.......') !!}
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                        <div class="flex items-center justify-center">
                            <a href="{{ url('news/' . $data->id) }}"
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                lihat berita
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- end berita --}}
@endsection
