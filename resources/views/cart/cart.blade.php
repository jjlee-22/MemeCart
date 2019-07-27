@extends('layouts/app')

@section('content')
    <h1>Cart</h1>
    @if(count(Cart::content()) > 0)
        <?php foreach(Cart::content() as $row) :?>
            <tr>
                <td>
                    <p><strong><?php echo $row->name; ?></strong></p>
                    <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                </td>
                    <td><input type="text" value="<?php echo $row->qty; ?>"></td>
                    <td>$<?php echo $row->price; ?></td>
                    <td>$<?php echo $row->total; ?></td>
            </tr>
        <?php endforeach;?>
    @else
     <p>Your shopping cart is empty!</p>
    @endif
@endsection