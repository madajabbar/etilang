@extends('layouts.frontend')
@section('content')
    <section class=" border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                SUARA MAHASISWA
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-col mx-auto">
                <p class="text-gray-600 text-lg font-bold text-center mb-8">
                    PUNYA PERTANYAAN?
                    <br>
                    Hubungi Kami Melalui Formulir Dibawah Ini
                </p>
                <p class="text-gray-600 text-lg font-regular text-center mb-8">
                    (Pertanyaan yang dikirimkan akan kami balas melalui surel kami)
                </p>

                <img src="{{asset('images/logo_kbm.png')}}" alt="" class="mx-auto w-2/3">
                <div class="w-full mx-auto">
                    <form class="w-full mx-auto" id="dataForm" name="dataForm" enctype="multipart/form-data">
                        @csrf
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="" name="nama">
                            <label for="nama"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama Lengkap
                                </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="" name="email">
                            <label for="email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                                Email
                                </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="" name="no_hp">
                            <label for="no_hp"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nomor HP (0895xxxxxxx)
                                </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <textarea type="text"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="" name="pesan"></textarea>
                            <label for="pesan"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Pesan Anda
                                </label>
                        </div>
                        <button type="button" id="saveBtn"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            // var content = CKEDITOR.instances['content'].getData();
            // console.log(content)
            var myform = document.getElementById('dataForm');
            // myform = myform.append('content')
            var formData = new FormData(myform);
            // console.log(myform);

            $.ajax({
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                url: "{{ route('layanan.store') }}",
                type: "POST",
                dataType: 'json',

                success: function(data) {

                    $('#dataForm').trigger("reset");
                    $('#saveBtn').html('success');
                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil dimasukan',
                    })
                },
                error: function(data) {
                    console.log('Error:', data);
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Error!',
                    })
                    $('#saveBtn').html('Error');
                }
            });
        });

    });
</script>
@endsection
