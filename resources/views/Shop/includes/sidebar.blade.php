<!-- CATEGORY-MENU-LIST START -->
<div class="left-category-menu hidden-sm hidden-xs">
    <div class="left-product-cat">
        <div class="category-heading">
            <h2>Категории</h2>
        </div>
        <div class="category-menu-list">
            <ul>
                <!-- Single menu start -->
                @foreach($categories as $category)
                <li class="arrow-plus">
                    <a href="{{ route('client.category', ['alias' => $category->alias]) }}">{{ $category->title }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- END CATEGORY-MENU-LIST -->