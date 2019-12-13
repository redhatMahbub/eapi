<option value="{{ $parentmenu->id }}">{{ $parentmenu->menu_name }}</option>
@if(count($parentmenu->children) > 0)
    @foreach($parentmenu->children as $parentmenu)
        @include('admin.menu.partials.update', $parentmenu)
    @endforeach
@endif