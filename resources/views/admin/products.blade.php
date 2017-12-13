<table style="width:100%" class="table table-hover table-striped" >

@foreach($data as $product)
  <tr  style="height:50px">
    <td style="padding:10px">{{$product->pro_name}}</td>
    <td style="padding:10px">{{$product->pro_code}}</td>
      <td style="padding:10px">{{$product->cats->cat_name}}</td>
    <td style="padding:10px">{{$product->pro_price}}</td>
    <td><a class="btn btn-sm btn-fill btn-primary" href="{{url('/admin/editProduct')}}/{{$product->id}}">Edit</td>
  </tr>
@endforeach
</table>
