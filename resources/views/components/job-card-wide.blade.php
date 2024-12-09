@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">
            {{ $job->employer->name }}
        </a>
        <h3 class="font-bold text-lg lg:text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">Video
            {{ $job->title }}
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div class="space-x-2">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
