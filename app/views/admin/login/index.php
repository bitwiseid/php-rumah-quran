<div class="flex justify-center items-center h-full min-h-screen p-4 bg-cover bg-center"
    style="background-image: url('<?= BASEURL ?>/favicon/islamic.png');">
    <div class="max-w-md w-full mx-auto">
        <form action="<?= BASEURL_ADMIN ?>/login/autentikasi" method="POST" class="bg-opacity-80 bg-white rounded-2xl p-6 shadow-2xl">

            <div class="text-center">
                <h3 class="text-blue-900 text-3xl font-extrabold">Login</h3>
                <img class="h-44 mx-auto mt-4" src="<?= BASEURL ?>/favicon/logo.png" alt="Logo">
            </div>

            <div class="mt-6">
                <div class="relative flex items-center">
                    <input name="username" id="username" type="text" required
                        class="w-full p-2 border border-gray-300 rounded-2xl outline-none shadow-inner"
                        placeholder="Enter username">
                    <svg class="w-6 h-6 text-gray-800 absolute right-2 top-1/2 transform -translate-y-1/2"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 20a7.966 7.966 0 0 1-5.002-1.756v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div class="mt-6">
                <div class="relative flex items-center">
                    <input name="password" id="password" type="password" required
                        class="w-full p-2 border border-gray-300 rounded-2xl outline-none shadow-inner"
                        placeholder="Enter password">
                    <svg class="w-6 h-6 text-gray-800 absolute right-2 top-1/2 transform -translate-y-1/2"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
                <div>
                    <a href="javascript:void(0);" class="text-blue-600 text-sm font-semibold hover:underline">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <div class="mt-12">
                <button type="submit"
                    class="w-full py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-blue-900 hover:bg-blue-950 focus:outline-none">
                    Sign in
                </button>
                <p class="text-gray-800 text-sm text-center mt-6">Don't have an account?
                    <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline">Register here</a>
                </p>
            </div>
        </form>
    </div>
</div>