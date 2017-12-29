<script>
$(document).ready(function(){

  $("#findBtn").click(function(){
    var cat = $("#catID").val();
    var price = $('#priceID').val();
    
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/productsCat')}}',
      data: 'cat_id=' + cat + '&price=' + price,
      success:function(response){
        console.log(response);
        $("#productData").html(response);
      }
    });


  });

});
</script>
