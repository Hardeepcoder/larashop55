<table >
  <tr>
    <th style="padding:10px">Product Name</th>
    <th style="padding:10px">Product Code</th>
    <th style="padding:10px">Product Price</th>
    <th>Update</th>
  </tr>
@foreach($data as $product)
  <tr>
    <td style="padding:10px">{{$product->pro_name}}</td>
    <td style="padding:10px">{{$product->pro_code}}</td>
    <td style="padding:10px">{{$product->pro_price}}</td>
    <td><a href="{{url('/admin/editProduct')}}/{{$product->id}}">Edit</td>
  </tr>
@endforeach
</table>
