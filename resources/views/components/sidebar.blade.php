<div @click.away='open=false'
    class='flex flex-col w-full text-stone-600 dark:text-stone-400
         bg-stone-50 md:w-64 border-r border-stone-200 dark:bg-stone-950 dark:border-stone-800'
    x-data='{open: false}'>

    <div class='flex flex-row items-center justify-between px-4 py-4'>
        {{ $header }}
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline text-stone-500 dark:text-stone-400"
            @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <nav :class="{ 'flex': open, 'hidden': !open }"
        class="flex-grow flex flex-col px-4 pb-4 md:flex md:pb-0 md:overflow-y-auto">

        <!-- Buscador Minimalista Redondeado -->
        <div class="mb-6 mt-2">
            <div x-data="{ q: '' }"
                class="flex items-center gap-2.5 px-3.5 py-2 bg-stone-200/40 dark:bg-stone-800/40 rounded-xl border border-transparent focus-within:border-stone-300 dark:focus-within:border-stone-700 transition-all duration-300">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                    class="text-stone-400 dark:text-stone-500">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input x-model="q" type="text" placeholder="Search..."
                    class="flex-1 bg-transparent border-none outline-none text-[13px] font-medium text-stone-700 dark:text-stone-300 placeholder:text-stone-400 dark:placeholder:text-stone-600 focus:ring-0" />
            </div>
        </div>

        <div class="flex-grow">
            {{ $slot }}
        </div>

        <div class="mt-auto pt-4">
            <x-user-dropdown />
        </div>
    </nav>

</div>
