@extends("layouts.master");

@section('title')
    Item list
@endsection

@section('content')

    <h4>I'm Item list</h4>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </thead>
        <tbody>
            @forelse ($items as $ea)
                <tr>
                    <td>{{$ea->id}}</td>
                    <td>{{$ea ->name}}</td>
                    <td>{{$ea ->price}}</td>
                    <td>{{$ea ->stock}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">
                        there is no created item <br>
                        <a href="{{route('item.create')}}" class="btn btn-primary">Create</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
