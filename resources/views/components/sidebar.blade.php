<div class="car-blog">
    <div class="sa">
        <h3>Категории</h3>

        @foreach ($categories as $category)
            <a href="{{route('by-category', $category)}}">
                <h1>#
                    {{ $category->title }} - {{ $category->total }}
                </h1>
            </a>
        @endforeach
    </div>
</div>
