<option value="{{ $menu->id }}">{{ $menu->menu_name }}</option>

@if (count($menu->children) > 0)

    @foreach($menu->children as $menu)
        @include('admin.menu.partials.create', $menu)
    @endforeach


@endif

{{--@if ((count($category->children) > 0) AND ($category->parent_id > 0))--}}

{{--<li><a href="#">{{ $category->menu_name }} <i class="fa fa-chevron-right"></i></a>--}}

{{--@else--}}
{{--<li><a href="#">{{ $category->menu_name }}</a>--}}
{{--<option value="{{ $category->id }}">{{ $category->menu_name }}</option>--}}
{{--@endif--}}

{{--@if (count($category->children) > 0)--}}

{{--<ul>--}}

{{--@foreach($category->children as $category)--}}
{{--@include('admin.menu.partials.menu', $category)--}}
{{--@endforeach--}}

{{--</ul>--}}

{{--@endif--}}

{{--</li>--}}