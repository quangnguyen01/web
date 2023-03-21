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
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Camera wifi dome IPC-A22EP-AG',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549223/3_xd1zgb.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Camera wifi thân IPC-F22FP',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549230/camera1_g5vmaq.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Đầu ghi hình IP 4 kênh vỏ sắt DS-7104NI-Q1M',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549239/giai-phap-nha-thong-minh-2_jtzard.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Đầu ghi hình IP 8 kênh DS-7108NI-Q1M',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549245/3742_dau_ghi_hinh_hikvision_ds_7108ni_q1_m_hbda90.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Ổ cứng 2TB WD',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549251/%C3%94%CC%89-c%C6%B0%CC%81ng-HDD-Western-Purple-2Tb-SATA3-5400rpm_azss42.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Ổ cứng 4TB WD',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549259/18466_8e89ca7772228b499a6db249096cf5ff__1__h8jol0.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'Thẻ nhớ sandisk 32GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549266/thenho32gb_v1hzpq.webp',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 10,
                'name' => 'Thẻ nhớ sandisk 64GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549275/thenho64gb_bxrxws.webp',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 11,
                'name' => 'Thẻ nhớ sandisk 128GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549287/thenho1_vwsyvv.jpg',
                'content' => '',
'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 12,
                'name' => 'Bộ mở rộng wifi RG-EW1200R',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549326/580x580-1669366163-single_product1-bophatwifiruijiergew1200r1_pqp08v.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Switch  TL-SF1005D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549335/anh_x9kms6.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Switch  TL-SF1008D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549341/1591584982_11093-tp-link-switch-8-porttl-sf1008d_etuipu.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'Switch  TL-SF1016D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549347/1159-2112_switch_tp_link_16p_1_glblbm.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Switch 4 cổng POE  RG-ES106D-P V2',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549352/15698_g1ymcy.png',
                'content' => '',
'description' => '',
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
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 18,
                'name' => 'Switch 8 cổng POE RG-ES209GC-P',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549364/image2_gwd9ho.png',
                'content' => '',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 19,
                'name' => 'Switch RG-ES05',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549369/p_61434_RUIJIE-RG-ES05_edlmcl.jpg',
                'content' => '',
                'description' => '',
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
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 22,
                'name' => 'Thiết bị phát wifi Archer A8',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549386/anh2_fttsvf.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 23,
                'name' => 'Thiết bị phát wifi RG-EW300 PRO',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549392/rg-ew300-pro_q61wve.webp',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 24,
                'name' => 'Thiết bị phát wifi RG-EW1200',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549402/2_ngn0ox.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 25,
                'name' => 'Thiết bị phát wifi RG-EW1200G Pro',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549415/Router-WiFi-Ruijie-RG-EW1200G-PRO-Chinh-Hang-_-Bang-Tan-Kep-Toc-Do-1267Mbps-Chiu-Tai-30-User-16_qplbop.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 26,
                'name' => 'Thiết bị phát wifi RG-RAP1200(F)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549423/6264_thiet_bi_mang_wifi_ruijie_rg_rap1200f_ohnmlk.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 27,
                'name' => 'Thiết bị phát wifi RG-RAP2200(F)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549430/bo-phat-wifi-op-tran-hoac-gan-tuong-ruijie-reyee-rg-rap2200f_ophqzw.jpg',
                'content' => '',
'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 28,
                'name' => 'wifi mesh Halo H50G (3 packs)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549438/halo_h50g_maefwp.jpg',
                'content' => '',
'description' => '',
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
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549479/robot-hut-bui-lau-nha-liectroux-zk901-1_qqrmjk.jpg',
                'content' => '',
'description' => '',
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
