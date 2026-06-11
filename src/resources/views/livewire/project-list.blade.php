<div class="w-full">
    <div class="mb-6">
        <input wire:model.debounce.300ms="search" type="text" placeholder="Search projects..." class="w-full px-3 py-2 border rounded">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($projects as $project)
            <div class="group bg-white border p-4 rounded shadow-sm">
                <div class="aspect-video bg-gray-100 rounded mb-4 overflow-hidden">
                    <img src="{{ $project->image ?? 'https://via.placeholder.com/800x450?text=Project' }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                </div>
                <h3 class="font-semibold text-lg">{{ $project->title ?? 'Untitled' }}</h3>
                <p class="text-sm text-gray-600">{{ ">" }}</p>
                <div class="mt-2 text-xs text-gray-500">{{ optional($project->created_at)->diffForHumans() }}</div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $projects->links() }}
    </div>
</div>
