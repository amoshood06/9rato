@if(session()->has('error'))
    <div class="mb-6">
        <span class="inline-block w-full bg-red-100 text-red-700 text-sm font-medium px-4 py-2 rounded-lg shadow">
            {{ session('error') }}
        </span>
    </div>
@endif
