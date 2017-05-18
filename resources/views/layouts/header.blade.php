@section('header')

            <div class="row ">
                <div class="col-sm-6">
                <a href="{{url('/assign/workout') }}"><img src="{{ URL::asset('assets/globals/img/rh_symbol.png') }}" align="left"></a>
                    <h1>Schyns Fitness Training <small> / Real Health</small></h1>
                </div><!--.col-->
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        <span><i class="fa fa-smile-o"></i></span> Hello {{\Auth::user()->username}} <span class="caret"></span>
                    </button>
                        <ul class="dropdown-menu" role="menu" >

                            <li>
                                <a href="{{ url('expedient', [base64_encode(Auth::user()->id)]) }}"><span><i class="fa fa-medkit"></i></span> Medical record</a>
                            </li>

                            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><span><i class="fa fa-sign-out"></i></span> Logout</a>
                            </li>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                            </form>
                    </ul>   
                </div><!--.col-->
            </div><!--.row-->