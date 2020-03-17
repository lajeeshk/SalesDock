@extends('layouts.app')

@section('content')
<h1>Welcome to dasboard</h1>
<p>Total {{count($products)}} Products </p>
<table class="table table-bordered">
    <tr>
        <th>Product Name</th>
        <th>Upload Speed</th>
        <th>Download Speed</th>
        <th>Technology</th>
        <th>Static Ip</th>
    </tr>
@foreach ($products as $product)
<tr>
    <td>{{$product->product_name}}</td>
    <td>{{$product->upload_speed}} Mb/s</td>
    <td>{{$product->download_speed}} Mb/s</td>
    <td>{{$product->technology}}</td>
    <td>@if($product->static_ip)Yes @else No @endif</td>
</tr>
@endforeach
</table>

<h3>Condtions applied to this result</h3>
<table class="table table-bordered" style="width: 50%">
    <tr>
        <th>Field</th>
        <th>Condtion</th>
        <th>Value</th>
    </tr>
    
    @foreach ($ruleDefinitions as $ruleDefinition)
        @foreach ($ruleDefinition as $ruleLabel => $ruleList)
        
        <tr><td colspan="3"><b>{{$ruleLabel}}</b></td></tr>
        @foreach ($ruleList as $rule)
        
        <tr>
            <td>{{$rule[0]}}</td>
            <td> {{$rule[1]}}</td>
            <td> {{$rule[2]}}</td>

        </tr>
        @endforeach
        @endforeach
    @endforeach  
</table>
@endsection