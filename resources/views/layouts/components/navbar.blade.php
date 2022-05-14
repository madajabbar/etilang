{{-- navbar --}}
<div id="sidebar" class="h-screen w-16 menu gradient text-white px-4 flex items-center static fixed shadow">

    <ul class="list-reset ">
        <img src="{{asset('images/logo_bem.png')}}" alt="">
        <li class="my-2 md:my-0">
            <a href="{{route('home.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fas fa-home fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">BERANDA</span>
            </a>
        </li>
        <li class="my-2 md:my-0 ">
            <a href="{{route('structure.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fas fa-tasks fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">PROFIL</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('news.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fa fa-envelope fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">BERITA</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('activity.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fas fa-chart-area fa-fw mr-3 text-indigo-400"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">KEGIATAN</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('layanan.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">LAYANAN <br> MAHASISWA</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('calendar.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">KALENDER</span>
            </a>
        </li>
        {{-- <li class="my-2 md:my-0">
            <a href="{{route('galeri.index')}}" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">GALERI</span>
            </a>
        </li> --}}
        <li class="my-2 md:my-0">
            <a href="{{route('layanan.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">HUBUNGI KAMI</span>
            </a>
        </li>
    </ul>

</div>
{{-- end navbar --}}
