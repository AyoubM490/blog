<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article class="{{$loop->even ? 'mb-6' : ''}}">
                <a href="/posts/{{$post->slug}}">
                    <h1>{{$post->title}}</h1>
                </a>

                <div>
                        <?= $post->excerpt; ?>
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
