<div @click.away='open=false'
    class='flex flex-col w-full text-stone-600 dark:text-stone-400 bg-stone-50 md:w-64 border-r border-stone-200 dark:bg-stone-950 dark:border-stone-800'
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
                class="flex items-center gap-2 px-3 py-1.5 bg-stone-200/40 dark:bg-stone-800/40 rounded-lg border border-transparent focus-within:border-stone-300 dark:focus-within:border-stone-700 transition-all duration-300">
                <svg class="w-4 h-4 text-stone-400 dark:text-stone-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input x-model="q" type="text" placeholder="Search..."
                    class="flex-1 bg-transparent border-none outline-none text-[13px] font-medium text-stone-700 dark:text-stone-300 placeholder:text-stone-400 dark:placeholder:text-stone-600 focus:ring-0 p-0" />
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
