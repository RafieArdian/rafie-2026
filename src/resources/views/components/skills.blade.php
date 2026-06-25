<section id="skills" class="py-24">

<div class="text-center mb-16">

    <span
        class="
        inline-flex
        px-4
        py-2
        rounded-full
        bg-blue-100
        text-blue-700
        text-sm
        font-medium
        ">

        Tech Stack

    </span>

    <h2
        class="
        text-4xl
        lg:text-5xl
        font-black
        tracking-tight
        mt-6
        ">

        Skills & Learning Journey

    </h2>

    <p
        class="
        mt-4
        text-slate-500
        max-w-2xl
        mx-auto
        ">

        Teknologi yang saya gunakan saat ini dan
        teknologi yang sedang saya pelajari untuk
        pengembangan karier sebagai software engineer.

    </p>

</div>

<div class="grid lg:grid-cols-2 gap-8">

    {{-- CURRENT SKILLS --}}
    <div
        class="
        bg-white
        rounded-[28px]
        border
        border-slate-100
        shadow-sm
        p-8
        ">

        <div class="flex items-center gap-3 mb-8">

            <div
                class="
                w-3
                h-3
                rounded-full
                bg-green-500
                ">
            </div>

            <h3
                class="
                text-2xl
                font-bold
                ">

                Current Skills

            </h3>

        </div>

        <div class="flex flex-wrap gap-3">

            @forelse($currentSkills as $skill)

                <span
                    class="
                    px-4
                    py-2
                    rounded-xl
                    bg-slate-100
                    text-slate-700
                    font-medium
                    hover:bg-blue-100
                    hover:text-blue-700
                    transition
                    ">

                    {{ $skill->name }}

                </span>

            @empty

                <p class="text-slate-400">

                    Belum ada skill ditambahkan.

                </p>

            @endforelse

        </div>

    </div>

    {{-- LEARNING SKILLS --}}
    <div
        class="
        bg-gradient-to-br
        from-blue-600
        to-indigo-700
        rounded-[28px]
        text-white
        shadow-xl
        p-8
        ">

        <div class="flex items-center gap-3 mb-8">

            <div
                class="
                w-3
                h-3
                rounded-full
                bg-white
                ">
            </div>

            <h3
                class="
                text-2xl
                font-bold
                ">

                Currently Learning

            </h3>

        </div>

        <div class="flex flex-wrap gap-3">

            @forelse($learningSkills as $skill)

                <span
                    class="
                    px-4
                    py-2
                    rounded-xl
                    bg-white/10
                    border
                    border-white/10
                    backdrop-blur
                    ">

                    {{ $skill->name }}

                </span>

            @empty

                <p class="text-blue-100">

                    Belum ada skill pembelajaran.

                </p>

            @endforelse

        </div>

    </div>

</div>

</section>
