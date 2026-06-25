@props([
    'projects',
])

<section id="projects" class="py-24">

    <div class="text-center mb-16">

        <span
            class="inline-flex px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">

            Portfolio

        </span>

        <h2
            class="text-4xl lg:text-5xl font-black mt-6 tracking-tight">

            Featured Projects

        </h2>

        <p
            class="mt-4 text-slate-500 max-w-2xl mx-auto">

            Beberapa project yang pernah saya kerjakan menggunakan Laravel,
            Livewire, Filament dan teknologi modern lainnya.

        </p>

    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($projects as $project)

            <div
                class="
                group
                bg-white
                rounded-[28px]
                overflow-hidden
                border
                border-slate-100
                shadow-sm
                hover:shadow-2xl
                hover:-translate-y-2
                transition-all
                duration-300
                ">

                @if($project->image)

                    <img
                        src="{{ Storage::url($project->image) }}"
                        class="
                        w-full
                        h-56
                        object-cover
                        group-hover:scale-105
                        transition
                        duration-500
                        ">

                @else

                    <div
                        class="
                        h-56
                        bg-gradient-to-br
                        from-blue-100
                        to-indigo-100
                        flex
                        items-center
                        justify-center
                        text-blue-700
                        font-semibold
                        ">

                        No Preview

                    </div>

                @endif

                <div class="p-6">

                    <h3 class="text-xl font-bold">
                        {{ $project->title }}
                    </h3>

                    <p class="mt-4 text-slate-600 text-sm leading-7">
                        {{ \Illuminate\Support\Str::limit($project->description, 120) }}
                    </p>

                    <div class="flex flex-wrap gap-2 mt-5">

                        @foreach(explode(',', $project->tech_stack) as $tech)

                            <span
                                class="
                                px-3
                                py-1
                                rounded-lg
                                bg-blue-50
                                text-blue-700
                                text-xs
                                font-medium
                                ">

                                {{ trim($tech) }}

                            </span>

                        @endforeach

                    </div>

                    <div class="flex gap-3 mt-6">

                        @if($project->github_url)

                            <a
                                href="{{ $project->github_url }}"
                                target="_blank"
                                class="
                                flex-1
                                text-center
                                bg-slate-900
                                text-white
                                py-3
                                rounded-xl
                                font-medium
                                ">

                                Github

                            </a>

                        @endif

                        @if($project->demo_url)

                            <a
                                href="{{ $project->demo_url }}"
                                target="_blank"
                                class="
                                flex-1
                                text-center
                                bg-blue-600
                                text-white
                                py-3
                                rounded-xl
                                font-medium
                                ">

                                Live Demo

                            </a>

                        @endif

                    </div>

                </div>

            </div>

        @empty

            <div class="col-span-3 text-center py-20">

                <p class="text-slate-500">
                    Belum ada project yang ditambahkan.
                </p>

            </div>

        @endforelse

    </div>

</section>