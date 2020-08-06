<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<!-- @yield('var') คำสั่งในการสร้างแม่แบบ เพื่อไปใช้ใน view  อื่นๆ ที่มีลักษณะเหมือนๆกัน
    โดย ค่าภายในวงเล็บจะเป็นตัวแปร
 -->
    @yield('content') 
</body>
 <footer>@yield('footer') </footer>
</html>