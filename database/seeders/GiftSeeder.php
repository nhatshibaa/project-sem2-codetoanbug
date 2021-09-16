<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('gifts')->truncate();

        \Illuminate\Support\Facades\DB::table('gifts')->insert([
            [
                'id' => 1,
                'idUser' => 1,
                'categoryId' => 5,
                'title' => 'Đồ bộ cho bé',
                'images' => 'https://cf.shopee.vn/file/87828bc964bea4e45f726ebae719332b',
                'description' => 'Mình có một số đồ cho bé mua mới dùng được đôi lần muốn để lại cho bạn nào cần.',
                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",
                'size' => 5,
                'color' => 'Váy hồng, áo trắng',
                'age' => 5,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 1,
            ],
            [
                'id' => 2,
                'idUser' => 2,
                'categoryId' => 5,
                'title' => 'Đồ bộ cho bé',
                'images' => 'https://babi.vn/images/watermarked/1/detailed/34/bo-be-trai-theu-logo-nike3841_(Copy).jpg',
                'description' => 'Sản phẩm dành cho bé trai từ 4 tuổi đến 8 tuổi, chất liệu thun thoáng mát co giãn tốt giúp bé thật thoải mái vui chơi cùng bạn bè.',
                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",
                'size' => 7,
                'color' => 'Áo đỏ quần đen',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 2,

            ], [

                'id' => 3,
                'idUser' => 3,
                'categoryId' => 5,
                'title' => 'Đồ bộ cho bé',
                'images' => 'http://bizweb.dktcdn.net/100/032/149/products/set-quan-ao-cho-be-gai-9-thang-4-tuoi-m802.jpg?v=1557134901247',
                'description' => 'Set bộ bé gái dễ thương kiểu dáng năng động với thiết kế kiểu cổ áo thủy thủ cực dễ thương cùng màu sắc cực xinh giúp công chúa nhỏ nhà mình điệu đà hơn mẹ nhé .Mẫu quần lưng thun co giản tốt đem lại cảm giác thoải mái cho bé khi hoạt động.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 3,
                'color' => 'Áo trắng quần xanh',
                'age' => 3,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 1,

            ], [

                'id' => 4,
                'idUser' => 4,
                'categoryId' => 5,
                'title' => 'Đồ bộ cho bé',
                'images' => 'https://www.dolakids.vn/wp-content/uploads/2019/03/quan-ao-tre-em-hinh-thu-long-cuu-heo-hong.jpg',
                'description' => 'Quần Áo Trẻ Em – Trẻ Sơ Sinh Độc & Lạ Hình Heo hồng chất liệu lông cừu cho bé',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",
                'size' => 2,
                'color' => 'Màu hồng',
                'age' => 2,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 2,

            ], [

                'id' => 5,
                'idUser' => 5,
                'categoryId' => 5,
                'title' => 'Đồ bộ cho bé',
                'images' => 'http://bizweb.dktcdn.net/100/032/149/products/quan-ao-cho-be-trai-mua-he-c1416-2.jpg?v=1554884655143',
                'description' => 'Áo thun cho bé trai 3-4-5 tuổi chất thun 100% cotton mềm, mỏng, nhẹ, thoáng mát cho mùa hè. Màu sắc tươi sáng với họa tiết in dễ thương. Mẹ dễ dàng phối đồ mùa hè cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 5,
                'color' => 'Màu xám',
                'age' => 5,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 6,
                'idUser' => 6,
                'categoryId' => 3,
                'title' => 'Quần da cá túi hộp',
                'images' => 'https://www.bexinhshop.vn/image/data/26-6-2021/quandacacam.jpg',
                'description' => 'Quần túi hộp cho Btrai năng động - dễ dàng kết hợp với các loại áo.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 9,
                'color' => 'Màu cam',
                'age' => 9,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 7,
                'idUser' => 7,
                'categoryId' => 3,
                'title' => 'Quần kaki mộc',
                'images' => 'https://www.bexinhshop.vn/image/data/22-5-2021/quankakimocden2.jpg',
                'description' => 'Quần kaki thun dài cho bé trai bé gái điều bon chen mặc được.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 7,
                'color' => 'Màu trắng',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 8,
                'idUser' => 8,
                'categoryId' => 3,
                'title' => 'Quần da cá in sườn',
                'images' => 'https://www.bexinhshop.vn/image/data/25-4-2021/quandaca2.jpg',
                'description' => 'Siêu phẩm sang chảnh , Kool ngầu cho boy.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 8,
                'color' => 'Màu đen',
                'age' => 8,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 9,
                'idUser' => 9,
                'categoryId' => 3,
                'title' => 'Quần jeans dài',
                'images' => 'https://www.bexinhshop.vn/image/data/19-1-2021/quanjeansrachxanhdam.jpg',
                'description' => 'Cực chất , cực ngầu với chiếc quần jean vạn năng.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 10,
                'color' => 'Màu xanh',
                'age' => 10,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 10,
                'idUser' => 10,
                'categoryId' => 3,
                'title' => 'Quần jeans mộc',
                'images' => 'https://www.bexinhshop.vn/image/data/9-1-2021/jeansmocvang.jpg',
                'description' => 'Quần jeans mộc dễ thương cho bé đi chơi Lễ Tết.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 8,
                'color' => 'Màu vàng',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 11,
                'idUser' => 11,
                'categoryId' => 2,
                'title' => 'Áo hoodie sọc',
                'images' => 'https://www.bexinhshop.vn/image/data/9-7-2021/aohoodie3.jpg',
                'description' => 'Áo hoodie sọc CREME năng động - sành điệu cho bé mix đồ thời tiết giao mùa.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 5,
                'color' => 'Nhiều màu',
                'age' => 4,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 12,
                'idUser' => 12,
                'categoryId' => 2,
                'title' => 'Áo HOODIE in Toronto',
                'images' => 'https://www.bexinhshop.vn/image/data/9-7-2021/aohoddietoronto3.jpg',
                'description' => 'Áo HOODIE in Toronto dễ thương cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 8,
                'color' => 'Màu vàng',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 13,
                'idUser' => 13,
                'categoryId' => 2,
                'title' => 'Áo trụ sọc thêu khỉ',
                'images' => 'https://www.bexinhshop.vn/image/data/16-5-2021/aocotrusoc2.jpg',
                'description' => 'Áo trụ sọc siêu đẹp cho bé trai.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 5,
                'color' => 'Sọc đen trắng',
                'age' => 6,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 14,
                'idUser' => 14,
                'categoryId' => 2,
                'title' => 'Áo thun',
                'images' => 'https://www.bexinhshop.vn/image/data/25-4-2021/aoloangmauxam1.jpg',
                'description' => 'Áo thun in loang dễ thương cho bé trai.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 4,
                'color' => 'Màu xám',
                'age' => 3,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 15,
                'idUser' => 15,
                'categoryId' => 2,
                'title' => 'Áo sơ mi',
                'images' => 'https://www.bexinhshop.vn/image/data/19-1-2021/aosomihuouxanh2.jpg',
                'description' => 'Áo sơ mi hươu dễ thương lịch lãm cho bé đi chơi ngày Lễ Tết.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 8,
                'color' => 'Màu xanh',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,


            ], [

                'id' => 16,
                'idUser' => 16,
                'categoryId' => 6,
                'title' => 'Đầm tay bèo',
                'images' => 'https://www.bexinhshop.vn/image/data/11-6-2021/dambeoxanh1.jpg',
                'description' => 'Váy xinh người mặc cũng xinh, thêm 1 mẫu đầm siêu cute, cực chất và siu chảnh cho bé yêu.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 9,
                'color' => 'Màu xanh',
                'age' => 10,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 17,
                'idUser' => 17,
                'categoryId' => 6,
                'title' => 'Đầm xếp ly',
                'images' => 'https://www.bexinhshop.vn/image/data/3-5-2021/damxeplycam.jpg',
                'description' => 'Mẫu đầm xếp ly nhẹ nhàng, điệu đà mà thoải mái cho cô nàng dạo phố, đi chơi đi học đều đẹp.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 4,
                'color' => 'Màu hồng',
                'age' => 4,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 18,
                'idUser' => 18,
                'categoryId' => 6,
                'title' => 'Đầm trụ',
                'images' => 'https://www.bexinhshop.vn/image/data/16-5-2021/damtrumickeytrang.jpg',
                'description' => 'Đầm trụ gấu Mickey siêu dễ thương cho bé gái ngày hè.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 6,
                'color' => 'Màu da',
                'age' => 5,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 19,
                'idUser' => 19,
                'categoryId' => 6,
                'title' => 'Đầm kate cherry',
                'images' => 'https://www.bexinhshop.vn/image/data/10-5-2021/damkatecovxanh.jpg',
                'description' => 'Mẫu đầm hoa mới với màu sắc yêu mê mẩn.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 10,
                'color' => 'Màu hồng sen',
                'age' => 10,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,


            ], [

                'id' => 20,
                'idUser' => 20,
                'categoryId' => 1,
                'title' => 'Nón Jean',
                'images' => 'https://www.bexinhshop.vn/image/data/02-09-2018/asa/nonbetrai107.jpg',
                'description' => 'Nón Jean hoạ tiết NY phong cách cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 7,
                'color' => 'Màu xanh dương',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 21,
                'idUser' => 1,
                'categoryId' => 1,
                'title' => 'Nón Snapback',
                'images' => 'https://www.bexinhshop.vn/image/data/02-09-2018/asa/nhen2.jpg',
                'description' => 'Nón 3D hình người nhện cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 7,
                'color' => 'Đỏ xanh',
                'age' => 7,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 22,
                'idUser' => 2,
                'categoryId' => 1,
                'title' => 'Nón vành tròn',
                'images' => 'https://www.bexinhshop.vn/image/data/02-09-2018/asa/vanhtron1.jpg',
                'description' => 'Nón vành tròn NY vàng dễ thương cho bé',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 8,
                'color' => 'Màu da',
                'age' => 8,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 23,
                'idUser' => 3,
                'categoryId' => 4,
                'title' => 'Giày thể thao',
                'images' => 'https://www.bexinhshop.vn/image/data/02-09-2018/asa/giaythethao1019.jpg',
                'description' => 'Giày thể thao đế lượn CAN YOU dễ thương cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 6,
                'color' => 'Màu xanh',
                'age' => 6,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 24,
                'idUser' => 4,
                'categoryId' => 4,
                'title' => 'Giày thể thao',
                'images' => 'https://www.bexinhshop.vn/image/data/02-09-2018/asa/giaythethao1007.jpg',
                'description' => 'Giày thể thao Siêu Nhân Nhện đế hoạ tiết dễ thương cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 5,
                'color' => 'Màu đen',
                'age' => 5,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 25,
                'idUser' => 5,
                'categoryId' => 4,
                'title' => 'Giày thể thao',
                'images' => 'https://www.bexinhshop.vn/image/data/1-7-2019/GI%C3%80Y/giaythethao301.jpg',
                'description' => 'Giày thể thao S.U.P dễ thương cho bé',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 5,
                'color' => 'Màu hồng',
                'age' => 6,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 26,
                'idUser' => 6,
                'categoryId' => 4,
                'title' => 'Giày sandal',
                'images' => 'https://www.bexinhshop.vn/image/data/1-11-2014/non/sandal110.jpg',
                'description' => 'Giày sandal đính hoa KEM dễ thương cho bé',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 4,
                'color' => 'Màu hồng',
                'age' => 5,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,

            ], [

                'id' => 27,
                'idUser' => 7,
                'categoryId' => 4,
                'title' => 'Giày sandal',
                'images' => 'https://www.bexinhshop.vn/image/data/05-10-2014/non/sandal021.jpg',
                'description' => 'Sandal sỏ ngón thêu hoa đính hạt cực dễ thương cho bé.',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 3,
                'color' => 'Màu hồng',
                'age' => 3,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,
            ], [

                'id' => 28,
                'idUser' => 8,
                'categoryId' => 4,
                'title' => 'Dép Siêu nhân',
                'images' => 'https://www.bexinhshop.vn/image/data/02-09-2018/asa/depsieunhan4.jpg',
                'description' => 'Dép Siêu nhân nhện cực ngầu cho bé',

                'content' => " Bộ sản phẩm bao gồm áo váy, quần và áo khoác được làm từ chất liệu vải cotton cao cấp, kết hợp các đường may tỉ mỉ, gọn gàng, không chứa các chi tiết gây nổi cộm nên mẹ có thể hoàn toàn an tâm khi cho bé yêu sử dụng sản phẩm. Hơn hết, sự kết hợp hài hòa về màu sắc giúp mẹ có thể thoải mái phối thêm phụ kiện cho bé, giúp bé thêm xinh xắn và điệu đà.Set váy ấn tượng và thu hút bởi sự phối hợp màu sắc hài hòa giữa bộ quần áo và áo khoác ngoài, kết hợp thêm họa tiết thêu chữ trên ngực áo đơn giản mà ngộ nghĩnh, xinh xắn, chắc chắn bé gái sẽ thêm phần nổi bật và đáng yêu khi diện lên người.",

                'size' => 7,
                'color' => 'Màu xanh đen',
                'age' => 6,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'status' => 0,
            ],
//            [
//                'id' => ,
//                'idUser' => ,
//                'categoryId' => ,
//                'title' => '',
//                'images' => '',
//                'description' => '',
//                'content' => '',
//                'size' => ,
//                'color' => '',
//                'age' => ,
//                'created_at' => \Illuminate\Support\Carbon::now(),
//                'status' => 0,
//            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
