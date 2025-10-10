@php
    use App\Models\CategoryPost;
    use App\Models\CategorySoftware;
    $categories_post = CategoryPost::all();
    $categories_software = CategorySoftware::whereNull('parent_id')->with('children')->get();

@endphp
<ul class="main-menu__list">
    <li class="">
        <a href="{{ route('portfolio') }}">TRANG CHỦ</a>
    </li>
    <li @if (request()->is(['thiet-ke-website'])) class="current" @endif>
        <a href="{{ route('thiet-ke-website') }}">THIẾT KẾ WEBSITE</a>
    </li>

    <li class="dropdown @if (request()->is('software/*')) current @endif">
        <a href="{{ route('software') }}">PHẦN MỀM</a>
        <ul class="">
            @foreach ($categories_software as $category)
                <li class="@if ($category->children->count()) dropdown-submenu @endif">
                    <a href="{{ route('category.software.show', $category->slug) }}"
                        class="@if (request()->is('software/' . $category->slug)) active @endif">
                        {{ $category->name }}
                    </a>

                    {{-- Danh mục con --}}
                    @if ($category->children->count())
                        <ul class="submenu">
                            @foreach ($category->children as $child)
                                <li>
                                    <a href="{{ route('category.software.show', $child->slug) }}"
                                        class="@if (request()->is('software/' . $child->slug)) active @endif">
                                        {{ $child->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </li>
    <li class="dropdown @if (request()->is('category/*')) current @endif">
        <a href="{{ route('blog') }}">BÀI VIẾT</a>
        <ul class="">
            @foreach ($categories_post as $category)
                <li>
                    <a href="{{ route('category.post.show', $category->slug) }}"
                        class="@if (request()->is('category/' . $category->slug)) active @endif">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </li>



</ul>
