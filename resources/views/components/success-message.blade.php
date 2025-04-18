@if(session()->has('success'))
    <div class="mb-6">
        <span class="inline-block w-full bg-green-100 text-green-700 text-sm font-medium px-4 py-2 rounded-lg shadow">
            {{ session('success') }}
        </span>
    </div>
@endif