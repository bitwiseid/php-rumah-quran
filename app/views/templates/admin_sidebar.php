<aside id="logo-sidebar"
    class="fixed top-0 pl-6 pr-2 left-0 z-40 w-64 h-screen pt-20 pb-6 transition-transform -translate-x-full sm:translate-x-0 bg-blue-900"
    aria-label="Sidebar">
    <div class="h-fit max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow-xl px-3 pb-4 overflow-y-auto"
        style="scrollbar-width: none; -ms-overflow-style: none;">
        <ul class="space-y-2 font-medium">
            <?php if ($_SESSION['role'] === "admin") : ?>
                <li>
                    <a href="<?= BASEURL_ADMIN ?>/dashboard"
                        class="flex items-center p-2 text-blue-900 rounded-lg hover:bg-blue-900 group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3 transition duration-75 group-hover:text-white">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 rounded-lg transition duration-75 text-blue-900 hover:bg-blue-900 group"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg class="flex-shrink-0 w-5 h-5  transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z" />
                        </svg>
                        <span
                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap  transition duration-75 group-hover:text-white">Master
                            Data</span>
                        <svg class="w-3 h-3 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="<?= BASEURL_ADMIN ?>/user"
                                class="flex items-center w-full p-2 text-blue-900 transition duration-75 rounded-lg pl-11 hover:bg-blue-900 group">
                                <svg class="flex-shrink-0 w-5 h-5  transition duration-75 group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg><span class="ms-3 transition duration-75 group-hover:text-white">User</span></a>
                        </li>
                        <li>
                            <a href="<?= BASEURL_ADMIN ?>/santri"
                                class="flex items-center w-full p-2 text-blue-900 transition duration-75 rounded-lg pl-11 hover:bg-blue-900 group">
                                <svg class="flex-shrink-0 w-5 h-5  transition duration-75 group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg><span class="ms-3 transition duration-75 group-hover:text-white">Santri</span></a>
                        </li>
                        <li>
                            <a href="<?= BASEURL_ADMIN ?>/guru"
                                class="flex items-center w-full p-2 text-blue-900 transition duration-75 rounded-lg pl-11 hover:bg-blue-900 group">
                                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg><span class="ms-3 transition duration-75 group-hover:text-white">Guru</span></a>
                        </li>
                        <li>
                            <a href="<?= BASEURL_ADMIN ?>/orang_tua"
                                class="flex items-center w-full p-2 text-blue-900 transition duration-75 rounded-lg pl-11 hover:bg-blue-900 group">
                                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg><span class="ms-3 transition duration-75 group-hover:text-white">Orang Tua</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= BASEURL_ADMIN ?>/target"
                        class="flex items-center p-2 text-blue-900 rounded-lg  hover:bg-blue-900 group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Z" />
                            <path fill-rule="evenodd"
                                d="M11 7V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm4.707 5.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="flex-1 ms-3 whitespace-nowrap transition duration-75 group-hover:text-white">Target</span>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['role'] == 'guru'): ?>
                <li>
                    <a href="<?= BASEURL_ADMIN ?>/hafalan"
                        class="flex items-center p-2 text-blue-900 rounded-lg hover:bg-blue-900 group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                        </svg>
                        <span
                            class="flex-1 ms-3 whitespace-nowrap transition duration-75 group-hover:text-white">Hafalan</span>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <li>
                    <a href="<?= BASEURL_ADMIN ?>/laporan"
                        class="flex items-center p-2 text-blue-900 rounded-lg hover:bg-blue-900 group">
                        <svg class="w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path fill-rule="evenodd"
                                d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span
                            class="flex-1 ms-3 whitespace-nowrap transition duration-75 group-hover:text-white">Laporan</span>
                    </a>
                </li>
            <?php endif ?>
            <li>
                <a href="<?= BASEURL_ADMIN ?>/orang_tua/monitoring"
                    class="flex items-center p-2 text-blue-900 rounded-lg hover:bg-blue-900 group">
                    <svg class="w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1c0 1.1.9 2 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap transition duration-75 group-hover:text-white">Monitoring
                        Santri</span>
                </a>
            </li>
        </ul>
    </div>
</aside>