<?php
    $name='สมชาย';
    $age=30;
    $career='รับจ้างทั่วไป';
    echo"ชื่อ : ".$name."<br>อายุ : ".$age."ปี<br>อาชีพ : ".$career;
    echo"<hr>";
    echo'ชื่อ: $name<br>อายุ: $age ปี<br>อาชีพ : $career';
    echo"<hr>";
    echo"อายุ: {$age}$";
    echo"<hr>";
    
    echo"<h2>ตัวอย่างการใช้งาน Operator</h2>";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo "ผลรวมเท่ากับ : ".$sum;
    $sum+=5; //มีความหมายเทียบเท่ากับ sum=sum+5
    $sum-=5; //ลบออกทีละ 5 หรือเขียนได้ว่า sum=sum-5
    echo "<br>ผลรวมเท่ากับ : ".$sum;
    echo"<hr>";
    echo"<h2>ตัวอย่างการเพิ่ม-ลดค่า</h2>";
    $count=1;
    $count++; //เพิ่มทีละ 1
    $count+=2; //เพิ่มทีละ 2
    $count*=2; //count=count*2
    echo $count;
    echo "<h2>เงื่อนไขแบบ Ternary</h2>";
    $x=30;
    $b = ($x % 2 == 0) ? 'เลขคู่' : 'เลขคี่';
    echo "ผลลัพธ์คือ : ".$b;
    echo "<h2>การเช็คค่าว่าง</h2>";
    $user = 'user1';
    $password = '';
    $msg = ($user=='' || $password=='') ? 'กรุณากรอกข้อมูล' : 'ขอบคุณ';
    echo $msg;
    echo "<h2>การเช็คค่าว่าง</h2>";
    $user = 'user1';
    $password = '1234';
    if(empty($user) || empty($password)){
        $msg="กรุณากรอกข้อมูล";    
    }else{
        $msg="ขอบคุณ";
    }
    echo $msg;
    echo"<hr>";
    echo"<h2>การใช้งาน if-else</h2>";
    $status="manager"; //admin,member,,manager
    if($status=="admin"){
        echo"i am admin";
    }elseif($status=="member"){
        echo"i am member";
    }elseif($status=="manager"){
        echo"i am manager";
    }else{
        echo"invalid user status !!!.";
    }
    echo"<hr>";
    echo"<h2>การใช้เครื่องหมายเปรียบเทียบ</h2>";
    $pw1 = 123;
    $pw2 = 456;
    if($pw1 != $pw2){
        echo 'รหัสผ่านไม่ตรงกัน';
    }else{
        echo 'รหัสผ่านตรงกัน';
    }

?>