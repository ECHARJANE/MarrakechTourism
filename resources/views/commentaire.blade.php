@extends('layouts.base')

@section('content')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Votre Commentaire</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Votre Commentaire</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="semiboxshadow text-center">
                <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        @if(Session()->has('message'))
                            <div class="alert alert-success" role="alert"> {{ Session::get('message') }}</div> 
                        @endif
                        <div class="row ">
                            <div class="col-md-12">
                                <h3 class="text-center">Commentaire Form </h3>
                                <p class="lead">
                                </p>

                                <form  class="form-theme" action="{{ route('commentaire.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}" >
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="file" placeholder="Image" name="image" value="{{ old('image') }}"    >
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <textarea placeholder="Your Message" name="message" value="{{ old('message') }}"  ></textarea>
                                        @error('message')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <select placeholder="Your Message" name="evaluer"  >
                                            <option value="1">Like</option>
                                            <option value="0">Deslike</option>
                                        </select>
                                        @error('evaluer')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <input type="submit" name="Submit" value="Send Message" class="btn btn-primary">
                                </form>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
@endsection