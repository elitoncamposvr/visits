@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' border-0 bg-zinc-900 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
