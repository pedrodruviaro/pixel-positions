<x-layout>
    <div class="space-y-10">

        <section class="flex flex-col pt-6 pb-10 items-center justify-center gap-6 text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="w-full max-w-xl">
                <input type="text" placeholder="Web Developer..."
                    class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full">
            </form>
        </section>

        <section>
            <x-section-heading>Features Jobs</x-section-heading>

            <div class="mt-6 grid lg:grid-cols-3 gap-8">
                @foreach ($featured_jobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 flex flex-wrap gap-2">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
