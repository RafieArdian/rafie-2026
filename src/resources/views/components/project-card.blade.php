@props(['project'])

<div class="bg-white rounded-lg shadow overflow-hidden">

    @if($project->image)
        <img
            src="{{ asset('storage/'.$project->image) }}"
            class="w-full h-48 object-cover"
        >
    @endif

    <div class="p-5">

        <h3 class="font-bold text-xl">
            {{ $project->title }}
        </h3>

        <p class="mt-3">
            {{ $project->description }}
        </p>

        <p class="text-sm text-gray-500 mt-3">
            {{ $project->tech_stack }}
        </p>

    </div>

</div>