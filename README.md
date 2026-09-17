# Alnoor School 🏫

نظام إدارة متكامل للمدرسة باستخدام Laravel 11 + Breeze

## التقنيات المستخدمة

- Laravel 11
- Laravel Breeze (نظام تسجيل الدخول)
- MySQL
- Tailwind CSS
- RTL Support

## الأقسام الرئيسية

1. **إدارة الصفوف الدراسية** - عرض، إضافة، تعديل، حذف، فلترة
2. **إدارة المعلمين** - عرض، إضافة، تعديل، حذف، فلترة
3. **إدارة الطلاب** - عرض، إضافة، تعديل، حذف، فلترة

## متطلبات التشغيل

- PHP >= 8.2
- Composer
- MySQL
- Node.js & NPM

## طريقة التشغيل

```bash
composer install
cp .env.example .env
php artisan key:generate
# إعداد قاعدة البيانات في ملف .env
php artisan migrate
npm install && npm run build
php artisan serve
```

## هيكل قاعدة البيانات

### جدول classrooms
- `id` - المفتاح الأساسي
- `name` - اسم الصف
- `description` - الوصف (اختياري)
- `capacity` - السعة الاستيعابية (افتراضي: 30)
- `timestamps`

### جدول teachers
- `id` - المفتاح الأساسي
- `name` - اسم المعلم
- `email` - البريد الإلكتروني (فريد)
- `phone` - رقم الهاتف (اختياري)
- `specialization` - التخصص (اختياري)
- `timestamps`

### جدول students
- `id` - المفتاح الأساسي
- `name` - اسم الطالب
- `email` - البريد الإلكتروني (فريد)
- `birth_date` - تاريخ الميلاد (اختياري)
- `phone` - رقم الهاتف (اختياري)
- `timestamps`

## المشروع الأكاديمي

مشروع فردي - موعد التسليم: 2026/08/01
المدرب: محمد البدران

## الترخيص

MIT License