<?php
// ตัวอย่างการสร้าง path
$routes = [
  '' => function() {
    echo "Hello World!";
  },
  'about' => function() {
    echo "This is about page.";
  },
  'contact' => function() {
    echo "This is contact page.";
  }
];

// อ่านค่า path จาก URL
$path = isset($_GET['url']) ? $_GET['url'] : '';

// ตรวจสอบว่ามี path ที่ต้องการหรือไม่
if (isset($routes[$path])) {
  // หากมี ให้เรียก callback function ของ path นั้นๆ
  $callback = $routes[$path];
  $callback();
} else {
  // หากไม่มี ให้แสดงข้อความว่า "404 Not Found"
  echo "404 Not Found";
}