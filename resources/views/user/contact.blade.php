@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(/user/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Contact Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section id="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <object style="border:0; height: 450px; width: 100%;"
                            data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0966890657864!2d105.78009371540224!3d21.028816893151134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1610006568174!5m2!1svi!2s"></object>
                </div>
            </div>
        </div>
    </section>


    <section id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">

                    <form id="contactForm" class="contact-form" data-toggle="validator">
                        <h2 class="contact-title">
                            Send Message Us
                        </h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Massage" rows="7" data-error="Write your message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" id="submit" class="btn btn-common">Submit Now</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="information mb-4">
                        <div class="contact-datails">
                            <p>Nếu có bất kỳ thắc mắc và câu hỏi nào về việc sử dụng thông tin, đăng tin, quảng cáo trên website của chúng tôi, xin vui lòng xem các
                                <a href="/policy">điều khoản và hướng dẫn đăng tin</a> , hoặc liên hệ trực tiếp với bộ phận chăm sóc khách hàng của chúng tôi qua địa chỉ email: cskh@kidsclothes.com.</p>
                        </div>
                    </div>
                    <div class="information">
                        <h3>Contact Info</h3>
                        <div class="contact-datails">
                            <ul class="list-unstyled info">
                                <li><span>Address : </span><p>Số 8 Tôn Thất Thuyết, Mỹ Đình 2, Hà Nội</p></li>
                                <li><span>Email : </span><p><a href="#">cskh@kidsclothes.com.</a></p></li>
                                <li><span>Phone : </span><p>555 444 66647 & 555 444 66647</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
