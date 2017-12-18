<script>
$(document).ready(function(){
  // get catgeory id
  @foreach(App\cats::all() as $catList)
  $("#cat{{$catList->id}}").click(function(){
    var cat = $("#cat{{$catList->id}}").val();
    //alert(cat);

    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/productsCat')}}',
      data: 'cat_id=' + cat,
      success:function(response){
        console.log(response);
        $("#productData").html(response);
      }
    });
  });
  @endforeach
});
</script>
