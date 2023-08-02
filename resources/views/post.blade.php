<x-layout>
    <x-slot name="content">
        <article>
            <a href="/posts/{{$post->slug}}">
                <h1>{{$post->title}}</h1>
            </a>

            <div>
                <?= $post->body; ?>
            </div>
            <a href="/">Go Back</a>
        </article>
    </x-slot>
</x-layout>
