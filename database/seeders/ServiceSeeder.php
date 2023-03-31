<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'name' => 'Dịch vụ bảo trì, bảo dưỡng máy vi tính',
                'image' => 'https://www.tranlegroup.com/Uploads/Image/DUYEN/tam-quan-trong-bao-tri-may-tinh-2.jpg',
                'description' => '',
            ],
            [
                'id' => 2,
                'name' => 'Dịch vụ sửa chữa hệ thống Camera',
                'image' => 'https://lapcamera.danang.vn/wp-content/uploads/2020/08/huong-dan-sua-chua-he-thong-camera-quan-sat-co-ban-1.jpg',
                'description' => 'Dịch vụ sửa chữa hệ thống Camera',
            ],
            [
                'id' => 3,
                'name' => 'Dịch vụ sửa chữa hệ thống Mạng',
                'image' => 'https://chinhnhan.vn/uploads/service/11_2018/thi-cong-mang-lan%5B1%5D.jpg',
                'description' => 'Dịch vụ sửa chữa hệ thống Mạng',
            ],
            [
                'id' => 4,
                'name' => 'Dịch vụ thay Cartridge máy in',
                'image' => 'https://bizweb.dktcdn.net/100/070/619/files/do-muc-may-in-canon-tai-nha.jpg?v=1669203648975',
                'description' => 'Dịch vụ thay Cartridge máy in',
            ],
            [
                'id' => 5,
                'name' => 'Dịch vụ bảo trì, bảo dưỡng điều hòa',
                'image' => 'https://lh4.googleusercontent.com/OFW218u-npUKXhvffHpFLh23vG08MzIqH7VAWoYc6KrwXfLtdsvnVl5_TaSYtdsxUtSvYeUV5gD4tvPt8k8KBPI6I-ezFl3zwMcMibgGGS2n0ZZtQK_s0i58a_4Pqw',
                'description' => 'Dịch vụ bảo trì, bảo dưỡng điều hòa',
            ],
            [
                'id' => 6,
                'name' => 'Dịch vụ bảo trì, bảo dưỡng bình nóng lạnh',
                'image' => 'https://vidic.com.vn/media/news/1412_bao-duong-binh-nong-lanh-1.png',
                'description' => 'Dịch vụ bảo trì, bảo dưỡng bình nóng lạnh',
            ],
            [
                'id' => 7,
                'name' => 'Dịch vụ sửa chữa hệ thống điện',
                'image' => 'https://xaydungnhanthuy.com/upload/news/dien-nuoc-quan-5-7128.jpg',
                'description' => 'Dịch vụ sửa chữa hệ thống điện',
            ]
        ]);
    }
}
