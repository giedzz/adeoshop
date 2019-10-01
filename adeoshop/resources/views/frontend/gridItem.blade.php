@extends('layouts.app')
@section('content')
<div>
    
    <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">{{ $product -> name}}
            
        </h1>
        <h2><small>SKU: {{ $product -> sku}}</small></h2>
        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src='{{ asset("public/images/$product->image") }}' alt="">
            </div>
            <div class="col-md-4">
                <h3 class="my-3">About item</h3>
                <p>{{ $product-> description}}</p>
            </div>
        </div>
        <!-- /.row -->


    </div>
</div>
<script>

</script>
@endsection