@props(['type' => 'success', 'message'])

@php
    $bgColor =
        [
            'success' => 'bg-blue-500 ',
            'error' => 'bg-red-500 ',
            'warning' => 'bg-yellow-500 ',
            'info' => 'bg-blue-500 ',
        ][$type] ?? '';
    $hover =
        [
            'success' => ' hover:bg-green-700',
            'error' => ' hover:bg-red-700',
            'warning' => ' hover:bg-yellow-700',
            'info' => ' hover:bg-blue-700',
        ][$type] ?? '';
@endphp

@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-x-5"
        x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300 transform"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-5"
        class="fixed top-0 right-0 p-4 m-4 rounded-lg text-white flex gap-2 shadow-lg justify-center {{ $bgColor }} z-[999]">

        {{ $message }}

        <div class="rounded-md p-1 cursor-pointer {{ $hover }}" @click="show = false">
            <div class="rotate-45">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d=" M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
        </div>
    </div>
@endif
