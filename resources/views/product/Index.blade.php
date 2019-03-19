
@extends('layouts.app')

@section('content')
    <form method="GET" action="{{route('product.create')}}">
        @csrf
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">category_id</th>
              <th scope="col">product_name</th>
              <th scope="col">price</th>
              <th scope="col">quanity</th>
              <th scope="col">avg_rating</th>
              <th scope="col">image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
                <tr class="row_{{ $product->id }}">
                  <th scope="col">{{$product->id}}</th>
                  <td scope="col">{{$product->category_id}}</td>
                  <td scope="col">{{$product->product_name}}</td>
                  <td scope="col">{{$product->price}}</td>
                  <td scope="col">{{$product->quanity}}</td>
                  <td scope="col">{{$product->avg_rating}}</td>
                  <td scope="col">{{$product->image}}</td>
                  <td scope="col">
                        <a href = "http://localhost/php1806_QuynhHV/public/product/edit/{{$product->id}}" class="btn btn-info" role = "button">Edit</a>
                        <div class="btn btn-info btn-del-product" data-product-id = "{{ $product->id }}">DELETE</div>
                  </td>
                </tr>
            @endforeach
          </tbody>

        </table>
        <button type="submit">Add Product</button>
    </form>

<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-del-product').click(function() {
            if (confirm('Are you sure?')) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var productId = $(this).data('product-id');
                var url = 'http://localhost/php1806_QuynhHV/public/product/delete/' + productId;
                
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    success: function(result) {
                        if (result.status) {
                            $('.row_' + productId).remove();
                            alert(result.msg);
                        } else {
                            alert(result.msg);
                        }
                    },
                    error: function() {
                        location.reload();
                    }
                });
            }
        });
    });
</script>

@endsection