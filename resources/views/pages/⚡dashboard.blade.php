<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-stone-800 dark:text-stone-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot:header>
    Welcome to your dashboard!
</div>
