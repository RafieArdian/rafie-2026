<div
    class="
    bg-gradient-to-br
    from-slate-900
    via-slate-800
    to-slate-900
    text-white
    rounded-[32px]
    p-8
    shadow-xl
    ">

    <div class="mb-10">

        <span
            class="
            inline-flex
            px-4
            py-2
            rounded-full
            bg-blue-500/20
            text-blue-300
            text-sm
            font-medium
            ">

            Certifications

        </span>

        <h2
            class="
            text-3xl
            font-black
            mt-4
            ">

            Professional Certifications

        </h2>

    </div>

    <div class="space-y-5">

        @forelse($certifications as $certification)

            <div
                class="
                bg-white/5
                border
                border-white/10
                rounded-2xl
                p-5
                backdrop-blur
                hover:bg-white/10
                transition
                ">

                <h3
                    class="
                    font-semibold
                    text-lg
                    ">

                    {{ $certification->title }}

                </h3>

                <p
                    class="
                    text-blue-300
                    text-sm
                    mt-2
                    ">

                    {{ $certification->issuer }}

                </p>

            </div>

        @empty

            <div
                class="
                bg-white/5
                rounded-2xl
                p-5
                text-slate-400
                ">

                Belum ada sertifikasi.

            </div>

        @endforelse

    </div>

</div>