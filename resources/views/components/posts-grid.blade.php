@props(['posts'])

<x-post-featured :post="$posts[0]" />

@if ($posts->count() > 1)
    <div class="grid grid-cols-6">
        @foreach($posts->skip(1) as $post)
            <x-post-card :post="$post" class="col-span-2"/>
        @endforeach
    </div>
@endif
