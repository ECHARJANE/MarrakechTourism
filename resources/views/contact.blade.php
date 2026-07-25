@extends('layouts.base')

@section('content')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Contact Us</li>
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
                        <div class="row">
                            <div class="col-md-4">
                                <aside>
                                    <h4>The Office</h4>
                                    <address>
                                        <strong>SurfsideMedia Home Services.</strong><br>
                                        <i class="fa fa-map-marker"></i><strong>Address: </strong>Faridabad, Haryana,
                                        India<br>
                                        <i class="fa fa-phone"></i><strong>Phone: </strong> +91-1234567890
                                    </address>
                                    <address>
                                        <strong>SurfsideMedia Emails</strong><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:contact@surfsidemedia.in"> contact@surfsidemedia.in</a><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:support@surfsidemedia.in"> support@surfsidemedia.in</a>
                                    </address>
                                </aside>
                                <hr class="tall">
                            </div>
                            <div class="col-md-8">
                                <h3>Contact Form</h3>
                                <p class="lead">
                                </p>
                             
                                <form  class="form-theme" action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}" >
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"    >
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" placeholder="Phone" name="phone" value="{{ old('phone') }}"   > 
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" placeholder="Object" name="object"  value="{{ old('object') }}"  > 
                                    </div>

                                    <div class="form-group">
                                        <textarea placeholder="Your Message" name="message" value="{{ old('message') }}"  ></textarea>
                                        @error('message')
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