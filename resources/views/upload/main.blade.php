@extends('layouts.app2')

@section('requirement_lib')
<style media='screen'>
    nav.navbar{
        margin-bottom:0;
    }

    #image-form-wrapper {
        padding-top: 20px;
        background: #f7f7f7;

    }
    #images{
        background: #eee;
        padding:20px 0;

    }
</style>
@endsection

@section('content')

{{-- <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">
                My image
            </a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Home</a>
                </li>
            </ul>

    </div>
</nav> --}}

{{-- <button type="button" class="btn btn-primary">Primary</button> --}}

<section id="image-form-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Your Imaage</div>
                    <div class="panel-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @elseif(session("message"))
                        <div class="alert alert-info">
                            {{session('message')}}
                        </div>
                        @endif
                        <form action="/" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="file_name" >
                            </div>
                            <div class="form-group">
                                   <button class="btn btn-success" type="submit">Upload</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="images">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumnail">
                    <img src="http://via.placeholder.com/450x300" alt="">
                    <div class="caption">
                        <h3>Title</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection