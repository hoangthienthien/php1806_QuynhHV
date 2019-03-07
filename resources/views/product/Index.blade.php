
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
                <tr>
                  <th scope="col">{{$product->id}}</th>
                  <td scope="col">{{$product->category_id}}</td>
                  <td scope="col">{{$product->product_name}}</td>
                  <td scope="col">{{$product->price}}</td>
                  <td scope="col">{{$product->quanity}}</td>
                  <td scope="col">{{$product->avg_rating}}</td>
                  <td scope="col">{{$product->image}}</td>
                  <td scope="col">
                        <button type="button" name="edit">Edit</button>
                        <div class="btn btn-info btn-del-product" role="button" id="delete-button" data-product-id = "{{ $product->id }}">DELETE</div>
                  </td>
                </tr>
            @endforeach
          </tbody>

        </table>
        <button type="submit">Add Product</button>
    </form>


@endsection
@section('javascript')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.btn-del-product').on('click', function() {

            var productid = $(this).data("product-id");
            var url = '/product/delete' + productid;
            console.log(productid);
            // $.ajaxSetup({
   //              headers: {
   //                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   //              }
      //       });
            // $.ajax({

            //  url: url,
            //  type: 'DELETE',
            //  success: function(result) {
            //      if (result.status) {
   //                          $('.row_' + userId).remove();
   //                      } else {
   //                          alert(result.msg);
   //                      }
            //  }
            //  error: function() {
            //      location.reload();
            //  }

            // });
        });
    });
</script>
@endsection