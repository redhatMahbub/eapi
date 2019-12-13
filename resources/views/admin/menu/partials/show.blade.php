<tr>
    <td>{{ $menu->menu_name }}</td>
    <td>
        {{ $menu->parent['menu_name'] }}
    </td>
    <td>
        <a href="" class="btn btn-soft-info"><span class="mdi mdi-eye"></span></a>
        <a href="{{ route('admin.menu.edit',$menu->id) }}" class="btn btn-soft-warning"><span class="mdi mdi-pen"></span></a>
        <button type="button" onclick="deleteMenu({{ $menu->id }})" class="btn btn-soft-danger"><span class="mdi mdi-delete"></span></button>
        <form action="{{ route('admin.menu.destroy',$menu->id) }}" method="post" id="delete-menu-{{$menu->id}}" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </td>
</tr>
@if (count($menu->children) > 0)

    @foreach($menu->children as $menu)
        @include('admin.menu.partials.show', $menu)
    @endforeach


@endif