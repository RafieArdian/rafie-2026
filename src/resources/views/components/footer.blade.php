<footer
    class="
    border-t
    border-slate-200
    bg-white
    ">

<div
    class="
    max-w-6xl
    mx-auto
    px-6
    py-12
    ">

    <div
        class="
        flex
        flex-col
        md:flex-row
        justify-between
        items-center
        gap-6
        ">

        <div>

            <h3
                class="
                text-2xl
                font-black
                tracking-tight
                ">

                <span class="text-slate-900">
                    Rafie
                </span>

                <span class="text-blue-600">
                    .dev
                </span>

            </h3>

            <p
                class="
                text-slate-500
                mt-2
                ">

                {{ $profile?->title ?? 'Fullstack Developer' }}

            </p>

        </div>

        <div
            class="
            flex
            gap-6
            text-sm
            text-slate-500
            ">

            @if($profile?->github)

                <a
                    href="{{ $profile->github }}"
                    target="_blank"
                    class="hover:text-blue-600 transition">

                    Github

                </a>

            @endif

            @if($profile?->linkedin)

                <a
                    href="{{ $profile->linkedin }}"
                    target="_blank"
                    class="hover:text-blue-600 transition">

                    LinkedIn

                </a>

            @endif

            @if($profile?->email)

                <a
                    href="mailto:{{ $profile->email }}"
                    class="hover:text-blue-600 transition">

                    Email

                </a>

            @endif

        </div>

    </div>

    <div
        class="
        mt-8
        pt-8
        border-t
        border-slate-100
        text-center
        text-sm
        text-slate-400
        ">

        © {{ now()->year }}
        {{ $profile?->name ?? 'Portfolio' }}.
        All Rights Reserved.

    </div>

</div>

</footer>
