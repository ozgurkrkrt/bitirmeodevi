@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{session('status')}}
                        </div>
                    @endif


                    <div class="card mt-1 mr-1">
                        <div class="card-header" style="background-color: purple; color: white;">
                            <h4 class="title" style="color: white; opacity: 0.8;">Slider Düzenle</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.slider.edit.post',['id'=> $data[0]['SliderID']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">

                                            @if($data[0]['image']!="")
                                                <img class="mt-2" src="{{asset($data[0]['image'])}}" style="width: 120px;height: 120px;">
                                            @endif
                                            <input type="file" name="image" class="form-control" placeholder="Slider" id="imageLabel" >
                                            <label for="imageLabel">Slider Resmi</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Slider Düzenle</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
