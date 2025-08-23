@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container hero-inner">
            <div class="hero-text">
                <h1>NP Plus Servicecare</h1>
                <p>บริการจัดหาทีมแพทย์และพยาบาลประจำองค์กร พร้อมดูแลระบบห้องพยาบาล จัดหายาและเวชภัณฑ์ และบริการสุขภาพนอกสถานที่</p>
                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">ขอใบเสนอราคา</a>
                    <a href="{{ route('services') }}" class="btn btn-outline">ดูบริการ</a>
                </div>
            </div>
            <div class="hero-art" aria-hidden="true"></div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">บริการหลักของเรา</h2>
            <div class="cards">
                <a class="card" href="{{ route('services') }}#nurses">
                    <h3>พยาบาลวิชาชีพประจำองค์กร</h3>
                    <p>จัดทีมพยาบาลมืออาชีพ ประสบการณ์สูง สำหรับโรงงานและองค์กรทุกประเภท</p>
                </a>
                <a class="card" href="{{ route('services') }}#training">
                    <h3>อบรมช่วยชีวิตพื้นฐาน</h3>
                    <p>จัดอบรม CPR และปฐมพยาบาลเบื้องต้นแบบมืออาชีพ</p>
                </a>
                <a class="card" href="{{ route('services') }}#eldercare">
                    <h3>ดูแลผู้ป่วยและผู้สูงอายุ</h3>
                    <p>บริการเฝ้าไข้ทั้งที่บ้านและโรงพยาบาล</p>
                </a>
                <a class="card" href="{{ route('services') }}#equipment">
                    <h3>อุปกรณ์ห้องพยาบาล</h3>
                    <p>จัดหาและติดตั้งอุปกรณ์ห้องพยาบาลครบวงจร</p>
                </a>
            </div>
        </div>
    </section>
@endsection


