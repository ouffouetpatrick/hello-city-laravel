<footer>
            
    <p class="text-gray-400">
        &copy; Copyright {{ date('Y') }}

        @if(! Route::is('contact'))
            &middot;<a href="{{ route('contact') }}" class="text-indigo-500 hover:text-indigo-600 underline">Contact me</a>
        @endif
    </p>
</footer>