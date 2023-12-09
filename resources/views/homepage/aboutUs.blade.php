@extends('layouts.app')
@section('title', 'Retero - About Us')
@push('styles')
<style>
    .content-container {
        background: rgba(0, 0, 0, 0.7);

    }

    .content {
        margin-bottom: 5%;
        color: white;
        opacity: 1;
        flex: 1;
    }

    .content-text {
        padding: 0 5% 0 5%;
        text-align: left;
    }

    #background {
        background-image: url('images/1876.jpg');
        opacity: 0.9;
        position: relative;

    }

    #background::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }
</style>
@endpush


@section('content')
<div id="background"
    class="fixed top-0 left-0 w-full h-full flex justify-center items-start text-center text-white font-ubuntuMonoRegular bg-cover bg-no-repeat">
    <div class="content-container">
        <div class="container mt-10">
            <div class="content">
                <div class="content-title text-[24px] font-bold">
                    <h4 class="inline-block border-t-2 p-6 border-white">
                        Tentang Kami
                    </h4>
                </div>

                <div class="content-text">
                    <p>
                        <b>RETERO</b> adalah situs ulasan aksesoris gaming yang didirikan pada tahun 2023 oleh Team
                        RETERO. RETERO berfokus untuk membantu para gamer seperti Anda membuat pilihan cerdas ketika
                        ingin berinvestasi pada aksesoris gaming.
                    </p>
                    <br>

                    <p>
                        Misi kami sederhana, yaitu memberikan peringkat yang jujur dan dapat diandalkan untuk dijadikan
                        acuan oleh Anda.
                    </p>
                    <br>

                    <p>
                        Apakah Anda sedang mencari headset terbaik, keyboard, mouse, atau aksesori gaming lainnya? Kami
                        siap membantu. Ulasan kami langsung, peringkat kami tidak memihak, dan tujuan kami adalah
                        meningkatkan pengalaman bermain Anda.
                    </p>
                    <br>

                    <p>
                        Mengapa Anda harus mempercayai kami?
                        Karena kami juga gamers. Kami memahami kegembiraan membuka kotak aksesori baru dan kekecewaan
                        ketika tidak sesuai harapan. Itulah sebabnya kami di sini - untuk berbagi pengalaman kami,
                        menguji aksesori gaming, dan membantu Anda menemukan tambahan yang sempurna untuk setup gaming
                        Anda.
                    </p>
                    <br>

                    <p>
                        Selamat bermain!
                    </p>
                </div>
            </div>

            <div class="content">
                <div class="content-title text-[24px] font-bold">
                    <h4 class="inline-block border-t-2 p-6 border-white">
                        Bagaimana Kami Menilai?
                    </h4>
                </div>

                <div class="content-text">
                    <p>
                        Kami bangga menjadi sumber ulasan aksesoris gaming yang <b>sepenuhnya independen</b>, tanpa
                        keterikatan dengan pihak manapun. Kami menawarkan pandangan objektif dan transparan untuk
                        membantu Anda membuat keputusan cerdas dalam memilih aksesoris gaming.
                    </p>
                    <br>
                    <p>
                        <b>Kriteria Penilaian Kami:</b>
                        <br>
                        1. <b>Uji Praktis:</b> Setiap produk kami uji secara langsung untuk mengevaluasi kinerja
                        sebenarnya dalam kondisi penggunaan nyata.
                        <br>
                        2. <b>Keandalan:</b> Kami memberikan penilaian berdasarkan keandalan produk seiring waktu,
                        membantu Anda membuat pilihan yang tahan lama.
                        <br>
                        3. <b>Analisis Mendalam:</b> Tim kami menganalisis fitur dan spesifikasi secara mendalam untuk
                        memberikan gambaran lengkap tentang setiap aksesoris.
                        <br>
                        4. <b>Feedback Pengguna: </b> Pendapat pengguna sangat berharga. Kami menyelidiki dan
                        mempertimbangkan ulasan pengguna untuk menggambarkan pengalaman pengguna secara menyeluruh.

                        <br><br>

                        <b>Transparansi Tanpa Batas:</b>
                    <p>
                        Anda dapat yakin bahwa ulasan kami didasarkan pada evaluasi tanpa intervensi eksternal. Kami
                        tidak menerima imbalan atau pengaruh dari produsen, memastikan bahwa pandangan kami sepenuhnya
                        independen.
                    </p>
                    </p>
                </div>
            </div>

            <div class="content">
                <div class="content-title text-[24px] font-bold">
                    <h4 class="inline-block border-t-2 p-6 border-white">
                        Kebijakan Privasi
                    </h4>
                </div>

                <div class="content-text text-left">


                    <h4 class="text-[20px] mb-2">
                        Kenapa kami mengumpulkan data pribadi Anda?
                    </h4>

                    <p>
                        Kami mengumpulkan data pribadi Anda untuk salah satu tujuan berikut:
                        <br>
                        1. Untuk membuat dan mengelola akun pribadi Anda di RETERO.
                        <br>
                        2. Untuk melakukan analisis guna memberikan produk yang relevan.
                        <br>
                        3. Untuk menganalisis data guna memberikan rekomendasi personal.

                    </p>


                </div>
            </div>

            <div class="content">
                <div class="content-title text-[24px] font-bold">
                    <h4 class="inline-block border-t-2 p-6 border-white">
                        Tim Kami
                    </h4>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                    <div class="p-4 rounded-md mx-auto flex flex-col items-center">
                        <img src="images/furina2.jpg" alt="Team Member 1"
                            class="w-auto h-40 object-cover rounded-md mb-2">
                        <h3 class="text-lg font-bold mb-1">Kaede</h3>
                        <p>Jungler</p>
                        <div class="socmed flex gap-2">
                            <a href="#" class="mt-2">
                                <i class="fa-brands fa-linkedin w-[100%] h-6"></i>
                            </a>
                            <a href="#" class="mt-2">
                                <i class="fa-brands fa-instagram w-auto h-6"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-4 rounded-md mx-auto flex flex-col items-center">
                        <img src="/images/favicon.jpg" alt="Team Member 2"
                            class="w-auto h-40 object-cover rounded-md mb-2">
                        <h3 class="text-lg font-bold mb-1">Kornelia</h3>
                        <p>Developer</p>
                        <div class="socmed flex gap-2">
                            <a href="#" class="mt-2">
                                <i class="fa-brands fa-linkedin w-[100%] h-6"></i>
                            </a>
                            <a href="#" class="mt-2">
                                <i class="fa-brands fa-instagram w-auto h-6"></i> </a>
                        </div>
                    </div>

                    <div class="p-4 rounded-md mx-auto flex flex-col items-center">
                        <img src="/images/favicon.jpg" alt="Team Member 3"
                            class="w-auto h-40 object-cover rounded-md mb-2">
                        <h3 class="text-lg font-bold mb-1">Ilyas</h3>
                        <p>Developer</p>
                        <div class="socmed flex gap-2">
                            <a href="#" class="mt-2">
                                <i class="fa-brands fa-linkedin w-[100%] h-6"></i>
                            </a>
                            <a href="#" class="mt-2">
                                <i class="fa-brands fa-instagram w-auto h-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection