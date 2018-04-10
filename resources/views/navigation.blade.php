<!-- Navigation area starts -->
<div class="menu-area navbar-fixed-top">
    <div class="container">
        <div class="row">

            <!-- Navigation starts -->
            <div class="col-md-12">
                <div class="mainmenu">
                    <div class="navbar navbar-nobg">
                        <div class="navbar-header">
                            <h2 class="nav-logo">TECHNO<span class="prim">SUN</span></h2>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smooth_scroll" href="#slider">ACCUEIL</a></li>
                                    <li><a class="smooth_scroll" href="#about">NOTRE ENTREPRISE</a></li>
                                    <li><a class="smooth_scroll" href="#service">NOS SERVICES</a></li>
                                    <li><a class="smooth_scroll" href="#contact">CONTACT</a></li>

                                    {{-- <li class=""><a href="/en">
                                      <i class="fa fa-flag">
                                    </i> --}}

                                    @include('lang')

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation ends -->

        </div>
    </div>
</div>
<!-- Navigation area ends -->

@section('js')
  <style media="screen">
  .nav-logo {
    position: absolute;
  }
    @media only screen and (max-width: 768px)
      {
        .nav-logo {
          /*portable*/
          font-size: 15px;
        }
      }

    /*tablette*/
     @media only screen and (min-width: 768px) and (max-width: 992px)
    {
      .nav-logo {
        /*portable*/
        font-size: 20px;
      }
    }

    #about div.content-box
      {
          display: flex;
          justify-content: center;
          flex-direction: column;
      }


  </style>

@endsection
