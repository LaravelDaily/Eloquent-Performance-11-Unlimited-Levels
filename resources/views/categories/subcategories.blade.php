@foreach ($categories as $category)
    <li>
        <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
        @if ($category->products_count) ({{ $category->products_count }}) @endif
    </li>
    @if ($category->subcategories)
        <ul>
            @include('categories.subcategories', ['categories' => $category->subcategories])
        </ul>
    @endif
@endforeach
