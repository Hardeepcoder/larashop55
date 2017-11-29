@extends('admin.master')
@section('title', 'Admin')

@section('content')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="content">
                            <h2>Change Image</h2>
                            <form action="{{url('/admin/uploadPP')}}" enctype="multipart/form-data" method="post">
                              {{csrf_field()}}
                              <input type="hidden" value="{{request()->route('id')}}" name="id"/>
                              <input type="file" name="pic"/>
                              <br>
                              <input type="submit" value="upload" class="btn btn-fill btn-success"/>


                            </form>
                                <div class="footer">
                                <p>hasellus non imperdiet sem, vel posuere tellus</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">

                            <div class="content">
                           <p> Fusce quis dictum erat, ornare mattis quam. Pellentesque eget ipsum hendrerit, feugiat risus lacinia, accumsan eros. In fringilla volutpat elementum. Integer volutpat ex ut pharetra auctor. Vivamus turpis arcu, sollicitudin id est nec, imperdiet consectetur sapien. Integer quis volutpat velit, id auctor leo</p>
                                <div class="footer">
                                <p>Donec congue eleifend sapien, in molestie diam vulputate sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


@endsection
