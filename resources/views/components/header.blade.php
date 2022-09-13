<div class="fixed z-20 flex justify-between w-full p-6 bg-white md:hidden ">
    <p class="font-semibold text-primary">Naladhipa Courses</p>
    <nav x-data="{ open: false }">
        <button class="relative w-10 h-10 text-gray-500 bg-white mobile-menu-button focus:outline-none"
            @click="open = !open">
            <span class="sr-only">Open main menu</span>
            <div class="absolute block w-5 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <span aria-hidden="true"
                    class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                    :class="{ 'rotate-45': open, ' -translate-y-1.5': !open }"></span>
                <span aria-hidden="true"
                    class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                    :class="{ 'opacity-0': open }"></span>
                <span aria-hidden="true"
                    class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                    :class="{ '-rotate-45': open, ' translate-y-1.5': !open }"></span>
            </div>
        </button>
    </nav>
</div>
