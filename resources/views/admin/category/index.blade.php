@extends( 'layouts.backend.app' )
@section('title','Category')
@push( 'css' )
    <!-- DataTables -->
    <link href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/backend/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section( 'content' )
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">

                        <h5 class="mt-0">All Category and Subcategory</h5>
                    {{--@each('admin.menu.partials.menu',$categories,'category')--}}
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-soft-success float-right mb-3" data-toggle="modal" data-target="#menuModal">
                            <span class="mdi mdi-menu"></span> Create Category
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.category.store') }}" method="post" id="menu">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Category</label>
                                                <input class="form-control" type="text" id="name" placeholder="Name" name="menu_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="parent_menu">Parent Category</label>
                                                <select class="form-control" name="parent_id">
                                                    <option value="0">None</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-soft-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-soft-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @foreach($parentCategories as $category)
                            <ul>
                                <li>{{$category->name}}</li>
                                @if(count($category->subcategory))
                                    @include('subCategoryList',['subcategories' => $category->subcategory])
                                @endif
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection

@push( 'js' )
    <!-- Required datatable js -->
    <script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
@endpush