@extends('layouts.main')

@section('content')
<!-- start Main Content (Media Page Section) -->

<div id="tm-media-section" class="uk-block uk-block-small">

    <div class="uk-container uk-container-center uk-width-8-10">
        <div class="media-container  uk-container-center">
            <a class="uk-button uk-button-large uk-button-link uk-text-muted" href="{{ route('home') }}"><i
            class=" uk-icon-arrow-left uk-margin-small-right"></i> Back</a>
        </div>

        <div class="uk-grid">
            <div class="uk-width-medium-5-10">
                <div class="media-cover mt-50">
                    <div class="uk-margin" data-uk-slideset="{small: 2, medium: 1, large: 1}">
                        <div class="uk-slidenav-position uk-margin">
                            <ul class="uk-slideset uk-grid uk-flex-center">
                                <!-- Image Show -->
                                <?php $images = json_decode($product->image); ?>
                                @if ($images != null)
                                @foreach ($images as $image)
                                <li>
                                    <a href="media.html">
                                        <img src="{{ Voyager::image($image) }}" width="600" height="400" alt="">
                                    </a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <ul class="uk-slideset-nav uk-dotnav uk-dotnav-contrast uk-flex-center uk-margin-top"></ul>
                    </div>
                </div>

                <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-top" href="login.html"><i
                        class="uk-icon-heart uk-margin-small-right"></i> Add to Favourites</a>
                <a class="uk-button uk-button-link color-y uk-text-muted uk-button-large uk-width-1-1 uk-margin-top"
                    href="login.html"><i class="uk-icon-receiver uk-margin-small-right "></i> Contact Us</a>
            </div>
            <div class="uk-width-medium-5-10">
                <div class="">
                    <ul class="uk-tab uk-tab-grid " data-uk-switcher="{connect:'#media-tabs'}">
                        <li class="uk-width-medium-1-3 uk-active"><a href="#">Description</a></li>
                        <li class="uk-width-medium-1-3"><a href="#">Reviews</a></li>
                        <li class="uk-width-medium-1-3"><a href="#">book now</a></li>
                        <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false">
                            <a>Active</a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-up">
                                <ul class="uk-nav uk-nav-dropdown"></ul>
                                <div></div>
                            </div>
                        </li>
                    </ul>
                </div>

                <ul id="media-tabs" class="uk-switcher">

                    <!--     start Tab Panel 1 (Reviews Sections) -->

                    <li>
                        <h2 class="uk-text-contrast uk-margin-large-top">{{ $product->productname }} <span
                                class="rating uk-margin-small-left uk-h4 uk-text-warning">
                                <i class="uk-icon-star "></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                            </span></h2>
                        <ul class="uk-subnav uk-subnav-line">
                            <li><i class="uk-icon-star uk-margin-small-right"></i> 9.5</li>
                            <li><i class="uk-icon-clock-o uk-margin-small-right"></i> March 04, 2016</li>
                            <li><i class="fas fa-award uk-margin-small-right"></i>price : {{ $product->productprice }}$
                            </li>

                        </ul>
                        <hr>
                        <p class="uk-text-muted uk-h4">{{ $product->productcontent }}</p>
                        <dl class="uk-description-list-horizontal uk-margin-top">
                            <dt> Wheel Size :</dt>
                            <dd>
                                <ul class="uk-subnav ">
                                    <li><a href="#">{{ $product->wheelsize }}</a></li>
                                </ul>
                            </dd>
                            <dt> Model Number : </dt>
                            <dd>
                                <ul class="uk-subnav ">
                                    <li><a href="#">{{ $product->modelnumber }}</a></li>
                                </ul>
                            </dd>
                            <dt> Color : </dt>
                            <dd>
                                <ul class="uk-subnav color-bike">
                                    <li><a href="#"><i style="color:{{ $product->color }}; font-size:25px" class="uk-icon-image"></i></a></li>
                                </ul>
                            </dd>
                            <dt> Category : </dt>
                            <dd>
                                <ul class="uk-subnav ">
                                    <li><a href="#">{{ $product->category->name }}</a></li>
                                </ul>
                            </dd>
                            <dt> Wattage : </dt>
                            <dd>
                                <ul class="uk-subnav ">
                                    <li><a href="#">3{{ $product->wattage }}</a></li>
                                </ul>
                            </dd>

                        </dl>

                    </li>

                    <!--  ./ Tab Panel 1  -->

                    <!--     start Tab Panel 2  (Reviews Section) -->

                    <li>
                        <div class="uk-margin-small-top">
                            <h3 class="uk-text-contrast uk-margin-top">Product a Review</h3>
                            <div class="uk-alert uk-alert-warning" data-uk-alert="">
                                <a href="" class="uk-alert-close uk-close"></a>
                                <p><i class="uk-icon-exclamation-triangle uk-margin-small-right "></i> Please <a
                                        class="uk-text-contrast" href="login.html"> Log in</a> or Sign up to post
                                    reviews quicker.</p>
                            </div>
                            <form class="uk-form uk-margin-bottom">
                                <div class="uk-form-row">
                                    <textarea class="uk-width-1-1" cols="30" rows="5"
                                        placeholder="Type your review here..."></textarea>
                                    <p class="uk-form-help-block">The <code>.uk-form-help-block</code> class creates an
                                        associated paragraph.</p>
                                </div>
                                <div class="uk-margin">

                                    <div class="uk-form-controls">
                                        <label><input class="uk-radio" name="radio1" type="radio"> <i
                                                class="uk-icon-star "></i></label>
                                        <label><input class="uk-radio" name="radio1" type="radio"> <i
                                                class="uk-icon-star "></i><i class="uk-icon-star "></i></label>
                                        <label><input class="uk-radio" name="radio1" type="radio"> <i
                                                class="uk-icon-star "></i><i class="uk-icon-star "></i><i
                                                class="uk-icon-star "></i></label>
                                        <label><input class="uk-radio" name="radio1" type="radio"> <i
                                                class="uk-icon-star "></i><i class="uk-icon-star "></i><i
                                                class="uk-icon-star "></i><i class="uk-icon-star "></i></label>
                                        <label><input class="uk-radio" name="radio1" type="radio"> <i
                                                class="uk-icon-star "></i><i class="uk-icon-star "></i><i
                                                class="uk-icon-star "></i><i class="uk-icon-star "></i><i
                                                class="uk-icon-star "></i></label>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <a href=""
                                        class="uk-button uk-button-large uk-button-success uk-float-right">Post</a>
                                </div>
                            </form>
                        </div>

                        <div class="uk-scrollable-box uk-responsive-width ">
                            <ul class="uk-comment-list uk-margin-top">
                                <li>
                                    <article class="uk-comment uk-panel uk-panel-space uk-panel-box-secondary">
                                        <header class="uk-comment-header">
                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/avatar3.jpg"
                                                width="50" height="50" alt="">
                                            <h4 class="uk-comment-title">@movielover</h4>
                                            <div class="uk-comment-meta">2 days ago </div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua.</p>
                                        </div>
                                    </article>
                                </li>

                                <li>
                                    <article class="uk-comment uk-panel uk-panel-space uk-panel-box-secondary">
                                        <header class="uk-comment-header">
                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/avatar3.jpg"
                                                width="50" height="50" alt="">
                                            <h4 class="uk-comment-title">@movielover</h4>
                                            <div class="uk-comment-meta">7 days ago </div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua.</p>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="uk-comment uk-panel uk-panel-space uk-panel-box-secondary">
                                        <header class="uk-comment-header">
                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/avatar2.jpg"
                                                width="50" height="50" alt="">
                                            <h4 class="uk-comment-title">@movielover</h4>
                                            <div class="uk-comment-meta">84 days ago </div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua.</p>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="uk-comment uk-panel uk-panel-space uk-panel-box-secondary">
                                        <header class="uk-comment-header">
                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/avatar1.jpg"
                                                width="50" height="50" alt="">
                                            <h4 class="uk-comment-title">@movielover</h4>
                                            <div class="uk-comment-meta">3 days ago </div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua.</p>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--     ./ Tab Panel 2  -->


                    <!--     start Tab Panel 3 (Trailer Section)  -->

                    <li>
                        <div class="uk-margin-small-top">
                            <h3 class="uk-text-contrast uk-margin-top">Book It Now</h3>
                            <div class="uk-alert uk-alert-warning" data-uk-alert="">
                                <a href="" class="uk-alert-close uk-close"></a>
                                <p><i class="uk-icon-exclamation-triangle uk-margin-small-right "></i> Please <a
                                        class="uk-text-contrast" href="login.html"> Log in</a> or Sign up to post
                                    reviews quicker.</p>
                            </div>
                            <form class="uk-form uk-margin-bottom">
                                <div class="uk-form-row">
                                    <textarea class="uk-width-1-1" cols="30" rows="5"
                                        placeholder="Type your review here..."></textarea>
                                    <p class="uk-form-help-block">The <code>.uk-form-help-block</code> class creates an
                                        associated paragraph.</p>
                                </div>
                                <div class="uk-form-row">
                                    <a href=""
                                        class="uk-button uk-button-large uk-button-success uk-float-right">Post</a>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!--     ./ Tab Panel 3  -->


                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- ./ Main Content (Media Page Section) -->


<!--     Start Similar Media Section  -->

<div class="uk-block ">
    <div class="uk-container-center uk-container uk-margin-large-bottom">
        <h3 class="uk-margin-large-bottom uk-text-contrast">You might also like</h3>
        <div class="uk-margin" data-uk-slideset="{small: 2, medium: 4, large: 5}">
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center">
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="media.html">
                            <img src="assets/img/placeholder.png" width="600" height="400" alt="">
                        </a>
                    </li>



                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                    data-uk-slideset-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-next uk-slidenav-contrast" data-uk-slideset-item="next"></a>
            </div>
            <ul class="uk-slideset-nav uk-dotnav uk-dotnav-contrast uk-flex-center uk-margin-top"></ul>
        </div>
    </div>
</div>

<!--     ./ Similar Media Section  -->
@endsection
