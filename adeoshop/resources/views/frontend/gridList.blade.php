@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @foreach($products as $value)
        <div class="col mb-2">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset("public/images/$value->image") }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $value->name }}</h5>
                    <h6 class="card-title">{{ $value->sku }}</h6>
                    <h6 class="card-title" id="price{{$value->id}}"></h6>
                    <div>
                        <input type="radio" name="star" id="star1"><label for="star1"/>
                        <input type="radio" name="star" id="star2"><label for="star2"/>
                        <input type="radio" name="star" id="star3"><label for="star3"/>
                        <input type="radio" name="star" id="star4"><label for="star4"/>
                        <input type="radio" name="star" id="star5"><label for="star5"/>
                    </div>
                    <a href="#" class="btn btn-primary">See more</a>
                </div>
            </div>

        </div>
        @endforeach

    </div>
    <script>
        $.get('{{ route("frontend.getAllItems") }}', function(data) {
            $.ajax({
                type: "get",
                url: '{{ route("home.getConfigData") }}',
                data: {},
                dataType: 'json',
                success: function(configData) {
                    data.forEach(function(product) {
                        let price = parseFloat(product.base_price);
                        if (configData.tax_inclusion == 1) {
                            price = price * (1 + (configData.tax_rate / 100));
                        }
                        if (product.special_price != 0) {
                            priceNew = price - product.special_price;
                            $('#price' + product.id).html("<span style='text-decoration:line-through;'>" + price.toFixed(2) + " Eur </span>  " + priceNew.toFixed(2) + " Eur");
                        } else {
                            if (configData.discount_type == 1) {
                                priceNew = price * (1 - (configData.discount_percent / 100));
                                $('#price' + product.id).html("<span style='text-decoration:line-through;'>" + price.toFixed(2) + " Eur </span>  " + priceNew.toFixed(2) + " Eur");
                            } else {
                                priceNew = price - configData.discount_fixed;
                                $('#price' + product.id).html("<span style='text-decoration:line-through;'>" + price.toFixed(2) + " Eur </span>  " + priceNew.toFixed(2) + " Eur");
                            }

                        }
                    })
                }
            })
        });
    </script>
    @endsection