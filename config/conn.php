<?php
$website_domain ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$post_url = $_SERVER['REQUEST_URI'];
$domain = $_SERVER['HTTP_HOST'];
$hakibavuong = '';
function cache() { 
 return '?'.bin2hex(random_bytes(3));   
}
$changepages = basename($_SERVER['REQUEST_URI'], '.php');
$title = "FakeBill | TiennMinhh - GLCZ7";
$description = "TiennMinhh - GLCZ7 - Trang chủ fake bill Vietinbank, Mbbank, Momo, vietcombank, v.v.v";
$keyword = "TiennMinhh - GLCZ7, ,nguyenvan TiennMinhh - GLCZ7 , fakengahang , hethongdev , hethongdev.store , arraycyber, sieuthird.site , gachcard1s.online ,hethongdev , gachcard1s , trang fakeBill ,vanduy, fakeBill TiennMinhh - GLCZ7, fakeBill ngân hàng, TiennMinhh - GLCZ7 fakeBill, minhduy, website fake bill";
$iconshortcut = "https://abctech.vn/wp-content/uploads/2017/06/logo-nen-xanh.jpg";
$imgreviews = "https://abctech.vn/wp-content/uploads/2017/06/logo-nen-xanh.jpg";
if ($changepages == 'fake-bill-vietinbank') {
    $title = "FakeBill - Ngân Hàng VietinBank";
    $description = "TiennMinhh - GLCZ7 - Trang fake bill VietinBank chuyển khoản miễn phí";
    $imgreviews = "https://play-lh.googleusercontent.com/F8D0AbyMmiuwsTZYLaPsu_o40XGfQHgvRnq25lVSWupgHPpH3-TQ9soMrWwDJco3siI";
    $iconshortcut = "https://play-lh.googleusercontent.com/F8D0AbyMmiuwsTZYLaPsu_o40XGfQHgvRnq25lVSWupgHPpH3-TQ9soMrWwDJco3siI";
}elseif ($changepages == 'fake-bill-acb-bank') {
    $title = "FakeBill - Ngân Hàng ACB Bank";
    $description = "FakeBill - Trang fake bill ACB Bank chuyển khoản miễn phí";
    $imgreviews = "https://play-lh.googleusercontent.com/knIdLBzE-ngS8Fhim_0FxH56vWhXaQmuLcpMdAcoFY_790hd3t4_XQAlyEWUnYJRyWFP";
    $iconshortcut = "https://play-lh.googleusercontent.com/knIdLBzE-ngS8Fhim_0FxH56vWhXaQmuLcpMdAcoFY_790hd3t4_XQAlyEWUnYJRyWFP";
}elseif ($changepages == 'fake-bill-mbbank') {
    $title = "FakeBill - Ngân Hàng MBBank";
    $description = "TiennMinhh - GLCZ7 - Trang fake bill MBBank chuyển khoản miễn phí";
    $imgreviews = "https://files.catbox.moe/fq9mki.png";
    $iconshortcut = "https://play-lh.googleusercontent.com/rBEfIxFhnCIq9p6eMdw-U1RhD5psINWr0_Rbx3Wvy3HMJpRRsnG6efhug5eyPlJc7u0";
}elseif ($changepages == 'fake-bill-techcombank') {
    $title = "FakeBill - Ngân Hàng Technetbank";
    $description = "TiennMinhh - GLCZ7 - Trang fake bill Technetbank chuyển khoản miễn phí";
    $imgreviews = "https://play-lh.googleusercontent.com/Ddr3ZQEu6Vef9JV9ITALeyBEXvYwQWZ3kKJXxrdncD9JR0xlsO--J6zo7uGARfuTBmk";
    $iconshortcut = "https://play-lh.googleusercontent.com/Ddr3ZQEu6Vef9JV9ITALeyBEXvYwQWZ3kKJXxrdncD9JR0xlsO--J6zo7uGARfuTBmk";
}elseif ($changepages == 'fake-bill-vietcombank') {
    $title = "FakeBill - Ngân Hàng vietcombank";
    $description = "TiennMinhh - GLCZ7 - Trang fake bill vietcombank chuyển khoản miễn phí";
    $imgreviews = "https://play-lh.googleusercontent.com/hRq2DVKkzBXQkyftxr0e2ytl0fS2hEWx3UTe3V652RfJVYWqVRGgBNhmZgqNzJ8PKHE";
    $iconshortcut = "https://play-lh.googleusercontent.com/hRq2DVKkzBXQkyftxr0e2ytl0fS2hEWx3UTe3V652RfJVYWqVRGgBNhmZgqNzJ8PKHE";
}elseif ($changepages == 'fake-sodu-mbbank') {
    $title = "Fakesodu - Ngân Hàng MB Bank";
    $description = "Fakesodu - Trang số dư MB Bank miễn phí";
    $imgreviews = "https://files.catbox.moe/fq9mki.png";
    $iconshortcut = "https://play-lh.googleusercontent.com/rBEfIxFhnCIq9p6eMdw-U1RhD5psINWr0_Rbx3Wvy3HMJpRRsnG6efhug5eyPlJc7u0";
}
elseif ($changepages == 'fake-sodu-techcombank') {
    $title = "Fakesodu - Ngân Hàng Techcombank";
    $description = "Fakesodu - Trang số dư Techcombank miễn phí";
    $imgreviews = "https://play-lh.googleusercontent.com/Ddr3ZQEu6Vef9JV9ITALeyBEXvYwQWZ3kKJXxrdncD9JR0xlsO--J6zo7uGARfuTBmk";
    $iconshortcut = "https://play-lh.googleusercontent.com/Ddr3ZQEu6Vef9JV9ITALeyBEXvYwQWZ3kKJXxrdncD9JR0xlsO--J6zo7uGARfuTBmk";
}
$daysOfWeek = [
    'Sunday' => 'Chủ Nhật',
    'Monday' => 'Thứ Hai',
    'Tuesday' => 'Thứ Ba',
    'Wednesday' => 'Thứ Tư',
    'Thursday' => 'Thứ Năm',
    'Friday' => 'Thứ Sáu',
    'Saturday' => 'Thứ Bảy'
];
$timestamp = time();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = date('H:i l d/m/Y', $timestamp);
$now = strtr($now, $daysOfWeek);
?>