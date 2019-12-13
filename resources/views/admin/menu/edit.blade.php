@extends( 'layouts.backend.app' )

@push( 'css' )

@endpush

@section( 'content' )
    <div class="card ">
        <div class="card-body">
            <h5 class="mt-0">Update Menu</h5>
            <form action="{{ route('admin.menu.update',$menu->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-sm-12 col-lg-6  mo-b-15">
                        <input class="form-control" type="text" id="menu_name" name="menu_name" value="{{ $menu->menu_name }}">
                    </div>
                    <div class="col-sm-12 col-lg-6  mo-b-15">
                        <select name="parent_id" class="form-control">
                            <option value="0">none</option>
                            @each('admin.menu.partials.update',$parent,'parentmenu')
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </form>
        </div>
    </div>
@endsection

@push( 'script' )

@endpush