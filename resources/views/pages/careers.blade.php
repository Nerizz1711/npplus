@extends('layouts.app')

@section('content')
<section class="page-hero small">
    <div class="container">
        <h1>สมัครงาน</h1>
        <p>ร่วมเป็นส่วนหนึ่งของทีมพยาบาลมืออาชีพ</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <form class="simple-form" method="post" action="#">
            @csrf
            <div class="grid-2">
                <label>ชื่อ-นามสกุล
                    <input type="text" name="name" required>
                </label>
                <label>อีเมล
                    <input type="email" name="email" required>
                </label>
            </div>
            <label>เบอร์โทรศัพท์
                <input type="tel" name="phone" required>
            </label>
            <label>ข้อความเพิ่มเติม
                <textarea name="message" rows="5"></textarea>
            </label>
            <button type="submit" class="btn btn-primary">ส่งใบสมัคร</button>
        </form>
    </div>
</section>
@endsection


