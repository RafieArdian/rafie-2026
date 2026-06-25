<div
    class="
    bg-white
    rounded-3xl
    p-8
    border
    border-slate-100
    shadow-sm
    ">

    <span class="text-blue-600 font-semibold">
        Education
    </span>

    <h2 class="text-3xl font-bold mt-2 mb-8">
        Pendidikan
    </h2>

    @forelse($educations as $education)

        <div class="border-l-4 border-blue-500 pl-5 mb-8">

            <h3 class="font-bold text-lg">
                {{ $education->institution }}
            </h3>

            <p class="text-slate-600 mt-1">
                {{ $education->major }}
            </p>

            <p class="text-sm text-slate-400 mt-2">
                {{ $education->period }}
            </p>

            @if(!empty($education->description))

                <p class="mt-3 text-sm text-slate-500 leading-6">
                    {{ $education->description }}
                </p>

            @endif

        </div>

    @empty

        <p class="text-slate-500">
            Belum ada data pendidikan.
        </p>

    @endforelse

</div>