@extends('layouts/app')

@section('content')
    <h1>Cart</h1>
    @if(count($items) > 0)
    <table class="table table-hover">
        <tr class="warning">
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
            <th>Remove Item?</th>
        </tr>
        @foreach($items as $row)
            <tr>
                <td>
                    <p><strong>{{$row->name}}</strong></p>
                    <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                </td>
                <td><input type="text" value="{{$row->qty}}"></td>
                <td>${{$row->price}}</td>
                <td>${{$row->subtotal}}</td>
                <td>
                    {!!Form::open(['action' => ['CartController@removeitem', $row->id], 'method' => 'POST'])!!}
                        {{Form::submit('', ['class' => 'glyphicon glyphicon-minus-sign'])}}
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
            <td colspan="5" style="text-align: right">Total: ${{$total}}</td>
        </tr>
    </table>
    {!!Form::open(['action' => 'CartController@emptycart', 'method' => 'POST'])!!}
		{{Form::submit('Empty Cart', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
    @else
     <p>Your shopping cart is empty!</p>
    @endif
@endsection