<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hospital = strip_tags(trim($_POST["hospital_name"]));
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $interest = $_POST["service_interest"];

    // الإيميل الذي ستصلك عليه بيانات المستشفيات
    $to = "glawawdeh@gmail.com"; 
    $subject = "طلب جديد من Purifexis: $hospital";
    
    $email_content = "اسم المستشفى: $hospital\n";
    $email_content .= "اسم المسؤول: $name\n";
    $email_content .= "الإيميل: $email\n";
    $email_content .= "الهاتف: $phone\n";
    $email_content .= "الاهتمام: $interest\n";

    $headers = "From: webmaster@purifexis.com";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "شكراً لك. تم استلام طلبك وسنتصل بك قريباً.";
    } else {
        echo "عذراً، حدث خطأ ما. حاول مرة أخرى.";
    }
}
?>
