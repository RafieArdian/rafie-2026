<div>

    <x-navbar :profile="$profile" />

    <main>

        <section class="max-w-7xl mx-auto px-6">

            <x-hero :profile="$profile" />

        </section>

        <section class="bg-white">

            <div class="max-w-7xl mx-auto px-6 py-24">

                <x-about :profile="$profile" />

            </div>

        </section>

        <section class="max-w-7xl mx-auto px-6 py-24">

            <x-skills
                :currentSkills="$currentSkills"
                :learningSkills="$learningSkills"
            />

        </section>

        <section class="bg-white">

            <div class="max-w-7xl mx-auto px-6 py-24">

                <x-projects :projects="$projects" />

            </div>

        </section>

        <section class="max-w-7xl mx-auto px-6 py-24">

            <div class="grid lg:grid-cols-2 gap-8">

                <x-education :educations="$educations" />

                <x-certifications
                    :certifications="$certifications"
                />

            </div>

        </section>

        <section class="bg-slate-900">

            <div class="max-w-7xl mx-auto px-6 py-24">

                <x-cta :profile="$profile" />

            </div>

        </section>

    </main>

    <x-footer :profile="$profile" />

</div>