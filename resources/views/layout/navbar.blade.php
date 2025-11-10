<!-- Hero -->

<style>
    .nav {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .nav::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;
        background: linear-gradient(90deg, #000000, #112D4E, #3F72AF, #4A70A9, #8FABD4, #F09C67, #F7E0A3);
        background-size: 110% auto;
        transition: all .10s;
        transform: translateX(-110%);

    }

    .nav:hover::after {

        transform: translateX(0.5%);
        animation: gradient-89 3s linear infinite;
    }
</style>

<div class="bg-white dark:bg-gray-950">
    <header class="absolute inset-x-0 top-0 z-50 backdrop-blur-xl bg-blue-50/5 rounded-b-4xl mx-5 shadow-2xl">
        <nav aria-label="Global" class="flex items-center justify-between px-24 py-5">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5">
                    <img src="/assets/images/stardig.png" alt="" class="h-10 w-auto">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu"
                    class="-m-2.5 inline-flex items-right justify-end rounded-md p-2.5 text-gray-700 dark:text-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="nav text-lg font-park font-semibold text-gray-900 dark:text-white px-5">Home</a>
                <a href="#" class="nav text-lg font-park font-semibold text-gray-900 dark:text-white px-5">About</a>
                <a href="#" class="nav text-lg font-park font-semibold text-gray-900 dark:text-white px-5">Project</a>
                <a href="#"
                    class="nav text-lg font-park font-semibold text-gray-900 dark:text-white px-2">Testimonials</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#"
                    class="text-sm/6 font-semibold py-2 px-5 rounded-xl text-gray-900 dark:text-white hover:bg-sky-300/20 hover:shadow-xl">Contact</a>
            </div>
        </nav>

        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <div class="flex flex-1 justify-end">
                        <button type="button" class="-m-3 p-3 focus-visible:-outline-offset-4">
                            <span class="sr-only">Dismiss</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                class="size-5 text-gray-100">
                                <path
                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                            </svg>
                        </button>
                    </div>
                    <el-dialog-panel
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-gray-900 dark:sm:ring-gray-100/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="" class="h-8 w-auto dark:hidden" />
                                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                    alt="" class="h-8 w-auto not-dark:hidden" />
                            </a>
                            <button type="button" command="close" commandfor="mobile-menu"
                                class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-200">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10 dark:divide-white/10">
                                <div class="space-y-2 py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Home</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">About</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Service</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Project</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Contact</a>
                                </div>
                                <div class="py-6">
                                    Thanks You
                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>


    </header>
</div>