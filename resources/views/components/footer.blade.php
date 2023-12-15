<div>
    <footer class="bg-footer border-t-2 dark:bg-button dark:text-[#000] border-t-2">
        <div>
            <div class="md:flex md:justify-between ">
                <img src="{{ asset('images/retero.png') }}" class="w-[250px] mr-3 mt-8" alt="Retero logo" />
                <div class="grid grid-cols-2 gap-8 sm:gap-8 sm:grid-cols-3 py-4">
                    <div>
                        <h2 class="mb-6 text-[25px] font-ubuntuMonoBold uppercase dark:text-white">Layanan</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-2">
                                <a href="{{ route('randomProduct', ['categoryId' => 2]) }}" class="hover:underline font-ubuntuMonoRegular">Ulasan Aksesoris Komputer</a>
                            </li>
                            <li>
                                <a href="{{ route('randomProduct', ['categoryId' => 1]) }}" class="hover:underline font-ubuntuMonoRegular">Ulasan Komputer</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-[25px] font-ubuntuMonoBold text-gray-900 uppercase dark:text-white">
                            Perusahaan</h2>
                        <ul class="text-gray-500  font-medium">
                            <li class="mb-2">
                                <a href="/aboutUs" class="hover:underline font-ubuntuMonoRegular ">Tentang Kami</a>
                            </li>
                            {{-- <li class="mb-2">
                                <a href="#" class="hover:underline font-ubuntuMonoRegular">Bagaimana Kami Menilai</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline font-ubuntuMonoRegular">Kebijakan Privasi</a>
                            </li> --}}
                            <li>
                                <a href="#" class="hover:underline font-ubuntuMonoRegular">Ketentuan Penggunaan</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-[25px] font-ubuntuMonoBold dark:text-white">Kontak Kami</h2>
                        <ul class="list-none dark:text-gray-400">
                          <li class="mb-2">
                                <a href="mailto:reteroreview@gmail.com">
                                    <span class="font-ubuntuMonoRegular">reteroreview@gmail.com</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <span class="font-ubuntuMonoRegular">(+62) 878-9573-2862</span>
                            </li>
                            <li>
                                <a href="/contact">Reach out to us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div style="color: white" class="w-full p-2 text-center text-[14px] bg-copyright font-ubuntuMonoBold">
            © 2023 Copyright,
            <a class="font-ubuntuMonoBold" href="#">All Rights Reserved | Teams</a>
        </div>
    </footer>
</div>