<div class="flex items-center justify-between w-full">
    <div class="flex items-center gap-2.5">
        <div
            class="relative w-9 h-9 bg-stone-900 from-neutral-900 to-neutral-950 rounded-xl flex items-center justify-center shadow-lg shadow-neutral-900/20 ring-1 ring-white/10">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <circle cx="8" cy="8" r="6" stroke="#F9FAFB" stroke-width="1.6" />
                <circle cx="8" cy="8" r="2.5" fill="#F9FAFB" />
            </svg>
        </div>
        <span class="text-[15px] font-bold tracking-tight text-neutral-900 dark:text-neutral-100">System SALE</span>
    </div>

    <button type="button" x-on:click="dark = !dark" aria-label="Toggle dark mode"
        class="w-8 h-8 rounded-lg flex items-center justify-center text-neutral-500 hover:bg-neutral-100 dark:hover:bg-neutral-800 transition-colors">
        <svg x-show="!dark" x-cloak width="14" height="14" viewBox="0 0 16 16" fill="none">
            <circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.4" />
            <path
                d="M8 1v2M8 13v2M1 8h2M13 8h2M3.05 3.05l1.41 1.41M11.54 11.54l1.41 1.41M3.05 12.95l1.41-1.41M11.54 4.46l1.41-1.41"
                stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
        </svg>
        <svg x-show="dark" x-cloak width="14" height="14" viewBox="0 0 16 16" fill="none">
            <path d="M13.5 9.5A5.5 5.5 0 016.5 2.5a5.5 5.5 0 100 11 5.5 5.5 0 007-4z" stroke="currentColor"
                stroke-width="1.4" stroke-linecap="round" />
        </svg>
    </button>
</div>
