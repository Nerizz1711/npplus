<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'slug' => 'nurses',
                'title' => 'พยาบาลวิชาชีพประจำองค์กร',
                'summary' => 'คัดเลือกและดูแลทีมพยาบาลให้เหมาะสมกับลักษณะงานและมาตรฐานความปลอดภัย',
                'position' => 1,
            ],
            [
                'slug' => 'training',
                'title' => 'อบรมช่วยชีวิตพื้นฐาน (CPR) และปฐมพยาบาล',
                'summary' => 'อบรมสำหรับพนักงานองค์กร เพิ่มทักษะการช่วยเหลือฉุกเฉิน',
                'position' => 2,
            ],
            [
                'slug' => 'eldercare',
                'title' => 'พยาบาลเฝ้าไข้ผู้ป่วยและผู้สูงอายุ',
                'summary' => 'ให้บริการทั้งที่บ้านและโรงพยาบาล โดยทีมงานมืออาชีพ',
                'position' => 3,
            ],
            [
                'slug' => 'equipment',
                'title' => 'อุปกรณ์ห้องพยาบาลและเวชภัณฑ์',
                'summary' => 'จัดหาและติดตั้งอุปกรณ์ห้องพยาบาลครบวงจร',
                'position' => 4,
            ],
            [
                'slug' => 'healthcheck',
                'title' => 'ตรวจสุขภาพนอกสถานที่',
                'summary' => 'บริการตรวจสุขภาพประจำปีถึงที่ ทำงานรวดเร็ว ลดผลกระทบต่อการผลิต',
                'position' => 5,
            ],
            [
                'slug' => 'waste',
                'title' => 'กำจัดขยะห้องพยาบาล',
                'summary' => 'จัดเก็บและกำจัดขยะห้องพยาบาลตามกฎหมายและมาตรฐานสิ่งแวดล้อม',
                'position' => 6,
            ],
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
