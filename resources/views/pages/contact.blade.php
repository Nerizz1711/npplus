@extends('layouts.app')

@section('content')
<section class="page-hero small">
    <div class="container">
        <h1>ติดต่อเรา</h1>
        <p>ยินดีให้คำปรึกษาและเสนอราคาบริการ</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid-2">
            <div>
                <h3>ข้อมูลติดต่อ</h3>
                <ul class="contact-list">
                    <li>โทร: 098-552-3564</li>
                    <li>Email: caregivermore@gmail.com</li>
                </ul>
            </div>
            <form class="simple-form" method="post" action="#">
                @csrf
                <label>ชื่อ
                    <input type="text" name="name" required>
                </label>
                <label>อีเมล
                    <input type="email" name="email" required>
                </label>
                <label>ข้อความ
                    <textarea name="message" rows="5" required></textarea>
                </label>
                <button type="submit" class="btn btn-primary">ส่งข้อความ</button>
            </form>
        </div>
    </div>
</section>
@endsection


