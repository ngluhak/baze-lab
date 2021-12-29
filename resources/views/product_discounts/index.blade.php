@extends('app')

@section('content')
<table class="table table-hover">
    <tr class="table-dark">
        <th>ID</th>
        <th>product discount</th>
        

    </tr>
    @foreach ($product_discounts as $product_discount)
        <tr>
            <th>{{ $product_discount -> id }}</th>

        </tr>
    @endforeach
    
</table>

@endsection