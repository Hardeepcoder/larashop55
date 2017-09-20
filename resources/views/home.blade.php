@extends('layouts.app')

@section('content')
<script>
$(document).ready(function(){
	$('#send').click(function(){
		var name = $('#name').val();
		$.ajax({
			type: 'get',
			url: '<?php echo url('/send');?>',
			data: 'name=' + name,
			
			error: function(data){
				var errors = data.responseJSON;
				$('#msg').html(errors.errors.name);
				
			},
			success: function(data){
				$('#msg').html('data sent successfully');
			}
		});
	});
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!		
					<input type="text" id="name"/>
					<br>
					<p id="msg" style="color:red"></p>
					<input type="submit" id="send"/>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
