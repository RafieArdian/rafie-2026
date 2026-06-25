@props([
'profile',
])

<section class="relative min-h-screen flex items-center overflow-hidden">

<div class="absolute top-20 left-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-3xl"></div>
<div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-indigo-500/10 rounded-full blur-3xl"></div>

<div class="grid lg:grid-cols-2 gap-20 items-center w-full relative z-10">

    <div>

        <span class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
            🚀 Available for Collaboration
        </span>

        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-none tracking-tight mt-8">
            Hi, I'm
            <span class="block text-blue-600 mt-2">
                {{ $profile?->name ?? 'Nama Anda' }}
            </span>
        </h1>

        <p class="text-xl lg:text-2xl font-semibold text-slate-700 mt-5">
            {{ $profile?->title ?? 'Fullstack Developer' }}
        </p>

        <p class="mt-6 text-slate-600 text-lg leading-8 max-w-2xl">
            {{ \Illuminate\Support\Str::limit($profile?->about ?? 'Belum ada deskripsi.', 180) }}
        </p>

        <div class="flex flex-wrap gap-4 mt-10">

            <a href="#projects"
               class="bg-blue-600 hover:bg-blue-700 text-white px-7 py-4 rounded-2xl font-semibold transition">
                View Projects
            </a>

            <a href="#contact"
               class="bg-white border border-slate-200 px-7 py-4 rounded-2xl font-semibold hover:bg-slate-50 transition">
                Contact Me
            </a>

        </div>

    </div>

    <div class="flex justify-center">

        @if($profile?->photo)

            <div class="relative">

                <div class="absolute -inset-6 bg-blue-500/20 rounded-full blur-3xl"></div>

                <img
                    src="{{ Storage::url($profile->photo) }}"
                    class="relative w-[420px] h-[520px] object-cover object-top rounded-[32px] shadow-2xl border border-white">

            </div>

        @else

            <div class="w-[420px] h-[520px] rounded-[32px] bg-slate-200 flex items-center justify-center text-slate-500">
                Upload Photo
            </div>

        @endif

    </div>

</div>

</section>
