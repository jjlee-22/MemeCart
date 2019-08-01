@extends('layouts/app')

@section('content')
    <h1>Cart</h1>
    @if(count($items) > 0)
    <table class="table table-hover">
        <tr class="info">
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
            <th></th>
        </tr>
        @foreach($items as $row)
            <tr>
                <td>
                    <p><strong>{{$row->name}}</strong></p>
                </td>
                <td>
                    {!!Form::open(['action' => ['CartController@updatecart', $row->rowId], 'method' => 'POST'])!!}
                    <div class="col-xs-2">
                        {{Form::number('quantity', $row->qty, ['class' => 'form-control'])}}
                    </div>
                        {{Form::submit('Update', ['class' => 'btn btn-primary btn-xs'])}}
                    {!!Form::close()!!}
                </td>
                <td>${{$row->price}}</td>
                <td>${{$row->subtotal}}</td>
                <td>
                    {!!Form::open(['action' => ['CartController@removeitem', $row->rowId], 'method' => 'POST'])!!}
                        {{Form::submit('Remove', ['class' => 'btn btn-danger btn-xs'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5" style="text-align: right">Sub-Total: ${{$subtotal}}</td>
        </tr>
        <tr>
            <td colspan="5" style="text-align: right">Taxes: ${{$tax}}</td>
        </tr>
        <tr>
            <td colspan="5" style="text-align: right"><strong>Total: ${{$total}}</strong></td>
        </tr>
    </table>
    <a href="/checkout" class="btn btn-success pull-right">Checkout</a>
    {!!Form::open(['action' => 'CartController@emptycart', 'method' => 'POST'])!!}
		{{Form::submit('Empty Cart', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @else
     <p>Your shopping cart is empty!</p>
    @endif
@endsection