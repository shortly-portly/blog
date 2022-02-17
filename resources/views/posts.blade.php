<x-layout>
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h1>
        <div>
            {{ $post->excerpt }}
        </div>
    </article>
    @endforeach
</x-layout>


Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti est facilis corporis reiciendis, eligendi mollitia ipsam quo ullam sint facere non, tempora quis ad. Nobis omnis iure voluptates magni recusandae.