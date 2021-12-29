@extends('app')

@section('content')
<table class="table table-hover">
    <tr class="table-dark">
        <th>ID</th>
        <th>product category</th>
        

    </tr>
    @foreach ($product_categories as $product_category)
        <tr>
            <th>{{ $product_category -> id }}</th>

        </tr>
    @endforeach
    
</table>
    

@endsection