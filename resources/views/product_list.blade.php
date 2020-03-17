@extends('layouts.app')

@section('content')
<h1>Welcome to dasboard</h1>
<p>Total {{count($products)}} Products </p>
<table class="table">
    <th>Product Name</th>
    <th>Upload Speed</th>
    <th>Download Speed</th>
    <th>Technology</th>
    <th>Static Ip</th>
@foreach ($products as $product)
<tr>
    <td>{{$product->product_name}}</td>
    <td>{{$product->upload_speed}} Mb/s</td>
    <td>{{$product->download_speed}} Mb/s</td>
    <td>{{$product->technology}}</td>
    <td>{{$product->static_ip}}</td>
</tr>
@endforeach
</table>
@endsection