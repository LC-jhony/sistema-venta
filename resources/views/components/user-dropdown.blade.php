<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex items-center gap-3 w-full px-3 py-2 text-sm font-medium text-stone-500 hover:text-stone-900 dark:text-stone-400 dark:hover:text-stone-100 bg-transparent hover:bg-stone-200/20 dark:hover:bg-stone-800/30 rounded-lg transition-all duration-200">
        <div class="shrink-0 w-7 h-7 rounded-full bg-stone-200 dark:bg-stone-800 flex items-center justify-center text-[10px] font-bold text-stone-600 dark:text-stone-400 ring-1 ring-stone-900/5 dark:ring-white/5">
            {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 2)) }}
        </div>
        <span class="truncate transition-colors duration-200">{{ Auth::user()->name ?? 'Usuario' }}</span>
        <svg class="w-3.5 h-3.5 ml-auto text-stone-400 transition-transform duration-200"
            :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 translate-y-1 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-1 scale-95"
        class="absolute bottom-full left-0 right-0 z-10 mb-2 bg-white dark:bg-stone-900 rounded-xl border border-stone-200 dark:border-stone-800 shadow-xl shadow-stone-900/5 dark:shadow-none ring-1 ring-stone-900/5 dark:ring-white/5">
        <div class="p-1.5">
            <a href="#"
                class="flex items-center gap-2.5 px-3 py-2 text-sm font-medium text-stone-600 dark:text-stone-400 hover:text-red-600 dark:hover:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/30 rounded-lg transition-all duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Cerrar sesión
            </a>
        </div>
    </div>
</div>
