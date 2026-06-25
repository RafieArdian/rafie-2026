<section id="contact">

    <div
        class="
        relative
        overflow-hidden
        rounded-[32px]
        bg-gradient-to-r
        from-blue-600
        via-blue-700
        to-indigo-700
        p-12
        lg:p-16
        text-white
        shadow-2xl
        ">

        <div
            class="
            absolute
            top-0
            right-0
            w-72
            h-72
            bg-white/10
            rounded-full
            blur-3xl
            ">
        </div>

        <div class="relative z-10">

            <span
                class="
                inline-flex
                px-4
                py-2
                rounded-full
                bg-white/20
                text-sm
                font-medium
                ">

                🚀 Available for Collaboration

            </span>

            <h2
                class="
                text-4xl
                lg:text-5xl
                font-black
                mt-6
                tracking-tight
                ">

                Mari Bangun Sesuatu
                yang Hebat Bersama.

            </h2>

            <p
                class="
                mt-6
                text-blue-100
                max-w-2xl
                text-lg
                leading-8
                ">

                Saya terbuka untuk peluang magang,
                freelance project,
                pengembangan website,
                maupun kolaborasi software engineering.

            </p>

            <div
                class="
                flex
                flex-wrap
                gap-4
                mt-10
                ">

                @if($profile?->email)

                    <a
                        href="mailto:{{ $profile->email }}"
                        class="
                        bg-white
                        text-blue-700
                        px-6
                        py-3
                        rounded-xl
                        font-semibold
                        hover:scale-105
                        transition
                        ">

                        Email Saya

                    </a>

                @endif

                @if($profile?->github)

                    <a
                        href="{{ $profile->github }}"
                        target="_blank"
                        class="
                        border
                        border-white/30
                        px-6
                        py-3
                        rounded-xl
                        hover:bg-white/10
                        transition
                        ">

                        Github

                    </a>

                @endif

                @if($profile?->linkedin)

                    <a
                        href="{{ $profile->linkedin }}"
                        target="_blank"
                        class="
                        border
                        border-white/30
                        px-6
                        py-3
                        rounded-xl
                        hover:bg-white/10
                        transition
                        ">

                        LinkedIn

                    </a>

                @endif

            </div>

        </div>

    </div>

</section>