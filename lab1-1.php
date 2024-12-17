<?php
    echo"<hr>";
    echo"แสดงข้อมูลทั้งหมด";
    echo"<br>";
    include"dbcon.php";
    $sql="SELECT * FROM tbstudent";
    $query=$conn->query($sql);
    while($rs=$query->fetch_object()){
        echo$rs->stdid."."
        .$rs->firstname."&nbsp;&nbsp;"
        .$rs->lastname."&nbsp;"
        .$rs->address."<br>";
    }
    echo"<hr>";
    echo"แสดงข้อมูล 2";
    echo"<br>";
    $sql2="SELECT * FROM tbstudent WHERE stdid='2' ";
    $query2=$conn->query($sql2);
    while($rs2=$query2->fetch_object()){
        echo$rs2->stdid."."
        .$rs2->firstname."&nbsp;&nbsp;"
        .$rs2->lastname."&nbsp;"
        .$rs2->address."<br>";
    }
    echo"<hr>";
    echo"หาชื่อที่มี ส ";
    echo"<br>";
    $sql3="SELECT * FROM tbstudent WHERE firstname LIKE'%ส%' ";
    $query3=$conn->query($sql3);
    while($rs3=$query3->fetch_object()){
        echo$rs3->stdid."."
        .$rs3->firstname."&nbsp;&nbsp;"
        .$rs3->lastname."&nbsp;"
        .$rs3->address."<br>";
    }
    echo"<hr>";
?>