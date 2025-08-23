# การ Deploy Laravel บน Railway

## Railway คืออะไร?
Railway เป็น platform สำหรับ deploy application ที่ง่ายและมีประสิทธิภาพ มี free tier ที่ให้ $5 credit ต่อเดือน

## ขั้นตอนการ Deploy

### 1. สร้าง Railway Account
- ไปที่ https://railway.app/
- Sign up ด้วย GitHub account
- Verify email address

### 2. ติดตั้ง Railway CLI (ถ้าต้องการ)
```bash
# Windows
npm install -g @railway/cli

# หรือใช้ npx
npx @railway/cli login
```

### 3. Deploy ผ่าน GitHub (แนะนำ)

#### 3.1 เชื่อมต่อ GitHub Repository
- ไปที่ Railway Dashboard
- คลิก "New Project"
- เลือก "Deploy from GitHub repo"
- เลือก repository `npplus`

#### 3.2 ตั้งค่า Environment Variables
ใน Railway Dashboard > Variables:
```
APP_ENV=production
APP_DEBUG=false
APP_KEY=your-generated-key
APP_NAME="NP Plus"
APP_URL=https://your-app-name.railway.app
DB_CONNECTION=pgsql
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync
```

#### 3.3 เพิ่ม PostgreSQL Database
- คลิก "New" > "Database" > "PostgreSQL"
- Railway จะสร้าง database และตั้งค่า DATABASE_URL ให้อัตโนมัติ

### 4. Deploy ผ่าน CLI (ทางเลือก)

#### 4.1 Login Railway
```bash
railway login
```

#### 4.2 สร้าง Project
```bash
railway init
```

#### 4.3 Deploy
```bash
railway up
```

#### 4.4 เปิดเว็บไซต์
```bash
railway open
```

## การตั้งค่าเพิ่มเติม

### ตั้งค่า Domain
- ไปที่ Railway Dashboard > Domains
- เพิ่ม custom domain (ถ้ามี)

### ดู Logs
- Railway Dashboard > Deployments > View Logs
- หรือใช้ CLI: `railway logs`

### รัน Commands
```bash
railway run php artisan migrate
railway run php artisan tinker
```

## หมายเหตุสำคัญ

- **ฟรี**: $5 credit ต่อเดือน (เพียงพอสำหรับการทดสอบ)
- **Database**: Railway จะสร้าง PostgreSQL ให้อัตโนมัติ
- **Storage**: ไฟล์ใน storage จะถูกลบเมื่อ restart app
- **Environment**: Railway จะตั้งค่า DATABASE_URL ให้อัตโนมัติ

## การแก้ไขปัญหา

### ถ้าเกิด Error เกี่ยวกับ Database
```bash
railway run php artisan migrate:fresh --seed
```

### ถ้าเกิด Error เกี่ยวกับ Storage
```bash
railway run php artisan storage:link
```

### ถ้าเกิด Error เกี่ยวกับ Cache
```bash
railway run php artisan config:clear
railway run php artisan cache:clear
```

## ข้อดีของ Railway

✅ **ฟรี**: $5 credit ต่อเดือน  
✅ **ง่าย**: Deploy ได้ง่ายผ่าน GitHub  
✅ **อัตโนมัติ**: ตั้งค่า database และ environment ให้อัตโนมัติ  
✅ **เสถียร**: เหมาะสำหรับ production  
✅ **เร็ว**: Deploy ได้เร็ว  
✅ **รองรับ**: Laravel และ PostgreSQL  

## ราคา

- **Free Tier**: $5 credit ต่อเดือน
- **Pro**: $20/เดือน (unlimited)
- **Team**: $20/เดือนต่อ user
