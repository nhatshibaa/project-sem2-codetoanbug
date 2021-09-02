@extends('user.layout')

@section('page-header')
    <div class="page-header" style="background: url(user/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Policy</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Policy</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    @foreach($configs as $content)
                        {!! $content -> policyPage !!}
                    @endforeach()
                </div>
            </div>
        </div>
    </section>
@endsection










{{--<h1 style="font-size: 22px; line-height: 28px;border-bottom: 3px solid hotpink; margin-bottom: 12px">Tiêu chuẩn duyệt tin</h1>--}}

{{--<h2 style="font-size: 16px;">Tiêu đề:</h2>--}}
{{--<p style="margin-bottom: 12px">- Tiêu đề cần là tiếng Việt có dấu và tóm tắt rõ ràng, ngắn gọn về sản phẩm tối đa 70 ký tự.</p>--}}
{{--<p style="margin-bottom: 12px">- Tiêu đề không được viết in hoa, trừ trường hợp chữ cái đầu tiên của 1 câu hoặc tên riêng.</p>--}}
{{--<p style="margin-bottom: 12px">- Tiêu đề không đề cập đến tên ca sĩ, diễn viên, người nổi tiếng ở các lĩnh vực khác (nếu có thì--}}
{{--    phải gửi giấy ủy quyền được sử dụng tên và hình ảnh của người đó)</p>--}}
{{--<p style="margin-bottom: 12px">- Tiêu đề không sử dụng các từ ngữ như: nhất, tốt nhất, rẻ nhất, duy nhất, số 1, cực, siêu,--}}
{{--    hot và không sử dụng các kí tự đặc biệt như “-“ “()” “[]” “{}”,…</p>--}}
{{--<p style="margin-bottom: 12px">- Tiêu đề không được thể hiện thông tin về giá bán và thông tin liên hệ của người bán (VD: SĐT,--}}
{{--    website,…)</p>--}}


{{--<br>--}}
{{--<h2 style="font-size: 16px;">Nội dung:</h2>--}}
{{--<p style="margin-bottom: 12px">Nội dung cần là tiếng Viết có dấu và mô tả đầy đủ thông tin về sản phẩm để người mua có thể quyết--}}
{{--    định mua hàng và tuân thủ Quy chế hoạt động của Rao Vặt. Nội dung tin đăng sẽ không được duyệt--}}
{{--    nếu thuộc một trong những trường hợp sau:</p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung sơ sài, không thể hiện được những thông tin cơ bản của sản phẩm được rao.</p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung không tuân thủ quy định về chính tả, cách sử dụng dấu câu cũng như các quy định khác--}}
{{--    về trình bày văn bản.</p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung viết dính nhau khiến người đọc không hiểu.</p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung sử dụng các ký hiệu đặc biệt</p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung đề cập đến người nổi tiếng trong các lĩnh vực chính trị, văn hóa, xã hội.. hoặc một--}}
{{--    đối tượng cụ thể mà chưa có giấy ủy quyền được sử dụng tên và hình ảnh của người đó. </p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung sử dụng các từ ngữ thô tục, nhạy cảm, vi phạm thuần phong mỹ tục.</p>--}}
{{--<p style="margin-bottom: 12px">- Nội dung có spam từ khóa hoặc nội dung lặp đi lặp lại.</p>--}}

{{--<br>--}}
{{--<h2 style="font-size: 16px;">Giá:</h2>--}}
{{--<p style="margin-bottom: 12px">- Giá bán niêm yết bằng Việt Nam Đồng và thống nhất giữa nội dung và mục giá. Nếu giá không thống--}}
{{--    nhất giữa các phần thì sẽ được điều chỉnh về Thương lượng.</p>--}}
{{--<p style="margin-bottom: 12px">- Nếu giá bán đưa ra không phù hợp với sản phẩm thì sẽ được điều chỉnh về giá thương lượng.</p>--}}
{{--<br>--}}
{{--<h2 style="font-size: 16px;">Thông tin liên hệ:</h2>--}}
{{--<p style="margin-bottom: 12px">- Tin đăng phải có đầy đủ họ tên và địa chỉ (xã, phường, quận, huyện, thành phố,...) của người--}}
{{--    bán</p>--}}
{{--<p style="margin-bottom: 12px">- Số điện thoại liên hệ phải được ghi rõ trong nội dung tin đăng hoặc phần thông tin người--}}
{{--    đăng.</p>--}}
{{--<br>--}}
{{--<h2 style="font-size: 16px;">Hình ảnh:</h2>--}}
{{--<p style="margin-bottom: 12px">- Hình ảnh cần đẹp phù hợp với thông tin sản phẩm rao bán, không viền khung hình, không ghép ảnh,--}}
{{--    không dùng hình chỉ có chữ và số, chèn quá nhiều chữ và số điện thoại vào giữa hình ảnh.</p>--}}
{{--<p style="margin-bottom: 12px">- Không dùng hình ảnh là logo công ty, hình ảnh cần là hình ảnh của sản phẩm rao bán.</p>--}}
{{--<p style="margin-bottom: 12px">- Không dùng cờ ba sọc, bản đồ Việt Nam mà không có hình ảnh Hoàng Sa, Trường Sa,...</p>--}}
{{--<br>--}}
{{--<h2 style="font-size: 16px;">Khác:</h2>--}}
{{--<p style="margin-bottom: 12px">- Tin đăng phải đúng danh mục.</p>--}}
{{--<p style="margin-bottom: 12px">- Tin đăng trùng lặp sẽ bị từ chối.</p>--}}
{{--<p style="margin-bottom: 12px">- Các tin vũ khí, súng, các mặt hàng cấm kinh doanh theo quy định của nhà nước Việt Nam … sẽ--}}
{{--    bị từ chối theo quy định theo Nghị định Số: 11/1999/NĐ-CP.</p>--}}
