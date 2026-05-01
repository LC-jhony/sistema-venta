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
    <x-container>
        Welcome to your dashboard!
        <x-alert title="Any Message!" />

        <x-alert title="Any Message!" secondary />

        <x-alert title="Success Message!" positive />

        <x-alert title="Error Message!" negative />

        <x-alert title="Alert Message!" warning />

        <x-alert title="Information Message!" info />
    </x-container>
</div>
