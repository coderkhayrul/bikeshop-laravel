@extends('layouts.main')

@section('content')
<!--     start Main Section   -->
<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">

    <div class="uk-grid">
        <div id="tm-left-section" class="uk-width-medium-3-10 uk-width-large-2-10 uk-hidden-small">
            <div class="uk-panel">
                <ul class="uk-nav  uk-nav-side uk-nav-parent-icon uk-margin-bottom" data-uk-nav="">
                    <li class="uk-active">
                        <a href="{{ url('/category') }}">All Categories</a></li>
                    @foreach ($categories as $category)
                    <li><a href="{{ url('category') }}/{{ $category->slug }}">{{ $category->name }}</a></li>
                    @endforeach
                    <li class="uk-parent ">
                        <a href="#">More Categories</a>
                        <ul class="uk-nav-sub">
                            @foreach ($allcategories as $allategory)
                            <li>
                                <a href="{{ url('category') }}/{{ $allategory->slug }}">{{ $allategory->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                </ul>
                <ul class="uk-nav uk-nav-comments uk-nav-side" data-uk-nav="">
                    <li class="uk-nav-header uk-margin-small-bottom">Latest BLOG</li>
                    @foreach ($news as $new)
                    <li>
                        <a href="{{  url('news')}}/{{ $new->slug }}">
                            <img src="{{ Voyager::image($new->image) }}" alt="Image"
                            class="uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade">{{ Str::substr($new->title, 0, 30) }}<div>{!! Str::substr($new->body, 0, 80) !!}</div>
                        </a>
                    </li>
                    @endforeach
                    <li class="uk-nav-divider"></li>
                </ul>
                <div class="uk-panel">
                    <h5 class="uk-panel-header uk-margin-top widget-header">SIMBLE Login</h5>
                    <form class="uk-form" method="post" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <div class="uk-form-row">
                                {{-- <input type="text" placeholder="Username" class="uk-width-1-1"> --}}
                                <input id="email" type="email" class="uk-width-1-1 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="uk-form-row">
                                {{-- <input type="password" placeholder="Password" class="uk-width-1-1"> --}}
                                <input id="password" type="password" class="uk-width-1-1 @error('password') is-invalid @enderror"
                                name="password" autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="uk-form-row">
                                {{-- <label><input type="checkbox"> Remember me</label> --}}
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                            </div>
                            <div class="uk-form-row">
                                <button type="submit" class="uk-button uk-button-success uk-width-1-1">log in</button>

                                {{-- <a href="#" class="uk-button uk-button-link uk-button-small uk-margin-top ">forgot?</a> --}}
                                @if (Route::has('password.request'))
                                    <a class="uk-button uk-button-link uk-button-small uk-margin-top" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif

                                <a href="{{ route('register') }}" class="uk-button uk-button-link uk-button-small uk-margin-top uk-text-muted uk-float-right">
                                Sign up</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>


        <div id="tm-right-section" class="uk-width-large-8-10 uk-width-medium-7-10"
            data-uk-scrollspy="{cls:'uk-animation-fade', target:'img'}">
            <div class="uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-3"
                data-uk-grid="{gutter:20}">

                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="#"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>

                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-overlay uk-overlay-hover">
                        <img src="assets/img/placeholder.png" alt="Image">
                        <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                        <a class="uk-position-cover" href="media.html"></a>
                    </div>
                    <div class="uk-panel">

                        <h5 class="uk-panel-title">Media title goes here</h5>
                        <p>
                            <span class="rating">
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span>
                            <span class="uk-float-right">2016</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-margin-large-top uk-margin-bottom">
                <ul class="uk-pagination">
                    <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--     ./ Main Section   -->
@endsection
