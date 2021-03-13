<nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><img src="{{asset('edica/assets/images/logo.svg')}}" alt="Edica"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                         @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @else
                            @if(auth()->user()->role !== 'Pengunjung') 
                                <li class="nav-item">
                                        <a class="nav-link" href="/dashboard">Dashboard</a>
                                </li>
                            @endif
                        </ul>
                        <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" href="/akun">{{Auth::user()->name}}</a>
                            </li>
                        </ul>
                        @endguest
                    </div>
                </nav>