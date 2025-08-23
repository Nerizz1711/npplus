<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบเสนอราคา - NP Plus Servicecare</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Sarabun', 'Kanit', 'Tahoma', sans-serif;
            line-height: 1.6;
            color: #333;
            font-size: 14px;
        }
        
        .container {
            max-width: 210mm;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #2d7d32;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #2d7d32;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .header h2 {
            color: #4caf50;
            font-size: 18px;
            font-weight: normal;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        
        .info-item {
            display: flex;
            margin-bottom: 8px;
        }
        
        .info-label {
            font-weight: bold;
            min-width: 120px;
            color: #2d7d32;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section-title {
            background: #2d7d32;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .subsection {
            margin-bottom: 20px;
        }
        
        .subsection-title {
            color: #2d7d32;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 10px;
            padding-left: 10px;
            border-left: 4px solid #4caf50;
        }
        
        .content {
            padding-left: 15px;
        }
        
        .content ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        .content li {
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }
        
        .content li:before {
            content: "•";
            color: #4caf50;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .timeline {
            background: #f0f7ff;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #2196f3;
        }
        
        .timeline-item {
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .pricing {
            background: #fff3e0;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid #ff9800;
            margin-bottom: 20px;
        }
        
        .price-main {
            font-size: 20px;
            font-weight: bold;
            color: #e65100;
            text-align: center;
            margin: 15px 0;
            padding: 15px;
            background: white;
            border-radius: 6px;
            border: 2px dashed #ff9800;
        }
        
        .price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 8px 0;
        }
        
        .price-item.main {
            border-top: 2px solid #ff9800;
            border-bottom: 2px solid #ff9800;
            font-weight: bold;
            font-size: 16px;
            color: #e65100;
        }
        
        .payment-terms {
            background: #e8f5e8;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #4caf50;
        }
        
        .payment-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .signature-section {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .signature-box {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
        
        .signature-line {
            border-top: 1px solid #333;
            margin: 40px 20px 10px 20px;
        }
        
        .note {
            background: #fff9c4;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #ffc107;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .summary-box {
            background: linear-gradient(135deg, #2d7d32, #4caf50);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 30px 0;
        }
        
        .summary-box h3 {
            font-size: 18px;
            margin-bottom: 15px;
        }
        
        .summary-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 15px;
        }
        
        .summary-item {
            background: rgba(255,255,255,0.1);
            padding: 10px;
            border-radius: 6px;
        }
        
        @media print {
            body { -webkit-print-color-adjust: exact; }
            .section { page-break-inside: avoid; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ใบเสนอราคา (QUOTATION)</h1>
            <h2>โครงการพัฒนาเว็บไซต์ NP Plus Servicecare</h2>
        </div>

        <div class="info-grid">
            <div>
                <div class="info-item">
                    <span class="info-label">ลูกค้า:</span>
                    <span>NP Plus Servicecare</span>
                </div>
                <div class="info-item">
                    <span class="info-label">ผู้พัฒนา:</span>
                    <span>ผู้พัฒนาบุคคลธรรมดา (Freelance)</span>
                </div>
                <div class="info-item">
                    <span class="info-label">เทคโนโลยี:</span>
                    <span>Laravel, MySQL, Blade, CSS Responsive</span>
                </div>
                <div class="info-item">
                    <span class="info-label">เพิ่มเติม:</span>
                    <span>SMTP Mail, reCAPTCHA</span>
                </div>
            </div>
            <div>
                <div class="info-item">
                    <span class="info-label">ระยะเวลา:</span>
                    <span>6–8 สัปดาห์ (1–2 เดือน)</span>
                </div>
                <div class="info-item">
                    <span class="info-label">การชำระเงิน:</span>
                    <span>40% / 30% / 30%</span>
                </div>
                <div class="info-item">
                    <span class="info-label">อายุใบเสนอราคา:</span>
                    <span>15 วัน</span>
                </div>
                <div class="info-item">
                    <span class="info-label">อ้างอิงจาก:</span>
                    <span>caregivermore.com</span>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">ขอบเขตงาน (SCOPE OF WORK)</div>
            
            <div class="subsection">
                <div class="subsection-title">โครงสร้างหน้าเว็บ</div>
                <div class="content">
                    <ul>
                        <li>หน้าหลัก (Homepage)</li>
                        <li>หน้าบริการ (Services)</li>
                        <li>หน้าเกี่ยวกับเรา (About Us)</li>
                        <li>หน้ากิจกรรม (Activities)</li>
                        <li>หน้าติดต่อเรา (Contact Us)</li>
                        <li>เฮดเดอร์/ฟุตเตอร์/เมนู ตามแบรนด์ NP+ โทนสีเขียวคู่</li>
                    </ul>
                </div>
            </div>

            <div class="subsection">
                <div class="subsection-title">ฟังก์ชันหลัก</div>
                <div class="content">
                    <ul>
                        <li><strong>ฟอร์มติดต่อ/ขอใบเสนอราคา</strong> ส่งอีเมลผ่าน SMTP + ป้องกันสแปม reCAPTCHA</li>
                        <li><strong>จัดการคอนเทนต์บริการ</strong> จากฐานข้อมูล (services) เรียงลำดับ/ซ่อนแสดงได้</li>
                        <li><strong>จัดเก็บข้อมูลบริษัท/ติดต่อ</strong> ในระบบ settings</li>
                    </ul>
                </div>
            </div>

            <div class="subsection">
                <div class="subsection-title">ระบบหลังบ้าน (CMS แบบเบา)</div>
                <div class="content">
                    <ul>
                        <li>จัดการบริการ (เพิ่ม/แก้ไข/ลบ/เรียงอันดับ)</li>
                        <li>จัดการข้อมูลติดต่อ/ที่อยู่/อีเมล/เบอร์โทร</li>
                        <li>สิทธิ์เข้าถึงหลังบ้านด้วยบัญชีผู้ดูแล</li>
                    </ul>
                </div>
            </div>

            <div class="subsection">
                <div class="subsection-title">มาตรฐานคุณภาพ</div>
                <div class="content">
                    <ul>
                        <li>รองรับมือถือ 100% (Responsive Design)</li>
                        <li>SEO เบื้องต้น (Meta Tags/Open Graph, Sitemap, Robots.txt)</li>
                        <li>Performance พื้นฐาน (Asset Minification, Cache Headers)</li>
                        <li>ติดตั้ง Google Analytics/Tag Manager</li>
                        <li>โค้ดสะอาด อ่านง่าย (ตามมาตรฐาน Laravel)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">แผนงานและไทม์ไลน์</div>
            <div class="timeline">
                <div class="timeline-item"><strong>สัปดาห์ที่ 1:</strong> เก็บ Requirement, โครงร่าง UI/IA, สรุปสไตล์ไกด์</div>
                <div class="timeline-item"><strong>สัปดาห์ที่ 2–3:</strong> พัฒนา Frontend + Layout, หน้าเพจหลัก</div>
                <div class="timeline-item"><strong>สัปดาห์ที่ 3–5:</strong> พัฒนา Backend/CMS, แบบฟอร์ม, อีเมล, SEO</div>
                <div class="timeline-item"><strong>สัปดาห์ที่ 6:</strong> ใส่คอนเทนต์จริง, UAT, แก้ไขรอบสุดท้าย, เตรียม Go‑Live</div>
                <div class="timeline-item"><strong>Go‑Live:</strong> ส่งมอบเอกสาร/คู่มือและอบรมการใช้งาน</div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">ราคาโครงการ</div>
            <div class="pricing">
                <div class="price-item main">
                    <span>แพ็กเกจ Pro (ครบฟังก์ชัน + CMS เบา)</span>
                    <span>฿85,000</span>
                </div>
                <div class="price-main">
                    ราคาเสนอ: ฿85,000 (ไม่รวม VAT)
                </div>
                <div style="text-align: center; margin-top: 10px; font-style: italic;">
                    รวมออกแบบ UI, พัฒนา Frontend/Backend, เชื่อม SMTP, Analytics, SEO เบื้องต้น, UAT/Deploy
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">งานเพิ่มเติม/ตัวเลือกเสริม</div>
            <div class="content">
                <div class="price-item">
                    <span>หลายภาษา (TH/EN พร้อมสลับภาษา)</span>
                    <span>+฿15,000</span>
                </div>
                <div class="price-item">
                    <span>หน้า "ลูกค้าของเรา/พาร์ตเนอร์" แบบจัดการได้</span>
                    <span>+฿8,000</span>
                </div>
                <div class="price-item">
                    <span>บล็อก/ข่าวกิจกรรม พร้อมระบบจัดการ</span>
                    <span>+฿12,000</span>
                </div>
                <div class="price-item">
                    <span>ออกแบบโลโก้/ปรับ CI</span>
                    <span>+฿6,000</span>
                </div>
                <div class="price-item" style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #ddd;">
                    <span>โฮสติ้งเริ่มต้น</span>
                    <span>฿6,000/ปี</span>
                </div>
                <div class="price-item">
                    <span>บำรุงรักษา/อัปเดตความปลอดภัย</span>
                    <span>฿3,000/เดือน</span>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">เงื่อนไขการชำระเงิน</div>
            <div class="payment-terms">
                <div class="payment-item">
                    <span>1. มัดจำเมื่อเริ่มงาน</span>
                    <span>40%</span>
                </div>
                <div class="payment-item">
                    <span>2. เมื่อส่งเวอร์ชัน UAT พร้อมทดสอบ</span>
                    <span>30%</span>
                </div>
                <div class="payment-item">
                    <span>3. ก่อนออนไลน์จริง (Go‑Live)</span>
                    <span>30%</span>
                </div>
            </div>
        </div>

        <div class="summary-box">
            <h3>สรุปข้อเสนอ</h3>
            <div class="summary-grid">
                <div class="summary-item">
                    <strong>ราคาเสนอ:</strong><br>
                    ฿85,000 (แพ็กเกจครบฟังก์ชัน)
                </div>
                <div class="summary-item">
                    <strong>ระยะเวลา:</strong><br>
                    6–8 สัปดาห์
                </div>
            </div>
        </div>

        {{-- <div class="note">
            <strong>หมายเหตุ:</strong> หากต้องการฉบับ PDF พร้อมตราบริษัทและช่องลงนาม แจ้งโลโก้/ที่อยู่/เลขประจำตัวผู้เสียภาษี เราจะส่งไฟล์ให้ภายในวันนี้
        </div> --}}

        <div class="signature-section">
            <div class="signature-box">
                <div><strong>ผู้เสนอราคา</strong></div>
                <div class="signature-line"></div>
                <div>ผู้พัฒนาบุคคลธรรมดา</div>
                <div style="margin-top: 10px;">วันที่: ............................</div>
            </div>
            <div class="signature-box">
                <div><strong>ผู้รับใบเสนอราคา</strong></div>
                <div class="signature-line"></div>
                <div>NP Plus Servicecare</div>
                <div style="margin-top: 10px;">วันที่: ............................</div>
            </div>
        </div>
    </div>
</body>
</html>


