<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
<!-- @yield('var') คำสั่งในการสร้างแม่แบบ เพื่อไปใช้ใน view  อื่นๆ ที่มีลักษณะเหมือนๆกัน
    โดย ค่าภายในวงเล็บจะเป็นตัวแปร
    -->
    <div class="container">
        @yield('content') 
    </div>
</body>
 <footer>@yield('footer') </footer>
</html>