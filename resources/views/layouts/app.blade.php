<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'NP Plus Servicecare') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/npplus.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="{{ route('home') }}" class="brand">
                <span class="brand-mark">NP+</span>
                <span class="brand-text">NP Plus Servicecare</span>
            </a>
            <button class="nav-toggle" aria-expanded="false" aria-controls="primary-navigation" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
            <nav class="main-nav" id="primary-navigation">
                <a href="{{ route('home') }}">หน้าแรก</a>
                <a href="{{ route('services') }}">บริการ</a>
                <a href="{{ route('about') }}">เกี่ยวกับเรา</a>
                <a href="{{ route('activities') }}">กิจกรรม</a>
                <a href="{{ route('careers') }}">สมัครงาน</a>
                <a href="{{ route('contact') }}" class="btn btn-primary">ติดต่อเรา</a>
            </nav>
        </div>
    </header>

    <main class="page-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="brand brand--footer">NP+ NP Plus Servicecare</div>
                    <p>ผู้ให้บริการจัดหาทีมแพทย์และพยาบาลประจำองค์กร โรงงาน โรงเรียน โรงแรม พร้อมจัดหายาและเวชภัณฑ์</p>
                </div>
                <div>
                    <h4>เมนู</h4>
                    <ul class="footer-menu">
                        <li><a href="{{ route('services') }}">บริการ</a></li>
                        <li><a href="{{ route('about') }}">เกี่ยวกับเรา</a></li>
                        <li><a href="{{ route('activities') }}">กิจกรรม</a></li>
                        <li><a href="{{ route('careers') }}">สมัครงาน</a></li>
                        <li><a href="{{ route('contact') }}">ติดต่อเรา</a></li>
                    </ul>
                </div>
                <div>
                    <h4>ติดต่อ</h4>
                    <ul class="contact-list">
                        <li>โทร: 098-xxx-xxxx</li>
                        <li>Email: info@npplus.co.th</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">© {{ date('Y') }} NP Plus Servicecare. All rights reserved.</div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var header = document.querySelector('.site-header');
            var toggle = document.querySelector('.nav-toggle');
            var nav = document.getElementById('primary-navigation');
            if(!toggle || !nav || !header) return;
            toggle.addEventListener('click', function(){
                var isOpen = header.classList.toggle('open');
                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
            window.addEventListener('resize', function(){
                if (window.innerWidth >= 901) {
                    header.classList.remove('open');
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    </script>
</body>
</html>

