@extends('layouts.frontend')

@section('content')
<section class="border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            GALERI
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="p-20 mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-3">
            <div class="w-full rounded-lg">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                    alt="image">
                <h1 class="text-lg text-center text-gray-800 font-bold leading-none mb-3">Judul Foto</h1>
            </div>
            <div class="w-full rounded-lg">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                    alt="image">
                <h1 class="text-lg text-center text-gray-800 font-bold leading-none mb-3">Judul Foto</h1>
            </div>
            <div class="w-full rounded-lg">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
                <h1 class="text-lg text-center text-gray-800 font-bold leading-none mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus beatae tempora assumenda magni doloremque maiores autem culpa sint corporis. Consequatur aliquam fugit deserunt deleniti, sapiente adipisci inventore dolor facilis quis?</h1>
            </div>
            <div class="w-full rounded-lg">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                    alt="image">
                <h1 class="text-lg text-center text-gray-800 font-bold leading-none mb-3">Judul Foto</h1>
            </div>
        </div>
    </div>
</section>
@endsection
