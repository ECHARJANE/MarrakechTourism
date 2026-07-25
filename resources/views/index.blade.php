@extends('layouts.base')

@section('content')
          <section class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('assets/img/slide/1.jpg') }}" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('assets/img/slide/2.jpg') }}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:#fff;">BOOK A SERVICE</h2>
                    <p class="lead">Book a service at very affordable price, </p>
                </div>
                {{-- <div class="filter-header">
                    <form id="sform" action="searchservices" method="post">                        
                        <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div> --}}
        </section>
<!------------------------ Start services --------------------------->
  <section class="section-services" id="section-services">
      <div class="container">
                        <div class="row">
                            <div class="col-md-8 single-blog">
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">Randonnée en Chameau a Agafay</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="{{ asset('images/services/3.jpg') }}" alt=""
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>Chameau Agafay</h3>
                                                <p> 
                                                  Lorsque tu viens à marrakech dans un voyage ou tourisme  , votre voyage ne sera  complet pas sans découvrir l'aventure de monter les chameuax dans le jardin de palmiers avec un atmosphère calme et adorabl loin   de bruit de ville et les rues bondées.
                                                  Soyes sûr que le mieux que vous puissiez vivre à marrakech est une tourne dans le jardin de palmiers sur le quatour ou les chameaux.Le jardin palmiers est un espace contient un grand nombre d'arbers ,  situé au nord du marrakech
                                                  Pour assurer une bonne visite contient le plaisir que vous aspirez  nous vous présentons groupe des services qui sont expluqées en bas des images . 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">Randonnée en Chameau a marrakech</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="{{ asset('images/services/2.jpg') }}" alt=""
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>Chameau Marrakech</h3>
                                                <p> 
                                                  Lorsque tu viens à marrakech dans un voyage ou tourisme  , votre voyage ne sera  complet pas sans découvrir l'aventure de monter les chameuax dans le jardin de palmiers avec un atmosphère calme et adorabl loin   de bruit de ville et les rues bondées.
                                                  Soyes sûr que le mieux que vous puissiez vivre à marrakech est une tourne dans le jardin de palmiers sur le quatour ou les chameaux.Le jardin palmiers est un espace contient un grand nombre d'arbers ,  situé au nord du marrakech
                                                  Pour assurer une bonne visite contient le plaisir que vous aspirez  nous vous présentons groupe des services qui sont expluqées en bas des images . 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                
                                <aside>
                                    <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 360px;margin-top: 18px;">
                                          <h3>Related Service</h3>
                                        <a href="ac-wet-servicing.html">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services/thumbnails/1.jpg') }}" alt=""
                                                    class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    AC Wet Servicing
                                                </h3>
                                                <hr class="separator">
                                                <p>AC Wet Servicing</p>
                                                <div class="content-btn"><a href="ac-wet-servicing.html"
                                                    class="btn btn-warning">View Details</a>
                                                </div>
                                                <div class="price"><span>&#36;</span><b>From</b>200</div>
                                            </div>
                                        </a>
                                    </div>
                                </aside>
                                {{-- aside details price --}}
                                <aside style="margin-top: 18px !important;">
                                    <div class="panel panel-default"  >
                                        <div class="panel-heading" >Booking Details</div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <td style="border-top: none;">Price</td>
                                                    <td style="border-top: none;"><span>&#36;</span> 300</td>
                                                </tr>
                                                <tr>
                                                    <td>Quntity</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span>&#36;</span> 300</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <form>                                                
                                                <input type="submit" class="btn btn-primary" name="submit"
                                                    value=" Book Now">
                                            </form>
                                        </div>
                                    </div>
                                </aside>
                                {{-- aside details price --}}
                                <aside >
                          
                                    <div style="margin-top: 18px !important" class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 360px">
                                                  <h3>Related Service</h3>
                                        <a href="ac-wet-servicing.html">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services/thumbnails/2.jpg') }}" alt=""
                                                    class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    AC Wet Servicing
                                                </h3>
                                                <hr class="separator">
                                                <p>AC Wet Servicing</p>
                                                <div class="content-btn"><a href="ac-wet-servicing.html"
                                                        class="btn btn-warning">View Details</a></div>
                                                <div class="price"><span>&#36;</span><b>From</b>200</div>
                                            </div>
                                        </a>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
  </section>
<!----------------------------- End services ---------------------------------------->
@endsection
