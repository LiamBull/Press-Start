@extends ('layout.master')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>Inventory Information
                <small>
                    <span class="btn-group pull-right">
                        <a href="/item/create" class="btn btn-primary">New Item</a>
                    </span>
                </small>
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Developer</th>
                        <th>Release Date</th>
                        <th>Price</th>
                        <th>Condition</th>
                        <th>Console</th>
                        <th class="text-right">Edit</th>
                        <th class="text-right">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- This will likely become a foreach. This is just for demo purposes -->
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->itemName }}</td>
                            <td>{{ $item->developer }}</td>
                            <td>{{ $item->releaseDate }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->condition }}</td>
                            <td>{{ $item->console }}</td>
                            <td class="text-right"><a href="/item/{{ $item->id }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a></td>
                            <td class="text-right"><a href="/item/{{ $item->id }}/delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection