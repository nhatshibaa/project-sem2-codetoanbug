@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(user/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Blog</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="blog-post">

                        <div class="post-thumb">
                            <a href="#"><img class="img-fluid" src="user/img/blog/blog1.jpg" alt=""></a>
                            <div class="hover-wrap"></div>
                        </div>


                        <div class="post-content">
                            <div class="meta">
                                <span class="meta-part"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-alarm-clock"></i> June 21, 2018</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-comments-alt"></i> 1 Comments</a></span>
                            </div>
                            <h2 class="post-title"><a href="/blog-detail">Eum Iriure Dolor Duis Autem</a></h2>
                            <div class="entry-summary">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero
                                    molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse
                                    nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia
                                    consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet
                                    dolorum, quisquam neque beatae quas ea tenetur!</p>
                            </div>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    <div class="blog-post">

                        <div class="post-thumb">
                            <a href="#"><img class="img-fluid" src="user/img/blog/blog2.jpg" alt=""></a>
                            <div class="hover-wrap"></div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="meta-part"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-alarm-clock"></i> June 21, 2018</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-comments-alt"></i> 1 Comments</a></span>
                            </div>
                            <h2 class="post-title"><a href="/blog-detail">Consectetuer Adipiscing Elit</a></h2>
                            <div class="entry-summary">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero
                                    molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse
                                    nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia
                                    consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet
                                    dolorum, quisquam neque beatae quas ea tenetur!</p>
                            </div>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    <div class="blog-post">

                        <div class="post-thumb">
                            <a href="#"><img class="img-fluid" src="user/img/blog/blog3.jpg" alt=""></a>
                            <div class="hover-wrap"></div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="meta-part"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-alarm-clock"></i> June 21, 2018</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-comments-alt"></i> 1 Comments</a></span>
                            </div>
                            <h2 class="post-title"><a href="/blog-detail">Et Leggings Fanny Pack</a></h2>
                            <div class="entry-summary">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero
                                    molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse
                                    nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia
                                    consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet
                                    dolorum, quisquam neque beatae quas ea tenetur!</p>
                            </div>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    <div class="blog-post video-post">

                        <div class="post-thumb">
                            <div class="video-wrapper">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/qighCE8WfBk"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="meta-part"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
                                <span class="meta-part"><a href="#"><i
                                            class="lni-alarm-clock"></i> June 21, 2018</a></span>

                                <span class="meta-part"><a href="#"><i
                                            class="lni-comments-alt"></i> 1 Comments</a></span>
                            </div>
                            <h2 class="post-title"><a href="/blog-detail">Exercitation Photo Booth</a></h2>
                            <div class="entry-summary">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero
                                    molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse
                                    nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia
                                    consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet
                                    dolorum, quisquam neque beatae quas ea tenetur!</p>
                            </div>
                            <a href="/blog-detail" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    <div class="pagination-bar">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

