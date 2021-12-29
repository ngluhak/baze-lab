@extends('app')

@section('content')
    
<table class="table table-hover">
    <caption>List of products</caption>
    <thead>
        <tr class="table-dark">
            <th>ID</th>
            <th>product name</th>
            

        </tr>
    </thead>
    @foreach ($products as $product)
        <tbody>
            <tr >
                <th>{{ $product -> id }}</th>
                <th>{{ $product -> price }}</th>

            </tr>
        </tbody>
    @endforeach
    
    
</table>


@endsection