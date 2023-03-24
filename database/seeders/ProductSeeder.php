<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Camera IP 2MP bán cầu DS-2CD1323G0E-ID',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549177/anhcamera_lpaocq.jpg',
                'description' => '',
                'content' => '<h3>Đặc điểm nổi bật</h3>
                <ul>
                    <li>Thiết kế nhỏ gọn, m&agrave;u trắng trang nh&atilde;, di chuyển kh&eacute;o l&eacute;o gi&uacute;p l&agrave;m sạch hiệu quả.</li>
                    <li><strong>C&ocirc;ng suất 40W, lực h&uacute;t l&ecirc;n đến 500 Pa.</strong></li>
                    <li><strong>Dung t&iacute;ch hộp chứa bụi 800 ml thuận tiện h&uacute;t được nhiều bụi hơn, dễ d&agrave;ng th&aacute;o lắp v&agrave; vệ sinh.</strong></li>
                    <li>Thời gian <strong>sạc khoảng 2 giờ</strong> với dung lượng pin khoảng 2600 mAh cho <strong>thời gian sử dụng khoảng 100 ph&uacute;t.</strong></li>
                    <li>Cảm biến chống rơi, chống va chạm.</li>
                    <li>Điều khiển từ xa th&ocirc;ng qua <strong>remote tiện lợi.</strong></li>
                    <li>Thương hiệu Midea &ndash; Trung Quốc, sản xuất tại Trung Quốc.</li>
                </ul>
                <p><img src="http://hdntech.vn/wp-content/uploads/2022/10/note.jpg" alt="" width="800" height="600" srcset="https://hdntech.vn/wp-content/uploads/2022/10/note.jpg 800w, https://hdntech.vn/wp-content/uploads/2022/10/note-300x225.jpg 300w, https://hdntech.vn/wp-content/uploads/2022/10/note-768x576.jpg 768w, https://hdntech.vn/wp-content/uploads/2022/10/note-600x450.jpg 600w" sizes="(max-width: 800px) 100vw, 800px"></p>
                <p>Thiết kế tr&ograve;n với th&acirc;n m&aacute;y mỏng, nhẹ, di chuyển kh&eacute;o l&eacute;o xung quanh nh&agrave; gi&uacute;p l&agrave;m sạch hiệu quả dưới gầm tủ, gầm ghế sofa,&hellip; với độ cao chỉ khoảng 8 cm. B&ecirc;n cạnh đ&oacute; robot c&ograve;n c&oacute; thể vượt vật cản l&ecirc;n tới 2 cm gi&uacute;p robot l&agrave;m sạch tối ưu hơn.</p>
                <p>L&agrave;m sạch hiệu quả tr&ecirc;n c&aacute;c mặt s&agrave;n như: s&agrave;n gỗ, gạch men, thảm trải thấp,&hellip;</p>
                <p>Dung t&iacute;ch hộp chứa bụi l&agrave; 800 ml gi&uacute;p chứa được nhiều bụi bẩn hơn trong qu&aacute; tr&igrave;nh robot dọn dẹp, dễ d&agrave;ng th&aacute;o lắp v&agrave; vệ sinh.</p>',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Camera IP 2MP thân trụ DS-2CD1023G0E-ID',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549215/2b76d_k06isk.jpg',
                'description' => '<ul>
                <li>Camera IP th&acirc;n trụ 2MP</li>
                <li>Cảm bi&ecirc;́n hình ảnh 1/2.8&quot;, Đ&ocirc;̣ ph&acirc;n giải 1920x1080/25fps, H.265+</li>
                <li>Đ&ocirc;̣ nhạy sáng 0.028 lux . &Ocirc;́ng kính 2.8/4mm @ F2.0. T&acirc;̀m xa hồng ngoại 30m</li>
                <li>H&ocirc;̃ trợ 3D DNR , BLC , DWDR .</li>
                <li>Ngu&ocirc;̀n 12VDC; IP67,</li>
            </ul>',
                'content' => '<h3>Thông số kĩ thuật</h3>
                <div>
                <div>
                    <p><br></p>
                </div>
                    <ul>
                        <li>Camera IP HD Hồng ngoại 2MP chuẩn n&eacute;n H.264+</li>
                        <li>Cảm bi&ecirc;́n hình ảnh CMOS 1/2.8&quot;</li>
                        <li>Chu&acirc;̉n nén hình ảnh H.264+</li>
                        <li>Độ nhạy s&aacute;ng : M&agrave;u 0.01 Lux @(F1.2, AGC ON), 0 Lux với IR</li>
                        <li>Độ ph&acirc;n giải 1920 &times; 1080@25fps/30fps</li>
                        <li>&Ocirc;́ng kính 4.0mm (kh&ocirc;ng thay đổi)</li>
                        <li>Tăng cường hình ảnh với t&iacute;nh năng chống ngược s&aacute;ng số DWDR, giảm nhiễu số 3DNR, t&iacute;nh năng b&ugrave; s&aacute;ng BLC</li>
                        <li>Tầm xa hồng ngoại l&ecirc;n tới 30m.</li>
                        <li>Ti&ecirc;u chuẩn chống bụi,nước IP67</li>
                        <li>Hỗ trợ nguồn DC12V (Kh&ocirc;ng bao gồm nguồn đi theo cam)</li>
                        <li>Hỗ trợ dịch vụ Hik-connect</li>
                    </ul>
                </div>',
                'category_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Camera wifi dome IPC-A22EP-AG',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549223/3_xd1zgb.jpg',
                'description' => '<ul style="list-style-type: disc;margin-left:0cmundefined;">
                        <li>Camera IP kh&ocirc;ng d&acirc;y chất liệu vỏ nhựa.</li>
                        <li>Độ ph&acirc;n giải Full HD.</li>
                        <li>Quan s&aacute;t tầm xa hồng ngoại 10m.</li>
                        <li>&nbsp;T&iacute;nh năng ph&aacute;t hiện người, ph&aacute;t hiện tiếng ồn, ph&aacute;t hiện chuyển động, theo d&otilde;i th&ocirc;ng minh.</li>
                        <li>T&iacute;nh năng Wifi Hotspot (AP).</li>
                        <li>T&iacute;ch hợp m&iacute;c v&agrave; loa. Ghi h&igrave;nh 24/24h.</li>
                        <li>Đ&agrave;m thoại hai chiều, hỗ trợ khe cắm thẻ nhớ Micro SD, Max 256GB</li>
                    </ul>',
                'content' => '<h3>Thông số kĩ thuật</h3>
                    <ul class="decimal_type" style="list-style-type: disc;">
                        <li>Độ ph&acirc;n giải 2Megapixel CMOS 1/2.7&Prime; (1080P).</span></li>
                        <li>T&iacute;nh năng ph&aacute;t hiện người, ph&aacute;t hiện tiếng ồn, ph&aacute;t hiện chuyển động, theo d&otilde;i th&ocirc;ng minh</span></li>
                        <li>T&iacute;nh năng Wifi Hotspot (AP)</span></li>
                        <li><span style="background: white; font-size: 18px;"><span style="color: initial;">Chống ngược s&aacute;ng DWDR, tự động c&acirc;n bằng trắng (AWB), tự động b&ugrave; t&iacute;n hiệu ảnh (AGC), b&ugrave; s&aacute;ng (BLC), Chống nhiễu (3D-DNR) , &nbsp;</span></span></span></li>
                        <li>Tầm xa hồng ngoại 10m với c&ocirc;ng nghệ hồng ngoại th&ocirc;ng minh</span><span><br style=" border-box;font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;text-decoration-style: initial;text-decoration-color: initial;word-spacing:0px;"></span></li>
                        <li>Ống k&iacute;nh cố định 3.6mm, g&oacute;c nh&igrave;n 93&deg;(H), 48&deg;(V), 115&deg;(D), t&iacute;ch hợp m&iacute;c v&agrave; loa với chuẩn &acirc;m thanh G.711a / G.711u / PCM, quay qu&eacute;t ngang (PAN) 355&deg; tốc độ 100&deg; /s, quay dọc l&ecirc;n xuống 90&deg; 100&deg; /s. Ghi h&igrave;nh 24/24h</span></span></li>
                        <li>Đ&agrave;m thoại hai chiều, hỗ trợ khe cắm thẻ nhớ Micro SD, Max 256GB, t&iacute;ch hợp WiFi(IEEE802.11b/g/n) hỗ trợ P2P,chuẩn tương th&iacute;ch ONVIF, điện &aacute;p DC5V 1A , c&ocirc;ng suất &lt;3.5W</span></span></li>
                        <li><span style="background: white;">Chất liệu vỏ plastic</span><span>，</span><span>&nbsp;m&ocirc;i trường l&agrave;m việc từ -10&deg;C~+45&deg;C (&lt; 95%RH)</span></span></li>
                    </ul>
                ',
                'category_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Camera wifi thân IPC-F22FP',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549230/camera1_g5vmaq.jpg',
                
                'description' => '<ul>
                        <li>C&ocirc;ng nghệ full-color với 4 chế độ h&igrave;nh ảnh ban đ&ecirc;m</li>
                        <li>T&iacute;ch hợp đ&egrave;n LED trợ s&aacute;ng cũng như để cảnh b&aacute;o</li>
                        <li>Hỗ trợ Human Detection, kh&ocirc;ng c&oacute; t&iacute;ch hợp c&ograve;i.</li>
                        <li>Chuẩn n&eacute;n H265 tiết kiệm đến 50% dung lượng lưu trữ.</li>
                        <li>T&iacute;ch hợp micro ghi &acirc;m.</li>
                    </ul>
                ',
                'content' => '<ul>
                        <li>đ&acirc;y l&agrave; 1 loại &nbsp;loại camera hữu &iacute;
                        ch gi&uacute;p bạn bảo vệ tốt hơn ng&ocirc;
                        i nh&agrave; của m&igrave;nh nhờ hệ thống tia hồng ngoại c&oacute; 
                        tầm xa 30m gi&uacute;p ghi r&otilde; cả ban ng&agrave;y v&agrave; ban đ&ecirc;
                        m, đi k&egrave;m với đ&oacute; l&agrave; app iMou tương th&iacute;ch tr&ecirc;
                        n nhiều nền tảng như PC, tablet cho ta quản l&yacute; camera tiện hơn.
                        </li>
                    </ul>',
            
                'category_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Đầu ghi hình IP 4 kênh vỏ sắt DS-7104NI-Q1/M',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549239/giai-phap-nha-thong-minh-2_jtzard.jpg',
                'description' => '<ul>
                        <li>Đầu ghi h&igrave;nh IP hikvision 4 k&ecirc;nh</li>
                        <li>Cổng ra HDMI v&agrave; VGA với độ ph&acirc;n giải 1920X1080P.</li>
                        <li>Đ&ocirc;̣ ph&acirc;n giải ghi hình t&ocirc;́i đa 4MP.</li>
                        <li>H&ocirc;̃ trợ 1 c&ocirc;̉ng mạng 10/100/1000Mbps</li>
                        <li>Băng th&ocirc;ng đ&acirc;̀u vào 40Mbps</li>
                        <li>Băng th&ocirc;ng đ&acirc;̀u ra 60Mbps.</li>
                    </ul>',
                'content' => '<h3>Thông số chi tiết</h3>
                    <ul>
                        <li>Đầu ghi h&igrave;nh IP&nbsp;4 k&ecirc;nh</li>
                        <li>Chuẩn n&eacute;n video H.265+/ H.265/ H.264+/ H.264</li>
                        <li>Cổng ra HDMI v&agrave; VGA với độ ph&acirc;n giải 1920X1080P.</li>
                        <li>Đ&ocirc;̣ ph&acirc;n giải ghi hình t&ocirc;́i đa 4MP</li>
                        <li>H&ocirc;̃ trợ &ocirc;̉ cứng dung lượng đ&ecirc;́n 6TB</li>
                        <li>Băng th&ocirc;ng đ&acirc;̀u vào 40Mbps, băng th&ocirc;ng đ&acirc;̀u ra 60Mbps</li>
                        <li>H&ocirc;̃ trợ 1&nbsp;c&ocirc;̉ng mạng 10/100/1000Mbps</li>
                        <li>Một cổng mạng RJ45 tối đa 1000Mbps, 2 USB 2.0</li>
                        <li>Vỏ kim loại</li>
                        <li>Ngu&ocirc;̀n c&acirc;́p 12V D</li>
                        <li>Xuất xứ: Trung Quốc</li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Đầu ghi hình IP 8 kênh DS-7108NI-Q1M',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549245/3742_dau_ghi_hinh_hikvision_ds_7108ni_q1_m_hbda90.jpg',
                'description' => '
                    <ul>
                        <li>Đầu ghi h&igrave;nh IP 8 k&ecirc;nh.</li>
                        <li>Chuẩn n&eacute;n video H.265+/ H.265/ H.264+/ H.264.</li>
                        <li>>Cổng ra HDMI v&agrave; VGA với độ ph&acirc;n giải 1920X1080P.</li>
                        <li>>Đ&ocirc;̣ ph&acirc;n giải ghi hình t&ocirc;́i đa 4MP.</li>
                        <li>H&ocirc;̃ trợ &ocirc;̉ cứng dung lượng đ&ecirc;́n 6TB.</li>
                        <li>Băng th&ocirc;ng đ&acirc;̀u vào 60Mbps, băng th&ocirc;ng đ&acirc;̀u ra 60Mbps.</li>
                        <li>H&ocirc;̃ trợ 1 c&ocirc;̉ng mạng 10/100/1000Mbps.</li>
                        <li>Một cổng mạng RJ45 tối đa 1000Mbps, 2 USB 2.0.</li>
                        <li>>Vỏ kim loại.</li>
                    </ul>',
                'content' => '<h3>Th&ocirc;ng số kĩ thuật</h3>
                    <ul>
                        <li>
                            <p>Đầu ghi h&igrave;nh IP&nbsp;8&nbsp;k&ecirc;nh</p>
                        </li>
                        <li>
                            <p>Chuẩn n&eacute;n video H.265+/ H.265/ H.264+/ H.264</p>
                        </li>
                        <li>
                            <p>Cổng ra HDMI v&agrave; VGA với độ ph&acirc;n giải 1920X1080P.</p>
                        </li>
                        <li>
                            <p>Đ&ocirc;̣ ph&acirc;n giải ghi hình t&ocirc;́i đa 4MP</p>
                        </li>
                        <li>
                            <p>H&ocirc;̃ trợ &ocirc;̉ cứng dung lượng đ&ecirc;́n 6TB</p>
                        </li>
                        <li>
                            <p>Băng th&ocirc;ng đ&acirc;̀u vào 60Mbps, băng th&ocirc;ng đ&acirc;̀u ra 60Mbps</p>
                        </li>
                        <li>
                            <p>H&ocirc;̃ trợ 1&nbsp;c&ocirc;̉ng mạng 10/100/1000Mbps</p>
                        </li>
                        <li>
                            <p>Một cổng mạng RJ45 tối đa 1000Mbps, 2 USB 2.0</p>
                        </li>
                        <li>
                            <p>Vỏ kim loại</p>
                        </li>
                        <li>
                            <p>Ngu&ocirc;̀n c&acirc;́p 12V DC</p>
                        </li>
                        <li>
                            <p>Xuất xứ: Trung Quốc</p>
                        </li>
                        <li>
                            <p>Bảo h&agrave;nh: 24 th&aacute;ng</p>
                        </li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Ổ cứng 2TB WD',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549251/%C3%94%CC%89-c%C6%B0%CC%81ng-HDD-Western-Purple-2Tb-SATA3-5400rpm_azss42.jpg',
                'description' => '<ul>
                        <li>Dung lượng ổ cứng: 2TB</li>
                        <li>K&iacute;ch thước: 3.5Inch</li>
                        <li>Tốc độ quay: 5400rpm</li>
                        <li>Bộ nhớ Cache: 64MB</li>
                        <li>Chuẩn giao tiếp: SATA3</li>
                        <li>Nhu cầu sử dụng: Chuy&ecirc;n dụng cho Camera</li>
                        <li>T&iacute;nh năng kh&aacute;c: Sử dụng c&ocirc;ng nghệ AllFrame hỗ trợ l&ecirc;n đến 32 camera HD/k&ecirc;nh, hoạt động 24/7. Tối ưu h&oacute;a phục vụ cho mục đ&iacute;ch lưu trữ gi&aacute;m s&aacute;t/ DVR/ STB.</li>
                    </ul>',
                'content' => '<ul>
                        <li><img src="https://western.com.vn/media/lib/33_tinh-nang-HDD-WD-Purple-features.jpg" alt="" /></li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Ổ cứng 4TB WD',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549259/18466_8e89ca7772228b499a6db249096cf5ff__1__h8jol0.jpg',
                'description' => '<ul>
                        <li>Ổ cứng Western Digital Purple 4TB WD40PURZ</li>
                        <li>Th&iacute;ch hợp trong hệ thống camera</li>
                        <li>Bộ nhớ đệm : 64MB</li>
                        <li>Cache Chuẩn kết nối: SATA 3 (6Gb/s)</li>
                        <li>K&iacute;ch thước : 3.5 inch</li>
                        <li>V&ograve;ng quay : 5400RPM</li>
                    </ul>',
                'content' => '<ul>
                        <li>M&atilde; sản phẩm: WD42PURX</li>
                        <li>Chuẩn kết nối: SATA 3 (6Gb/s)</li>
                        <li>Dung lượng lưu trữ: 4TB</li>
                        <li>K&iacute;ch thước / Loại: 3.5 inch\</li>
                        <li>C&ocirc;ng nghệ Advanced Format (AF): C&oacute;</li>
                        <li>Tốc độ chuẩn kết nối: 6 Gb/s</li>
                        <li>Tốc độ ghi dữ liệu: 150 MB/s</li>
                        <li>Tốc độ v&ograve;ng quay: IntelliPower (thay đổi t&ugrave;y theo mức độ truy xuất)</li>
                        <li>Bộ nhớ đệm: 64MB</li>
                        <li>Điện năng ti&ecirc;u thụ: Đọc/ghi: 5.1&nbsp;W</li>
                        <li>Nhiệt độ hoạt động: 0 &ndash; 65&deg;C</li>
                        <li>Độ ồn hoạt động (Trung b&igrave;nh): 26 (dBA)</li>
                        <li>K&iacute;ch thước vật l&yacute;: 26.1 x147x101.6 mm (Cao x D&agrave;i x Rộng).</li>
                        <li>Trọng lượng: 0.68 kg</li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'Thẻ nhớ sandisk 32GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549266/thenho32gb_v1hzpq.webp',
                
                'description' => '
                    <ul>
                        <li>Dung lượng 32GB thoải m&aacute;i lưu trữ dữ liệu.</li>
                        <li>Chuẩn thẻ Class 10.</li>
                        <li>Tương th&iacute;ch cao.</li>
                        <li>Tốc độ đọc: 100MB/s</li>
                        <li>Tốc độ ghi: 20MB/s</li>
                    </ul>',
                'content' => '<ul>
                        <li>
                            <p>Thẻ nhớ 32Gb c&oacute; tốc độ l&ecirc;n tới 100MB/s c&oacute; chất lượng ho&agrave;n thiện cao cấp. C&oacute; khả năng chịu được trong nhiều điều kiện khắc nghiệt kh&aacute;c nhau. C&ugrave;ng với tốc độ truyền tải dữ liệu cao v&agrave; ổn định, đ&aacute;p ứng tốt cho nhu cầu lưu trữ dữ liệu cho người d&ugrave;ng trong học tập v&agrave; c&ocirc;ng việc.</p>
                        </li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 10,
                'name' => 'Thẻ nhớ sandisk 64GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549275/thenho64gb_bxrxws.webp',
                'description' => '<ul>
                        <li>Dụng lượng: 64Gb</li>
                        <li>Chuẩn Class 10 tốc độ cao</li>
                        <li>Ph&ugrave; hợp cho camera quan s&aacute;t</li>
                        <li>Chống chịu tốt</li>
                    </ul>',
                'content' => '<ul>
                        <li>Sở hữu tốc độ đọc l&ecirc;n tới 100Mb/s, cho ph&eacute;p bạn tiết kiệm thời gian chuyển dữ liệu từ thẻ v&agrave;o m&aacute;y t&iacute;nh. Bạn sẽ dễ d&agrave;ng gi&uacute;p copy dữ liệu từ thẻ sang m&aacute;y t&iacute;nh (v&agrave; ngược lại) một c&aacute;ch nhanh ch&oacute;ng với t&iacute;nh ổn định cao.</li>
                        <li>C&oacute; dung lượng lưu trữ l&ecirc;n đến 64GB bạn c&oacute; thể thoải m&aacute;i lưu trữ dữ liệu cho điện thoại hay m&aacute;y t&iacute;nh bảng của bạn. Sản phẩm thiết kế chịu được c&aacute;c điều kiện thời tiết khắc nghiệt. B&ecirc;n cạnh đ&oacute;, thẻ nhớ c&ograve;n tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn nghi&ecirc;m ngặt trong việc chống sốc, chống rung, tính &ocirc;̉n định cao.</li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 11,
                'name' => 'Thẻ nhớ sandisk 128GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549287/thenho1_vwsyvv.jpg',
                
                'description' => '<ul>
                        <li>Dung lượng:128GB</li>
                        <li>Thẻ nhớ MicroSD</li>
                        <li>Tốc độ ghi dữ liệu: Class 10</li>
                        <li>Tốc độ đọc dữ liệu: 120Mb/s</li>
                        <li>Tương th&iacute;ch tốt với c&aacute;c thiết bị số c&oacute; khe cắm mở rộng chuẩn MicroSD hoặc</li>
                        <li>MicroSDXC</li>
                    </ul>',
                'content' => '
                    <ul>
                        <li>L&agrave; l&agrave; một sự lựa chọn ho&agrave;n hảo nhất d&agrave;nh cho người d&ugrave;ng về tốc độ lẫn khả năng lưu trữ.</li>
                    </ul>',
                'category_id' => 1
            ],
            [
                'id' => 12,
                'name' => 'Bộ mở rộng wifi RG-EW1200R',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549326/580x580-1669366163-single_product1-bophatwifiruijiergew1200r1_pqp08v.jpg',
                'description' => '<ul>
                        <li>Chuẩn Wi-Fi 5 (802.11ac).</li>
                        <li>Tốc độ l&ecirc;n đến 1167Mbps, 2.4 GHz: 300 Mbps, 5 GHz: 867 Mbps.</li>
                        <li>Hỗ trợ 2 anten 4dBi.</li>
                        <li>Hỗ trợ 1 x 10/100 Base-T Port.</li>
                        <li>Hỗ trợ l&ecirc;n đến 64 users, đồng thời 24 users.</li>
                        <li>Hỗ trợ c&aacute;c chức năng: Repeater, Router, AP, WISP, WPS.</li>
                        <li>Điện &aacute;p 220V</li>
                </ul>',
                'content' => '<ul>
                        <li>Tiếp s&oacute;ng v&agrave; mở rộng ra to&agrave;n khu vực</li>
                        <li>Hỗ trợ mạngWiFi kh&aacute;ch ri&ecirc;ng biệt, SSID ẩn.</li>
                        <li>T&aacute;ch hoặc gộp SSID&nbsp;4G/5Ghz ri&ecirc;ng biệt hoặc gộp th&agrave;nh một SSID duy nhất, ưu ti&ecirc;n băng tần 5Ghz</li>
                        <li>Bao phủ to&agrave;n bộ mạng</li>
                        <li>Bộ khuếch đại t&iacute;n hiệu t&iacute;ch hợp</a>, t&iacute;n hiệu Wi-Fi ổn định to&agrave;n khu vực tiếp s&oacute;ng</li>
                        <li>C&ocirc;ng nghệ&nbsp;MU-MIMOMesh&nbsp;mang đến cho bạn kết nối t&iacute;n hiệu kh&ocirc;ng giới hạn ở những vị tr&iacute;&nbsp;bạn cần kết nối s&oacute;ng wifi</li>
                        <li>Đ&egrave;n LED th&ocirc;ng b&aacute;o t&iacute;nh trạng hoạt động, đ&egrave;n b&aacute;o t&iacute;n hiệu LAN/WAN</li>
                        <li>Chỉ b&aacute;o t&iacute;n hiệu ba thanh hướng dẫn bạn t&igrave;m vị tr&iacute; tốt nhất</li>
                        <li>Kết nối kh&ocirc;ng d&acirc;y tiện lợi&nbsp;hoặc d&acirc;y mạng LAN</li>
                        <li>Kiểm tra kết nối, khắc phục sự cố trực tuyến qua&nbsp;Ruijie Cloud: Quản l&yacute; người d&ugrave;ng, cấu h&igrave;nh, Optimize Network, Bandwitdth, NAT, Whitelist/Blacklist</li>
                        <li>T&iacute;nh năng Routing mode:&nbsp;PPoE/DHCP/Static IP; Repeater mode: Wired/Wireless</li>
                </ul>',
                'category_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Switch  TL-SF1005D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549335/anh_x9kms6.jpg',
                
                'description' => '<ul>
                        <li>Switch TP-Link 5Port 10/100Mbps</li>
                        <li>5 cổng RJ45 tự động tương th&iacute;ch tốc độ 10/100Mbps (Auto-Negotiation) v&agrave; hỗ trợ chuyển đổi MDI/MDIX.</li>
                        <li>C&ocirc;ng nghệ Ethernet xanh gi&uacute;p tiết kiệm điện năng ti&ecirc;u thụ.</li>
                        <li>Kiểm so&aacute;t lưu lượng IEEE 802.3x mang lại khả năng truyền tải dữ liệu đ&aacute;ng tin cậy.</li>
                        <li>Thiết kế để b&agrave;n với vỏ nhựa nhỏ gọn.</li>
                        <li>Kh&ocirc;ng y&ecirc;u cầu cấu h&igrave;nh, chỉ cần cắm v&agrave; v&agrave; sử dụng.&nbsp;</li>
                    </ul>',
                'content' => '<ul>
                        <img src="https://tinviettien.vn/uploads/product/01_2019/TPlink-TL-SF1005D.jpg" alt="" />
                        <li>
                            <h3>Hiệu Suất Cao</h3>

                                <p>Bộ chia t&iacute;n hiệu Ethernet tốc độ cao TL-SF1005D được trang bị 5 cổng RJ45 tự động tương th&iacute;ch tốc độ 10/100Mbps. Tất cả c&aacute;c cổng n&agrave;y đều được hỗ trợ chuyển đổi&nbsp;MDI/MDIX , qua đ&oacute; c&oacute; thể loại bỏ được vấn đề sử dụng c&aacute;p ch&eacute;o hoặc c&aacute;c cổng Uplink. Nổi bật với thiết kế ng&otilde; chia t&iacute;n hiệu kh&ocirc;ng bị chặn, thiết bị TL-SF1005D c&oacute; thể chuyển tiếp v&agrave; lọc c&aacute;c g&oacute;i tin với lưu lượng truyền tải c&oacute; tốc độ tối đa. Với khung Jumbo 2K, việc truyền tải c&aacute;c tập tin lớn sẽ được cải thiện đ&aacute;ng kể. Cuối c&ugrave;ng l&agrave; t&iacute;nh năng kiểm so&aacute;t lưu lượng IEEE 802.3x trong chế độ Full Duplex v&agrave; &aacute;p suất đối với chế độ Half Duplex sẽ gi&uacute;p loại bỏ khả năng tắc nghẽn lưu lượng v&agrave; l&agrave;m cho thiết bị TL-SF1005D hoạt động trơn tru hơn</p>
                        </li>
                        <li>
                            <h3>Dễ D&agrave;ng Sử Dụng</h3>
                                <p>C&aacute;c t&iacute;nh năng tự động của bộ chia t&iacute;n hiệu gi&uacute;p cho qu&aacute; tr&igrave;nh c&agrave;i đặt theo kiểu cắm v&agrave; chạy trở n&ecirc;n đơn giản hơn. Kh&ocirc;ng cần điều chỉnh cấu h&igrave;nh. T&iacute;nh năng hồ trợ chuyển đổi&nbsp;MDI/MDIX sẽ gi&uacute;p bạn kh&ocirc;ng c&ograve;n lo lắng về nhu cầu sử dụng d&acirc;y c&aacute;p. T&iacute;nh năng Tự Động Tương Th&iacute;ch Tốc Độ (Auto-negotiation)&nbsp;tr&ecirc;n mỗi cổng sẽ đo được tốc độ li&ecirc;n kết của một thiết bị mạng (10, 100 Mbps) v&agrave; sẽ tự điều chỉnh một c&aacute;ch th&ocirc;ng minh để c&oacute; thể ho&agrave;n to&agrave;n tương th&iacute;ch v&agrave; đạt hiệu suất tối ưu.</p>
                        </li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Switch  TL-SF1008D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549341/1591584982_11093-tp-link-switch-8-porttl-sf1008d_etuipu.jpg',
                
                'description' => '<ul>
                        <li>8 cổng RJ45 tự động tương th&iacute;ch tốc độ 10/100Mbps (Auto-Negotiation) v&agrave; hỗ trợ chuyển đổi MDI/MDIX.</li>
                        <li>C&ocirc;ng nghệ Ethernet xanh gi&uacute;p tiết kiệm điện năng ti&ecirc;u thụ.</li>
                        <li>Kiểm so&aacute;t lưu lượng IEEE 802.3x mang lại khả năng truyền&nbsp;tải dữ liệu đ&aacute;ng tin cậy.</li>
                        <li>Thiết kế để b&agrave;n với vỏ nhựa nhỏ gọn.</li>
                        <li>Kh&ocirc;ng y&ecirc;u cầu cấu h&igrave;nh, chỉ cần cắm v&agrave; v&agrave; sử dụng.&nbsp;</li>
                    </ul>',
                'content' => '
                    <div>
                        <p><strong>Chức năng sản phẩm&nbsp;</strong></p>
                        <p>Thiết bị TL-SF1008D l&agrave; một bộ chia t&iacute;n hiệu Ethernet tốc độ cao d&agrave;nh cho SOHO (Văn ph&ograve;ng nhỏ/Văn ph&ograve;ng nh&agrave;) hoặc một nh&oacute;m người d&ugrave;ng. Tất cả 8 cổng n&agrave;y đều hỗ trợ t&iacute;nh năng Auto MDI/MDIX, gi&uacute;p bạn kh&ocirc;ng c&ograve;n lo lắng về vấn đề d&acirc;y c&aacute;p lằng nhằng, bạn chỉ cần cắm v&agrave;o v&agrave; sử dụng. B&ecirc;n cạnh đ&oacute;, với c&ocirc;ng nghệ sử dụng năng lượng ti&ecirc;n tiến, thiết bị TL-SF1008D c&oacute; thể gi&uacute;p bạn tiết kiệm điện năng ti&ecirc;u thụ, tạo ra một giải ph&aacute;p th&acirc;n thiện với m&ocirc;i trường cho hệ thống mạng trong nh&agrave; hay văn ph&ograve;ng của bạn</p>
                        <p><strong>Hiệu Suất cao</strong></p>
                        <p>Bộ chia t&iacute;n hiệu Ethernet tốc độ cao TL-SF1008D được trang bị 8 cổng RJ45 Auto-Negotiation 10/100Mbps. Tất cả c&aacute;c cổng n&agrave;y đều được hỗ trợ chức năng Auto MDI/MDIX , qua đ&oacute; c&oacute; thể loại bỏ được vấn đề sử dụng c&aacute;p ch&eacute;o hoặc c&aacute;c cổng Uplink. Nổi bật với thiết kế ng&otilde; chia t&iacute;n hiệu kh&ocirc;ng bị chặn, thiết bị TL-SF1008D c&oacute; thể chuyển tiếp v&agrave; lọc c&aacute;c g&oacute;i tin với lưu lượng truyền tải c&oacute; tốc độ tối đa. Với khung Jumbo 2K, việc truyền tải c&aacute;c tập tin lớn sẽ được cải thiện đ&aacute;ng kể. Cuối c&ugrave;ng l&agrave; t&iacute;nh năng kiểm so&aacute;t lưu lượng IEEE 802.3x trong chế độ Full Duplex v&agrave; &aacute;p suất đối với chế độ Half Duplex sẽ gi&uacute;p loại bỏ khả năng tắc nghẽn lưu lượng v&agrave; l&agrave;m cho thiết bị TL-SF1008D hoạt động trơn tru hơn.</p>
                        <p><strong>C&ocirc;ng nghệ th&acirc;n thiện với m&ocirc;i trường của TP-LINK</strong></p>
                        <p>Bộ chia t&iacute;n hiệu Ethernet tốc độ cao TL-SF1008D l&agrave; một sản phẩm thế hệ mới nổi bật với c&ocirc;ng nghệ sử dụng năng lượng ti&ecirc;n tiến mới nhất. Khi sử dụng thiết bị n&agrave;y, người d&ugrave;ng c&oacute; thể mở rộng dung lượng mạng với một lượng điện năng ti&ecirc;u thụ rất khi&ecirc;m tốn. C&aacute;c vi mạch b&ecirc;n trong sẽ tự động điều chỉnh lượng ti&ecirc;u thụ điện năng theo trạng th&aacute;i li&ecirc;n kết v&agrave; v&agrave; chiều d&agrave;i d&acirc;y c&aacute;p để hạn chế lượng kh&iacute; thải Carbon trong hệ thống mạng của bạn.</p>
                        <p>Thiết bị n&agrave;y cũng ho&agrave;n to&agrave;n tương th&iacute;ch với ti&ecirc;u chuẩn RoHS của li&ecirc;n minh Ch&acirc;u &Acirc;u, trong đ&oacute; quy định việc cấm sử dụng một số nguy&ecirc;n vật liệu độc hại. B&ecirc;n cạnh đ&oacute;, 70% nguy&ecirc;n liệu đ&oacute;ng g&oacute;i c&oacute; thể được t&aacute;i chế</p>
                        <p><strong>Dễ sử dụng</strong></p>
                        <p>C&aacute;c t&iacute;nh năng tự động của bộ chia t&iacute;n hiệu&nbsp;n&agrave;y gi&uacute;p cho qu&aacute; tr&igrave;nh c&agrave;i đặt theo kiểu cắm v&agrave; chạy trở n&ecirc;n đơn giản hơn. Kh&ocirc;ng cần điều chỉnh cấu h&igrave;nh. T&iacute;nh năng Auto MDI/MDIX sẽ gi&uacute;p bạn kh&ocirc;ng c&ograve;n lo lắng về nhu cầu sử dụng d&acirc;y c&aacute;p. T&iacute;nh năng Auto-negotiation tr&ecirc;n mỗi cổng sẽ đo được tốc độ li&ecirc;n kết của một thiết bị mạng (10, 100 Mbps) v&agrave; sẽ tự điều chỉnh một c&aacute;ch th&ocirc;ng minh để c&oacute; thể ho&agrave;n to&agrave;n tương th&iacute;ch v&agrave; đạt hiệu suất tối ưu.&nbsp;</p>
                    </div>',
                'category_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'Switch  TL-SF1016D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549347/1159-2112_switch_tp_link_16p_1_glblbm.jpg',
                
                'description' => '<ul>
                        <li>16 cổng RJ45 10/100Mbps với kỹ thuật chiếm quyền điều khiển c&aacute;p (Auto-Negotiation) v&agrave; hỗ trợ t&iacute;nh năng MDI / MDIX</li>
                        <li>C&ocirc;ng nghệ xanh gi&uacute;p tiết kiệm điện năng l&ecirc;n đến 70%</li>
                        <li>Kiểm so&aacute;t lưu lượng IEEE 802.3x mang lại khả năng chuyển tải dữ liệu đ&aacute;ng tin cậy</li>
                        <li>Hộp bằng nhựa, thiết kế để b&agrave;n v&agrave; c&oacute; thể treo tường</li>
                        <li>Chỉ cần cắm v&agrave;o l&agrave; x&agrave;i, kh&ocirc;ng cần phải tinh chỉnh cấu h&igrave;nh</li>
                     </ul>',
                'content' => '<ul>
                        <li>
                            <p><strong>C&ocirc;ng nghệ th&acirc;n thiện với m&ocirc;i trường</strong></p>
                            <p>C&ocirc;ng nghệ sử dụng năng lượng ti&ecirc;n tiến mới nhất c&aacute;c vi mạch b&ecirc;n trong sẽ tự động điều chỉnh lượng ti&ecirc;u thụ điện năng theo trạng th&aacute;i li&ecirc;n kết</p>
                            <p>v&agrave; chiều d&agrave;i d&acirc;y c&aacute;p để hạn chế lượng kh&iacute; thải carbon trong hệ thống mạng của bạn.</p>
                            <p>Ho&agrave;n to&agrave;n tương th&iacute;ch với ti&ecirc;u chuẩn RoHS của li&ecirc;n minh Ch&acirc;u &Acirc;u, trong đ&oacute; quy định việc cấm sử dụng một số nguy&ecirc;n vật liệu độc hại.&nbsp;</p>
                            <p><img class="loading" src="https://hacom.vn/media/lib/2112_TL-SF1016DUN6.0-04_1495168473363p.jpg" alt="Switch TP-Link TL-SF1016D" width="800" data-was-processed="true" /></p>
                            <p><strong>Kết nối tốc độ cao v&agrave; t&iacute;nh tương th&iacute;ch tốt</strong></p>
                            <p>Ph&ugrave; hợp với c&aacute;c chuẩn IEEE 802.3,&nbsp;IEEE 802.3u,&nbsp;IEEE 802.x phổ biến, cung cấp tốc độ 10/100 Mbps đảm bảo truyền tải dữ liệu nhanh ch&oacute;ng&nbsp;</p>
                            <p>hỗ trợ chức năng Auto MDI/MDIX.</p>
                            <p><img class="loading" src="https://hacom.vn/media/lib/2112_713P6pyf1mL._SL1280_.jpg" alt="Switch TP-Link TL-SF1016D 1" width="800" data-was-processed="true" /></p>
                            <p><strong>Sử dụng đơn giản&nbsp;</strong></p>
                            <p>Kh&ocirc;ng cần thao t&aacute;c cấu h&igrave;nh cầu kỳ, chỉ cần cắm d&acirc;y nguồn, cắm d&acirc;y mạng v&agrave; sử dụng. Đ&egrave;n hi&ecirc;n thị dể quan s&aacute;t được t&igrave;nh trạng kết nối</p>
                        </li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Switch 4 cổng POE  RG-ES106D-P V2',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549352/15698_g1ymcy.png',
                'description' => '<ul>
                        <li>
                        <p>&nbsp;Support 4 x 10/100 Mbps PoE/PoE+ Ports and 2 x 10/100 Mbps uplink ports.</p>
                        </li>
                        <li>
                        <p>Support auto MDI/MDIX.</p>
                        </li>
                        <li>
                        <p>Switching capacity: 1.2Gbps.</p>
                        </li>
                        <li>
                        <p>Package forwarding rate: 0.89Mpps.</p>
                        </li>
                        <li>
                        <p>Power supply: 100-240V AC.</p>
                        </li>
                        <li>
                        <p>PoE power budget: 58W.</p>
                        </li>
                    </ul>',
                 'content' => '<div>
                    <p><strong>C&ocirc;ng Nghệ Xanh của TP-LINK</strong><br /> 
                    Bộ chia t&iacute;n hiệu Ethernet tốc độ cao TL-SF1016D l&agrave; 
                    một sản phẩm thế hệ mới nổi bật với c&ocirc;ng nghệ sử dụng năng lượng ti&ecirc;
                    n tiến mới nhất. Khi sử dụng thiết bị n&agrave;y, người d&ugrave;
                    ng c&oacute; thể mở rộng dung lượng mạng với một lượng điện năng ti&ecirc;u thụ rất khi&ecirc;
                    m tốn. C&aacute;c vi mạch b&ecirc;n trong sẽ tự động điều chỉnh lượng ti&ecirc;u thụ điện năng theo trạng th&aacute;
                    i li&ecirc;n kết v&agrave; chiều d&agrave;i d&acirc;y c&aacute;p để hạn chế lượng kh&iacute;
                    thải carbon trong hệ thống mạng của bạn.<br /> <strong>Hiệu Suất Cao</strong><br /> 
                    Bộ chia t&iacute;n hiệu Ethernet tốc độ cao TL-SF1016D được trang bị 16 cổng RJ45 Auto-Negotiation 10/100Mbps. Tất cả c&aacute;c cổng n&agrave;y đều được hỗ trợ chức năng Auto MDI/MDIX , qua đ&oacute; c&oacute; thể loại bỏ được vấn đề sử dụng c&aacute;
                    p ch&eacute;o hoặc c&aacute;c cổng Uplink. Nổi bật với thiết kế ng&otilde; chia t&iacute;
                    n hiệu kh&ocirc;ng bị chặn, thiết bị TL-SF1016D c&oacute; thể chuyển tiếp v&agrave; 
                    lọc c&aacute;c g&oacute;i tin với lưu lượng truyền tải c&oacute; tốc độ tối đa. Với khung Jumbo 10K, việc truyền tải c&aacute;
                    c tập tin lớn sẽ được cải thiện đ&aacute;ng kể. Cuối c&ugrave;ng l&agrave; t&iacute;
                    nh năng kiểm so&aacute;t lưu lượng IEEE 802.3x trong chế độ Full Duplex v&agrave; 
                    &aacute;p suất đối với chế độ Half Duplex sẽ gi&uacute;p loại bỏ khả năng tắc nghẽn lưu lượng v&agrave; 
                    l&agrave;m cho thiết bị TL-SF1016D hoạt động trơn tru hơn.<br /> <strong>Dễ Sử Dụng</strong><br /> 
                    C&aacute;c t&iacute;nh năng tự động của bộ chia t&iacute;n hiệu gigabit n&agrave;y gi&uacute;p cho qu&aacute; 
                    tr&igrave;nh c&agrave;i đặt theo kiểu cắm v&agrave; chạy trở n&ecirc;n đơn giản hơn. Kh&ocirc;
                    ng cần điều chỉnh cấu h&igrave;nh. T&iacute;nh năng Auto MDI/MDIX sẽ gi&uacute;p bạn kh&ocirc;
                    ng c&ograve;n lo lắng về nhu cầu sử dụng d&acirc;y c&aacute;p. T&iacute;nh năng Auto-negotiation tr&ecirc;n mỗi cổng sẽ đo được tốc độ li&ecirc;n kết của một thiết bị mạng (10, 100 Mbps) v&agrave; sẽ tự điều chỉnh một c&aacute;ch th&ocirc;ng minh để c&oacute; thể ho&agrave;n to&agrave;n tương th&iacute;ch v&agrave; đạt hiệu suất tối ưu.</p>
                 </div>',
                'category_id' => 2
            ],
            [
                'id' => 17,
                'name' => 'Switch 4 cổng POE RG-ES205GC-P',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549358/3-e6ff33b0-f7d8-4f84-81c9-20bb99276e3e_wd6vqv.webp',
                'content' => ' <h1>Switch POE 4 cổng RUIJIE REYEE RG-ES205GC-P</h1>
                <div>
                    <p><br></p>
                </div>
                <div>
                    <ul>
                        <li>Layer 2 Smart Managed PoE Switch 5 Cổng 10/100/1000BASE-T c&ocirc;ng suất 54W</li>
                        <li>4 cổng 10/100/1000M PoE/PoE+ tổng c&ocirc;ng suất 54W</li>
                        <li>1 cổng 10/100/1000M uplink</li>
                        <li>Tốc độ chuyển mạch: 10Gbps</li>
                        <li>MAC: 2K</li>
                        <li>Dễ d&agrave;ng quản l&yacute; v&agrave; cấu h&igrave;nh qua Ruijie cloud</li>
                        <li>T&iacute;ch hợp Web management</li>
                    </ul>',
                'description' => '<ul>
                        <li>&nbsp;Layer 2 Smart Managed PoE Switch 5 Cổng 10/100/1000BASE-T c&ocirc;ng suất 54W</li>
                        <li>4 cổng 10/100/1000M PoE/PoE+ tổng c&ocirc;ng suất 54W</li>
                        <li>1 cổng 10/100/1000M uplink</li>
                        <li>Tốc độ chuyển mạch: 10Gbps</li>
                        <li>&nbsp;MAC: 2K</li>
                        <li>Dễ d&agrave;ng quản l&yacute; v&agrave; cấu h&igrave;nh qua Ruijie cloud</li>
                        <li>T&iacute;ch hợp Web management</li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 18,
                'name' => 'Switch 8 cổng POE RG-ES209GC-P',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549364/image2_gwd9ho.png',
                'description' => '<ul>
                        <li>Layer 2 Smart Managed PoE Switch 9 Cổng 10/100/1000BASE-T c&ocirc;ng suất 120W.</li>
                        <li>8 cổng 10/100/1000M PoE/PoE+ tổng c&ocirc;ng suất 120W.</li>
                        <li>1 cổng 10/100/1000M uplink.</li>
                        <li>Tốc độ chuyển mạch: 18Gbps.</li>
                        <li>MAC: 2K.</li>
                        <li>Dễ d&agrave;ng quản l&yacute; v&agrave; cấu h&igrave;nh qua Ruijie cloud</li>
                        <li>T&iacute;ch hợp Web management</li>
                    </ul>',
                'content' => '<h3><strong>Th&ocirc;ng số kỹ thuật Switch POE 9 cổng RUIJIE REYEE RG-ES209GC-P</strong></h3>
                    <ul>
                        <li>
                        <p>Layer 2 Smart Managed PoE Switch 9 Cổng 10/100/1000BASE-T c&ocirc;ng suất 120W.</p>
                        </li>
                        <li>
                        <p>8 cổng 10/100/1000M PoE/PoE+ tổng c&ocirc;ng suất 120W.</p>
                        </li>
                        <li>
                        <p>1 cổng 10/100/1000M uplink.</p>
                        </li>
                        <li>
                        <p>Tốc độ chuyển mạch: 18Gbps.</p>
                        </li>
                        <li>
                        <p>MAC: 2K.</p>
                        </li>
                        <li>
                        <p>T&iacute;nh năng Layer 2: port mirroring, loop protection, cable detection.</p>
                        </li>
                        <li>
                        <p>T&iacute;nh năng bảo mật: broadcast storm suppression, port speed limit, port isolation.</p>
                        </li>
                        <li>
                        <p>Dễ d&agrave;ng quản l&yacute; v&agrave; cấu h&igrave;nh qua Ruijie cloud.</p>
                        </li>
                        <li>
                        <p>T&iacute;ch hợp Web management.</p>
                        </li>
                        <li>
                        <p>Hỗ trợ IEEE802.1Q VLAN, bảo mật giữa c&aacute;c nh&oacute;m thiết bị.</p>
                        </li>
                        <li>
                        <p>Chống s&eacute;t: 4KV.</p>
                        </li>
                        <li>
                        <p>Nguồn AC 100~240V, 50/60Hz.</p>
                        </li>
                        <li>
                        <p>K&iacute;ch thước: 202*108*28mm.</p>
                        </li>
                        <li>
                        <p>Nhiệt độ hoạt động: 0&deg;C~40&deg;C</p>
                        </li>
                        <li>
                        <p>Xuất xứ: Trung Quốc.</p>
                        </li>
                        <li>
                        <p>Bảo h&agrave;nh: 3 năm.</p>
                        </li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 19,
                'name' => 'Switch RG-ES05',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549369/p_61434_RUIJIE-RG-ES05_edlmcl.jpg',
                'description' => '<ul>
                        <li>Cổng 10/100 Base-T</li>
                        <li>Tốc độ chuyển mạch: 1Gbps</li>
                        <li>Tốc độ chuyển g&oacute;i tin: 0.744 Mpps</li>
                        <li>Nguồn: DC 5.0V/600mA</li>
                        <li>MAC: 1K</li>
                        <li>Chất liệu: Vỏ nhựa</li>
                    </ul>',
                'content' => '<h3><strong>Th&ocirc;ng số kỹ thuật Switch RG-ES05</strong></h3>
                    <ul>
                        <li>Switch 5 cổng 10/100BASE-T</li>
                        <li>Tốc độ chuyển mạch: 1Gbps</li>
                        <li>Half-duplex, full-duplex, auto-negotiation mode, support auto MDI/MDIX</li>
                        <li>MAC: 1K</li>
                        <li>Hỗ trợ tự động: MDI/MDIX</li>
                        <li>Half-duplex, full-duplex, auto-negotiation mode</li>
                        <li>Nguồn DC 5.0V / 600mA</li>
                        <li>Nhiệt độ hoạt động: 0&deg;C~40&deg;C</li>
                        <li>K&iacute;ch thước: 108.1mm*64mm*24.8mm</li>
                        <li>Chất liệu: vỏ nhựa</li>
                        <li>Xuất xứ: Trung Quốc.</li>
                        <li>Bảo h&agrave;nh: 36 th&aacute;ng.</li>
                </ul>',
                'category_id' => 2
            ],
            [
                'id' => 20,
                'name' => 'Switch RG-ES08',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549374/ES08_gnlwll.jpg',
                'description' => '<div>
                    <ul>
                        <li>Layer 2 Smart Managed PoE Switch 5 Cổng 10/100/1000BASE-T c&ocirc;ng suất 54W</li>
                        <li>4 cổng 10/100/1000M PoE/PoE+ tổng c&ocirc;ng suất 54W</li>
                        <li>1 cổng 10/100/1000M uplink</li>
                        <li>Tốc độ chuyển mạch: 10Gbps</li>
                        <li>MAC: 2K</li>
                        <li>Dễ d&agrave;ng quản l&yacute; v&agrave; cấu h&igrave;nh qua Ruijie cloud</li>
                        <li>T&iacute;ch hợp Web management</li>
                </ul>
            </div>',
                'content' => '
                            <div>
                                <h3><strong>Th&ocirc;ng số kỹ thuật Switch POE 5 cổng RUIJIE REYEE RG-ES205GC-P</strong></h3>
                                <ul>
                                    <li>Layer 2 Smart Managed PoE Switch 5 Cổng 10/100/1000BASE-T c&ocirc;ng suất 54W</li>
                                    <li>4 cổng 10/100/1000M PoE/PoE+ tổng c&ocirc;ng suất 54W</li>
                                    <li>1 cổng 10/100/1000M uplink</li>
                                    <li>Tốc độ chuyển mạch: 10Gbps</li>
                                    <li>MAC: 2K</li>
                                    <li>T&iacute;nh năng Layer 2: port mirroring, loop protection, cable detection</li>
                                    <li>T&iacute;nh năng bảo mật: broadcast storm suppression, port speed limit, port isolation</li>
                                    <li>Dễ d&agrave;ng quản l&yacute; v&agrave; cấu h&igrave;nh qua Ruijie cloud</li>
                                    <li>T&iacute;ch hợp Web management</li>
                                    <li>Chống s&eacute;t: 4KV</li>
                                    <li>K&iacute;ch thước: 148*78*26mm</li>
                                    <li>Nhiệt độ hoạt động: 0&deg;C~40&deg;C</li>
                                    <li>Nguồn AC 100~240V, 50/60Hz</li>
                                    <li>Hỗ trợ IEEE802.1Q VLAN, bảo mật giữa c&aacute;c nh&oacute;m thiết bị</li>
                                    <li>Xuất xứ: Trung Quốc.</li>
                                    <li>&nbsp;Bảo h&agrave;nh: 3 năm.</li>
                                </ul>
                            </div>',
                'category_id' => 2
            ],
            [
                'id' => 21,
                'name' => 'Thiết bị phát wifi Archer A5',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549380/38554_tp_link_archer_c60_ha1_b3yes9.jpg',
                'content' => '<div>
                <h1>Router Wi-Fi Băng Tần K&eacute;p AC1200</h1>
            </div>
            <div>
                <ul>
                    <li align="left">Hỗ trợ chuẩn 802.11ac</li>
                    <li align="left">Kết nối đồng thời 2.4GHz 300 Mbps&nbsp;v&agrave; 5GHz 867 Mbps cho tổng băng th&ocirc;ng khả dụng l&agrave; 1200 Mbps</li>
                    <li align="left">4 ăng-ten ngo&agrave;i cung cấp kết nối kh&ocirc;ng d&acirc;y ổn định v&agrave; v&ugrave;ng phủ s&oacute;ng tối ưu</li>
                    <li align="left">Quản l&yacute; mạng dễ d&agrave;ng với Ứng dụng Tether TP-Link</li>
                    <li align="left">Hỗ trợ IGMP Proxy/Snooping, Cầu nối&nbsp;v&agrave; Tag VLAN để tối ưu h&oacute;a luồng IPTV</li>
                    <li align="left">Hỗ trợ chế độ Điểm Truy Cập (Access Point) để tạo một điểm truy cập Wi-Fi mới</li>
                </ul>',
            'description' => '<ul>
                    <li>Hỗ trợ chuẩn 802.11ac</li>
                    <li>Kết nối đồng thời 2.4GHz 300 Mbps&nbsp;v&agrave; 5GHz 867 Mbps cho tổng băng th&ocirc;ng khả dụng l&agrave; 1200 Mbps</li>
                    <li>4 ăng-ten ngo&agrave;i cung cấp kết nối kh&ocirc;ng d&acirc;y ổn định v&agrave; v&ugrave;ng phủ s&oacute;ng tối ưu</li>
                    <li>Quản l&yacute; mạng dễ d&agrave;ng với Ứng dụng Tether TP-Link</li>
                    <li>Hỗ trợ IGMP Proxy/Snooping, Cầu nối&nbsp;v&agrave; Tag VLAN để tối ưu h&oacute;a luồng IPTV</li>
                    <li>Hỗ trợ chế độ Điểm Truy Cập (Access Point) để tạo một điểm truy cập Wi-Fi mới</li>
                </ul>',
                'category_id' => 2
            ],
            [
                'id' => 22,
                'name' => 'Thiết bị phát wifi Archer A8',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549386/anh2_fttsvf.jpg',
                'description' => '<ul>
                        <li>Wi-Fi Wave2 802.11ac &ndash; 1300 Mbps tr&ecirc;n băng tần 5 GHz v&agrave; 600 Mbps tr&ecirc;n băng tần 2.4 GHz.</li>
                        <li>C&ocirc;ng nghệ MIMO 3&times;3</li>
                        <li>Tăng cường v&ugrave;ng phủ Wi-Fi &ndash; C&ocirc;ng nghệ Beamforming mang lại kết nối kh&ocirc;ng d&acirc;y hiệu quả cao.</li>
                        <li>MU-MIMO &ndash; Để gi&uacute;p thiết bị của bạn đạt được hiệu suất tối ưu bằng c&aacute;ch giao tiếp hiệu quả hơn</li>
                        <li>Quản l&yacute; được c&aacute; nh&acirc;n h&oacute;a</li>
                        <li>Kết nối th&ocirc;ng minh</li>
                    </ul>',
                'content' => '<p><img src="https://bizweb.dktcdn.net/100/082/878/products/4-normal-1588213366815f.jpg?v=1678084826570" alt="" /></p>
                    <ul>
                        <li>
                        <h3>T&iacute;nh năng nổi bật router TP-LINK Archer A8</h3>
                            <p>&ndash; Wi-Fi Wave2 802.11ac &ndash; 1300 Mbps tr&ecirc;n băng tần 5 GHz v&agrave; 600 Mbps tr&ecirc;n băng tần 2.4 GHz.<br />&ndash; C&ocirc;ng nghệ MIMO 3&times;3&ndash; Truyền v&agrave; nhận dữ liệu tr&ecirc;n ba luồng để gh&eacute;p nối ho&agrave;n hảo với m&aacute;y kh&aacute;ch 3&times;3 của bạn.<br />&ndash; Tăng cường v&ugrave;ng phủ Wi-Fi &ndash; C&ocirc;ng nghệ Beamforming mang lại kết nối kh&ocirc;ng d&acirc;y hiệu quả cao.<br />&ndash; MU-MIMO &ndash; Để gi&uacute;p thiết bị của bạn đạt được hiệu suất tối ưu bằng c&aacute;ch giao tiếp hiệu quả hơn.<br />&ndash; Quản l&yacute; được c&aacute; nh&acirc;n h&oacute;a &ndash; C&aacute;c t&iacute;nh năng n&acirc;ng cao như Quyền kiểm so&aacute;t của phụ huynh, Mạng kh&aacute;ch v&agrave; Kiểm so&aacute;t truy cập cung cấp c&aacute;c c&ocirc;ng cụ được c&aacute; nh&acirc;n h&oacute;a để quản l&yacute; mạng.<br />&ndash; Kết nối th&ocirc;ng minh &ndash; Kết nối th&ocirc;ng minh hướng m&aacute;y kh&aacute;ch đến băng tần &iacute;t tắc nghẽn hơn v&agrave; C&ocirc;ng bằng thời gian ph&aacute;t s&oacute;ng (Airtime Fairness) tối ưu h&oacute;a việc sử dụng thời gian.</p>
                        <h2>Th&ocirc;ng số kỹ thuật Router Wi-Fi MU-MIMO AC1900 TP-LINK Archer A8</h2>
                            <p>&ndash; Sản phẩm&nbsp;router TP-Link</a>&nbsp;d&ograve;ng SOHO<br />&ndash; Ti&ecirc;u chuẩn Wi-Fi 5<br />+ IEEE 802.11ac/n/a 5 GHz<br />+ IEEE 802.11n/b/g 2.4 GHz<br />&ndash; WiFi Speeds: AC1900<br />+ 5 GHz: 1300 Mbps (802.11ac)<br />+ 2.4 GHz: 600 Mbps (802.11n)<br />&ndash; Băng tần k&eacute;p: Ph&acirc;n bổ thiết bị cho c&aacute;c băng tần kh&aacute;c nhau để c&oacute; hiệu suất tối ưu<br />&ndash; 3 &times; 3 MU-MIMO: Giao tiếp đồng thời với nhiều m&aacute;y kh&aacute;ch MU-MIMO<br />&ndash; Airtime Fairness: Cải thiện hiệu quả mạng bằng c&aacute;ch hạn chế chiếm dụng qu&aacute; nhiều<br />&ndash; Working Modes<br />+ Chế độ Router<br />+ Chế độ Access Point<br /><strong>HARDWARE</strong><br />&ndash; Processor: CPU l&otilde;i đơn 1.2 GHz<br />&ndash; Ethernet Ports:<br />+ 1&times; cổng WAN Gigabit<br />+ 4&times; cổng LAN Gigabit<br />&ndash; Buttons<br />+ N&uacute;t WPS / Wi-Fi<br />+ N&uacute;t Bật / Tắt nguồn<br />&ndash; N&uacute;t reset<br />&ndash; Power<br />+ Phi&ecirc;n bản US: 12 V ⎓ 1.5 A<br />+ Phi&ecirc;n bản EU: 12 V ⎓ 1 A</p>
                            <p><strong>BẢO MẬT</strong><br />WiFi Encryption WEP: WPA/ WPA2/ WPA/WPA2-Enterprise (802.1x)/ WPA3<br />&ndash; Network Security<br />+ Tường lửa SPI<br />+ Kiểm so&aacute;t truy cập<br />+ Li&ecirc;n kết IP &amp; MAC<br />+ Cổng lớp ứng dụng<br />&ndash; Guest Network:<br />+ 1&times; mạng kh&aacute;ch 5GHz<br />+ 1&times; mạng kh&aacute;ch 2.4GHz<br />&ndash; Protocols: IPv4/ IPv6<br />&ndash; WAN Types: IP động/ IP tĩnh/ PPPoE/ PPTP/ L2TP<br />&ndash; DHCP: D&agrave;nh ri&ecirc;ng địa chỉ/ Danh s&aacute;ch m&aacute;y kh&aacute;ch DHCP/ M&aacute;y chủ<br />&ndash; DDNS: TP-Link/ NO-IP/ DynDNS<br />&ndash; K&iacute;ch thước: 243 &times; 160.6 &times; 32.5 mm<br />&ndash; Chứng nhận FCC, CE, RoHS<br />&ndash; Xuất xứ: Trung Quốc<br />&ndash; Bảo h&agrave;nh: 24 th&aacute;ng</p>
                            <p><strong>Trọn bộ gồm:</strong><br />&ndash; Router Wi-Fi Archer A8<br />&ndash; Bộ chuyển đổi nguồn<br />&ndash; C&aacute;p Ethernet RJ45<br />&ndash; Hướng dẫn c&agrave;i đặt nhanh</p>
                        </li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 23,
                'name' => 'Thiết bị phát wifi RG-EW300 PRO',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549392/rg-ew300-pro_q61wve.webp',
                'description' => '<ul>
                        <li>Bộ định tuyến th&ocirc;ng minh kh&ocirc;ng d&acirc;y 300M 11N.</li>
                        <li>CPU l&otilde;i k&eacute;p bốn luồng.</li>
                        <li>Truy cập đồng thời khuyến nghị l&ecirc;n đến 16 thiết bị.</li>
                        <li>Truy cập kh&ocirc;ng d&acirc;y: băng tần đơn 300Mbps.</li>
                        <li>Truy cập c&oacute; d&acirc;y: 1 cổng WAN v&agrave; 3 cổng LAN.</li>
                        <li>Hỗ trợ giao thức 802.11N.</li>
                        <li>Bộ khuếch đại t&iacute;n hiệu hiệu suất cao độc lập (FEM).</li>
                    </ul>',
                'content' => '<h3>Thông số kĩ thuật Thiết bị phát wifi RG-EW300 PRO</h3>
                    <ul>
                        <li>Bộ định tuyến th&ocirc;ng minh kh&ocirc;ng d&acirc;y 300M 11N.</li>
                        <li>CPU l&otilde;i k&eacute;p 4 luồng.</li>
                        <li>Truy cập đồng thời khuyến nghị l&ecirc;n đến 16 thiết bị.</li>
                        <li>Truy cập kh&ocirc;ng d&acirc;y: băng tần đơn 300Mbps.</li>
                        <li>Truy cập c&oacute; d&acirc;y: 1 cổng WAN v&agrave; 3 cổng LAN.</li>
                        <li>Ti&ecirc;u chuẩn Wi-Fi: Wi-Fi 4 (802.11n)</li>
                        <li>Ăng-ten: 2,4 GHz: 5 dBi</li>
                        <li>C&ocirc;ng nghệ ti&ecirc;n tiến: WISP</li>
                        <li>Bộ khuếch đại t&iacute;n hiệu hiệu suất cao độc lập (FEM).</li>
                        <li>Quản l&yacute; th&ocirc;ng qua ứng dụng Reyee Router tr&ecirc;n điện thoại di động.</li>
                        <li>K&iacute;ch thước: 210 mm &times; 180 mm &times; 33 m</li>
                        <li>Trọng lượng: 0,26 kg</li>
                        <li>Xuất xứ: Trung Quốc.</li>
                        <li>Bảo h&agrave;nh: 3 năm.</li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 24,
                'name' => 'Thiết bị phát wifi RG-EW1200',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549402/2_ngn0ox.jpg',
                'description' => '<ul>
                        <li>Tốc độ l&ecirc;n đến 1167Mbps</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz</li>
                        <li>Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 20+</li>
                        <li>1 cổng 10/100M WAN (Auto MDI/MDIX), 3 cổng 10/100</li>
                        <li>Hỗ trợ dịch vụ Ruijie Cloud miễn ph&iacute;</li>
                        <li>Hỗ trợ Mesh nhiều bộ Wifi với nhau.</li>
                        <li>Hỗ trợ Roamming Layer 2</li>
                    </ul>',
                    'content' => '<h3>Thông số kĩ thuật Thiết bị phát wifi RG-EW1200</h3> 
                    <ul>
                        <li>Tốc độ l&ecirc;n đến 1167Mbps</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz chuẩn 802.11a/b/g/n/ac Wave1/Wave2, MU-MIMO</li>
                        <li>Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 20+</li>
                        <li>1 cổng 10/100M WAN (Auto MDI/MDIX), 3 cổng 10/100 LAN (Auto MDI/MDIX)</li>
                        <li>T&iacute;nh năng ch&iacute;nh<br />+ Chế độ định tuyến: PPPoE / DHCP / static IP<br />+ Chế độ ph&aacute;t lại: d&acirc;y/ kh&ocirc;ng d&acirc;y<br />+ Guest Wi-Fi; smart home Wi-Fi; wireless network isolation, hỗ trợ kết nối&nbsp;camera wifi</a><br />+ Static DHCP address<br />+ Port mapping, DMZ, etc.<br />+ DDNS: Oray<br />+ UPnP</li>
                        <li>T&iacute;nh năng bảo mật:<br />+ WPA-PSK/WPA2-PSK<br />+ ARP protection: IP/MAC binding<br />+ SSID hiding<br />+ Preventing rogue devices (Blacklist/whitelist)<br />+ Kiểm so&aacute;t truy cập</li>
                        <li>Hỗ trợ dịch vụ Ruijie Cloud miễn ph&iacute; cho ph&eacute;p cấu h&igrave;nh nhanh, đơn giản, quản l&yacute; v&agrave; gi&aacute;m s&aacute;t dễ d&agrave;ng</li>
                        <li>Hỗ trợ Mesh nhiều bộ Wifi với nhau (đề xuất 3 thiết bị)</li>
                        <li>Hỗ trợ Roamming Layer 2</li>
                        <li>Đ&atilde; bao gồm nguồn DC 12V/ 0.6A</li>
                        <li>K&iacute;ch thước 182x121x32mm (W&times;D&times;H, bao gồm cả anten)</li>
                        <li>Xuất xứ: Trung Quốc.</li>
                        <li>Bảo h&agrave;nh: 3 năm.</li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 25,
                'name' => 'Thiết bị phát wifi RG-EW1200G Pro',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549415/Router-WiFi-Ruijie-RG-EW1200G-PRO-Chinh-Hang-_-Bang-Tan-Kep-Toc-Do-1267Mbps-Chiu-Tai-30-User-16_qplbop.jpg',
                'description' => '<ul>
                        <li>Router Wifi gia đ&igrave;nh</li>
                        <li>Tốc độ l&ecirc;n đến 1267Mbps</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz chuẩn 802.11a/b/g/n/ac Wave1/Wave2, MU-MIMO</li>
                        <li>Độ lợi Antenna 6 x 6dBi</li>
                        <li>Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 30+</li>
                        <li>1 cổng 10/100/1000M WAN (Auto MDI/MDIX), 3 cổng 10/100/1000M LAN (Auto MDI/MDIX)</li>
                    </ul>'
                    ,
                'content' => '<h3>Thông số kĩ thuật Thiết bị phát wifi RG-EW1200G PRO</h3>
                    <ul>
                        <li>Tốc độ l&ecirc;n đến 1267Mbps</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz chuẩn 802.11a/b/g/n/ac Wave1/Wave2, MU-MIMO</li>
                        <li>Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 32+</li>
                        <li>1 cổng 10/100/1000M WAN (Auto MDI/MDIX), 3 cổng 10/100/1000M LAN (Auto MDI/MDIX)</li>
                        <li><strong>T&iacute;nh năng ch&iacute;nh</strong><br />+ Chế độ định tuyến: PPPoE / DHCP / static IP<br />+ Chế độ ph&aacute;t lại: d&acirc;y / kh&ocirc;ng d&acirc;y<br />+ Guest Wi-Fi; smart home Wi-Fi; wireless network isolation<br />+ Static DHCP address<br />+ Port mapping, DMZ, etc.<br />+ DDNS: Oray<br />+ UPnP</li>
                        <li><strong>T&iacute;nh năng bảo mật:</strong><br />+ WPA-PSK/WPA2-PSK<br />+ ARP protection: IP/MAC binding<br />+ SSID hiding<br />+ Preventing rogue devices (Blacklist/whitelist)<br />+ Kiểm so&aacute;t truy cập</li>
                        <li>Hỗ trợ dịch vụ Ruijie Cloud miễn ph&iacute; cho ph&eacute;p c&agrave;i đặt nhanh, quản l&yacute; gi&aacute;m s&aacute;t v&agrave; bảo tr&igrave; từ xa</li>
                        <li>Hỗ trợ Mesh tối đa đến 5 bộ thiết bị</li>
                        <li>Hỗ trợ Roamming Layer 2</li>
                        <li>T&iacute;nh năng Parent control cho ph&eacute;p kiểm so&aacute;t truy cập: web-block-list, giới hạn thời gian, &hellip;</li>
                        <li>Xpress Mode cho ph&eacute;p router tự động tối ưu chống nhiễu tăng tốc truy cập cho người d&ugrave;ng</li>
                        <li>Nguồn DC 12V 1.5A (Đ&atilde; bao gồm)</li>
                        <li>K&iacute;ch thước 220x140x36mm (W&times;D&times;H, bao gồm cả Ăng ten)</li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 26,
                'name' => 'Thiết bị phát wifi RG-RAP1200(F)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549423/6264_thiet_bi_mang_wifi_ruijie_rg_rap1200f_ohnmlk.jpg',
                
                'description' => '<ul>
                        <li>
                            <p>Tốc độ l&ecirc;n đến 1267Mbps</p>
                        </li>
                        <li>
                            <p>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz</p>
                        </li>
                        <li>
                            <p>Hỗ trợ tối đa 110 người d&ugrave;ng | 8 SSID</p>
                        </li>
                        <li>
                            <p>Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 24+</p>
                        </li>
                    </ul>',
                'content' => '<p><img src="https://viethansecurity.com/media/lib/23-05-2022/thiet-bi-phat-wifi-am-tuong-ruijie-rg-rap1200-f-tot-nhat.jpg" alt="" /></p>
                <h3>Thông số kĩ thuật Thiết bị phát wifi âm tường RUIJIE RG-RAP1200(F)</h3>
                    <ul>
                        <li>Tốc độ l&ecirc;n đến 1267Mbps</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz chuẩn 802.11a/b/g/n/ac Wave1/Wave2, MU-MIMO</li>
                        <li>Hỗ trợ tối đa 110 người d&ugrave;ng | 8 SSID</li>
                        <li>Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 24+"</li>
                        <li>1 cổng 10/100M Uplink, 1 cổng 10/100M Ethernet LAN hỗ trợ kết nối cho IPTV, IP phone</li>
                        <li>Hỗ trợ nguồn 802.3af PoE &lt;8W</li>
                        <li>Hỗ trợ dịch vụ Ruijie Cloud miễn ph&iacute; cho ph&eacute;p c&agrave;i đặt nhanh, quản l&yacute; gi&aacute;m s&aacute;t v&agrave; bảo tr&igrave; từ xa</li>
                        <li>Thiết kế ph&ugrave; hợp với k&iacute;ch thước ổ cắm chuẩn 86-type</li>
                        <li>Hỗ trợ Roamming Layer 2, Layer 3</li>
                        <li>Thiết bị kh&ocirc;ng bao gồm ch&acirc;n đế (Mount-kit)</li>
                        <li>Thiết bị chưa bao gồm nguồn</li>
                        <li>D&ograve;ng sản phẩm ph&ugrave; hợp lắp đặt trong ph&ograve;ng cho kh&aacute;ch sạn, resort, văn ph&ograve;ng, căn hộ</li>
                    </ul>',
                'category_id' => 2
            ],
            [
                'id' => 27,
                'name' => 'Thiết bị phát wifi RG-RAP2200(F)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549430/bo-phat-wifi-op-tran-hoac-gan-tuong-ruijie-reyee-rg-rap2200f_ophqzw.jpg',
                
                'description' => '<ul>
                        <li>Bộ ph&aacute;t Wifi ốp trần hoặc gắn tường</li>
                        <li>Tốc độ l&ecirc;n đến 1.267Gbps</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz chuẩn 802.11a/b/g/n/ac Wave1/Wave2, MU-MIMO</li>
                        <li>&nbsp;Hỗ trợ tối đa 110 người d&ugrave;ng | 8 SSID</li>
                        <li>&nbsp;Ph&ugrave; hợp lắp đặt cho văn ph&ograve;ng, kh&aacute;ch sạn, chuỗi cửa h&agrave;ng</li>
                    </ul>',
                'content' => '<h3>Thông số kĩ thuật Thiết bị phát wifi RG-RAP2200(F))</h3>
                <ul>
                        <li>Bộ ph&aacute;t Wifi ốp trần hoặc gắn tường, hỗ trợ camera wifi, thiết bị b&aacute;o động&hellip;</li>
                        <li>Tốc độ l&ecirc;n đến 1.267Gbps.</li>
                        <li>Hỗ trợ 2 băng tần 2.4GHz v&agrave; 5GHz chuẩn 802.11a/b/g/n/ac Wave1/Wave2, MU-MIMO.</li>
                        <li>Hỗ trợ tối đa 110 người d&ugrave;ng | 8 SSID.</li>
                        <li>&nbsp;Số lượng người d&ugrave;ng truy cập đồng thời đề xuất l&agrave; 40+.</li>
                        <li>1 cổng 10/100M Ethernet LAN, 1 cổng 10/100M Uplink (hỗ trợ nguồn cấp PoE).</li>
                        <li>Hỗ trợ nguồn 802.3af (15.4W) hoặc 802.3at (30W) PoE.</li>
                        <li>&nbsp;Hỗ trợ dịch vụ Ruijie Cloud miễn ph&iacute; cho ph&eacute;p cấu h&igrave;nh nhanh, đơn giản, quản l&yacute; v&agrave; gi&aacute;m s&aacute;t dễ d&agrave;ng.</li>
                        <li>D&ograve;ng sản phẩm ph&ugrave; hợp sử dụng cho kh&aacute;ch sạn, cửa h&agrave;ng, c&agrave; ph&ecirc;, văn ph&ograve;ng vừa &amp; nhỏ.</li>
                        <li>Hỗ trợ Roamming Layer 2, Layer 3, kết nối cho&nbsp;camera gi&aacute;m s&aacute;t</li>
                        <li>Hỗ trợ c&aacute;c t&iacute;nh năng WIFI marketing (Khi sử dụng với Reyee Gateway).</li>
                        <li>Giao diện đăng nhập dạng trang ch&agrave;o, cho ph&eacute;p tuỳ biến theo logo, h&igrave;nh ảnh doanh nghiệp, th&ocirc;ng điệp quảng b&aacute;, n&uacute;t click trỏ đến trang đ&iacute;ch l&agrave; fanpage hoặc website của doanh nghiệp.</li>
                        <li>Quản l&yacute; lưu lượng của người d&ugrave;ng, thời gian, dung lượng data, số lượt truy cập trong ng&agrave;y.</li>
                        <li>Hỗ trợ nguồn DC 12V 1.5A</li>
                        <li>Xuất xứ: Trung Quốc.</li>
                        <li>Bảo h&agrave;nh: 3 năm.</li>
                </ul>',
                'category_id' => 2
            ],
            [
                'id' => 28,
                'name' => 'wifi mesh Halo H50G (3 packs)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549438/halo_h50g_maefwp.jpg',
                'description' => '<ul>
                        <li>Thương hiệu:&nbsp;Mercusys&nbsp;</li>
                        <li>Băng tầng mạng:&nbsp;2.4GHz &amp; 5GHz</li>
                        <li>Phủ s&oacute;ng tối đa: 550 m&sup2;</li>
                        <li>K&iacute;ch thước:&nbsp;88 &times; 88 &times; 88 mm</li>
                        <li>Chuẩn Wifi:&nbsp;Wi-Fi 5 (802.11ac)</li>
                </ul>',
                'content' => '<ul>
                        <li><strong>Mạng Thống Nhất</strong>&nbsp;&ndash; Với C&ocirc;ng nghệ Mesh ti&ecirc;n tiến, c&aacute;c thiết bị&nbsp;Halo hoạt động&nbsp;c&ugrave;ng nhau để tạo th&agrave;nh một mạng gia đ&igrave;nh thống nhất&nbsp;với duy nhất một&nbsp;t&ecirc;n v&agrave; mật m&atilde;&nbsp;Wi-Fi.</li>
                        <li><strong>Chuyển V&ugrave;ng Liền Mạch</strong>&nbsp;&ndash; Tự động chuyển đổi giữa c&aacute;c Halo&nbsp;khi bạn di chuyển trong nh&agrave;, lu&ocirc;n nhận được t&iacute;n hiệu tốt nhất để tận hưởng kết nối nhanh nhất cho tất cả c&aacute;c thiết bị của bạn.</li>
                        <li><strong>Phủ S&oacute;ng To&agrave;n bộ Ng&ocirc;i Nh&agrave;</strong>&nbsp;&ndash; l&ecirc;n đến 6.000 ft&sup2; (550 m&sup2;) với Wi-Fi tốc độ cao, loại bỏ v&ugrave;ng&nbsp;Wi-Fi "chết" trong&nbsp;nh&agrave;&nbsp;bạn.</li>
                        <li><strong>Wi-Fi Băng Tần K&eacute;p 1.9 Gbps</strong>&nbsp;&ndash; Halo H50G cung cấp kết nối nhanh v&agrave; ổn định l&ecirc;n đến&nbsp;100 thiết bị với tốc độ đạt đến 1.900 Mbps v&agrave; hoạt động với c&aacute;c nh&agrave; cung cấp dịch vụ internet (ISP) v&agrave; modem lớn.</li>
                        <li><strong>Điều Khiển Ứng Dụng Dễ D&agrave;ng</strong>&nbsp;&ndash; Sử dụng Ứng dụng MERCUSYS để nhanh ch&oacute;ng c&agrave;i đặt&nbsp;v&agrave; quản l&yacute; Wi-Fi của bạn.<strong>Cổng Full Gigabit</strong>&nbsp;&ndash; 3 &times; cổng Gigabit tr&ecirc;n mỗi thiết bị&nbsp;Halo cho kết nối d&acirc;y nhanh ch&oacute;ng.</li>
                </ul>',
                'category_id' => 2
            ],
            [
                'id' => 29,
                'name' => 'Két sắt thông minh',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549448/BJW-ket-sat-thong-minh-ks90k1dt_meezqv.jpg',
                'content' => '',
'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 30,
                'name' => 'Máy in',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549455/2167_chinh_dien_may_in_canon_laser_printer_lbp_2900_ybflo3.jpg',
                'content' => '',
'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 31,
                'name' => 'Máy scan',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549459/scan_bsvy1r.jpg',
                'content' => '',
'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 32,
                'name' => 'Robot hút bụi',
                'image' => 'https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-2.jpg',
                'description' => '<h3> Samsung VR05R5050WK/SV</h3>
                    <div>&nbsp;</div>
                    <div>
                        <p>Robot h&uacute;t bụi Samsung VR05R5050WK/SV được l&agrave;m nhỏ nhắn, thiết kế vừa h&uacute;t bụi vừa lau s&agrave;n tiện lợi, c&ocirc;ng suất h&uacute;t tới 4200 Pa cho khả năng l&agrave;m sạch nhanh ch&oacute;ng, sử dụng đến 150 ph&uacute;t, nhiều chế độ l&agrave;m sạch, cảm biến th&ocirc;ng minh cho robot tự động di chuyển, dọn dẹp dễ d&agrave;ng, tiện dụng trong gia đ&igrave;nh.</p>
                    </div>',
                'content' => '<div>
                        <p>Thiết bị h&uacute;t bụi v&agrave; lau s&agrave;n 2 trong 1, l&agrave;m sạch nh&agrave; cửa tiện lợi, tiết kiệm c&ocirc;ng sức</p>
                        <p>Robot h&uacute;t bụi loại bỏ bụi bẩn dễ d&agrave;ng c&ograve;n c&oacute; thể tự động bật chổi lau, điều chỉnh lượng nước với hộp chứa nước th&ocirc;ng minh, lau s&agrave;n thuận tiện.</p>
                    <h3>L&agrave;m sạch li&ecirc;n tục đến 150 ph&uacute;t (t&ugrave;y theo chế độ hoạt động) chỉ trong 1 lần sạc</h3>
                        <p>Pin c&oacute; dung lượng cao cho thời gian l&agrave;m sạch liền mạch, kh&ocirc;ng gi&aacute;n đoạn, rất tiện dụng trong ng&ocirc;i nh&agrave; c&oacute; diện t&iacute;ch lớn. Khi pin yếu, robot dễ d&agrave;ng sạc lại tại trạm sạc trong tầm 4 giờ.</p>
                        <p><img class="aligncenter wp-image-759 size-full" src="http://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060740.jpg" sizes="(max-width: 780px) 100vw, 780px" srcset="https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060740.jpg 780w, https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060740-300x167.jpg 300w, https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060740-768x426.jpg 768w, https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060740-600x333.jpg 600w" alt="" width="780" height="433" /></p>
                    <h3>Quản l&yacute; robot dễ d&agrave;ng bằng điện thoại với ứng dụng tr&ecirc;n điện thoại qua kết nối wifi</h3>
                        <p>Th&ocirc;ng qua ứng dụng POWERbot-E hoặc SmartThings, bạn c&oacute; thể&nbsp;khởi động hoặc tắt thiết bị, đặt lịch tr&igrave;nh l&agrave;m sạch, điều chỉnh lực h&uacute;t, điều khiển tốc độ lau,&hellip;&nbsp;linh hoạt mọi l&uacute;c mọi nơi. Ngo&agrave;i ra, sản phẩm c&ograve;n c&oacute; remote đi k&egrave;m cho ph&eacute;p t&ugrave;y chỉnh thiết bị từ xa dễ d&agrave;ng, kh&ocirc;ng cần phải trực tiếp thao t&aacute;c tr&ecirc;n th&acirc;n robot.</p>
                        <p>&nbsp;</p>
                        <p><img class="aligncenter wp-image-760 size-full" src="http://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060746.jpg" sizes="(max-width: 780px) 100vw, 780px" srcset="https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060746.jpg 780w, https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060746-300x167.jpg 300w, https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060746-768x426.jpg 768w, https://hdntech.vn/wp-content/uploads/2022/10/samsung-vr05r5050wk-sv-111221-060746-600x333.jpg 600w" alt="" width="780" height="433" /></p>
                    <p>Robot h&uacute;t bụi Samsung VR05R5050WK/SV kh&ocirc;ng trang bị khả năng lưu lại bản đồ, tuy nhi&ecirc;n c&oacute; cảm biến th&ocirc;ng minh gi&uacute;p kiểm so&aacute;t chuyển động tinh vi với cảm biến chống va chạm, cảm biến v&aacute;ch tường v&agrave; cảm biến con quay hồi chuyển cho robot l&agrave;m sạch mọi ng&oacute;c ng&aacute;ch dễ d&agrave;ng, an to&agrave;n cho thiết bị.</p>
                    </div>
                    </div>
                    </div>
                <div >&nbsp;</div>',
                'category_id' => 3
            ],
            [
                'id' => 33,
                'name' => 'Thùng rác thông minh',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549484/1_vtvmih.jpg',
                'content' => '',
'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 34,
                'name' => 'iMac 24 inch 2021 M1 4.5K/8-core GPU',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/238056/imac-24-icnh-2021-m1-thumb-hong-1-600x600.jpg',
                'content' => '',
'description' => '',
                'category_id' => 4
            ],
            [
                'id' => 35,
                'name' => 'HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/293648/hp-aio-22-dd2002d-i5-6k7g1pa-thumb-1-600x600.jpg',
                'content' => '',
'description' => '',
                'category_id' => 4
            ],
            [
                'id' => 36,
                'name' => 'HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/293649/hp-aio-proone-240-g9-i3-6m3t0pa-thumb-1-600x600.jpg',
                'content' => '',
'description' => '',
                'category_id' => 4
            ],
            [
                'id' => 37,
                'name' => 'iMac 24 inch M1 2021 4.5K/7-core GPU',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/238061/imac-24-icnh-2021-m1-thumb-bac-1-600x600.jpg',
                'content' => '',
'description' => '',
                'category_id' => 4
            ],
        ]);
    }
}
