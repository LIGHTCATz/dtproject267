<?php
    include"dbcon.php"; //ทำให้รู้จักฐานข้อมูล
    if(isset($_REQUEST['bsubmitstudent'])){
    $firstname=$_REQUEST['tfirstname'];
    //รับค่าจาก textbox ที่ชื่อ tfirstname
    $lastname=$_REQUEST['tlastname'];
    $email=$_REQUEST['temail'];
    $address=$_REQUEST['taddress'];

    echo $firstname.$lastname.$email.$address;
    $sql="INSERT INTO tbstudent
            VALUE(null,'$firstname','$lastname','$email','$address')";
    $query=$conn->query($sql);
    echo "<META HTTP-EQUIV='refresh'
                            CONTENT='3; URL=lab2-2.php'>";
    //หลังจากบันทึกข้อมูลเรียบร้อยให้หน่วงเวลา 3 วินาทีและย้อนกลับไปที่หน้าจอ

    }elseif(isset($_REQUEST['bsubmitroom'])){
        $roomname=$_REQUEST['troomname'];
        $detail=$_REQUEST['tdetail'];
        $roomtype=$_REQUEST['troomtype'];
    echo $roomname.$detail.$roomtype;
    $sql="INSERT INTO tbroom
            VALUE(null,'$roomname','$detail','$roomtype')";
    $query=$conn->query($sql);
    echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-4.php'>";

    }elseif(isset($_REQUEST['bsubmitbook'])){
    $bookname=$_REQUEST['tbookname'];
    $author=$_REQUEST['tauthor'];
    $price=$_REQUEST['tprice'];
    $stock=$_REQUEST['tstock'];
    $booktypeid=$_REQUEST['tbooktypeid'];
    echo $bookname.$author.$price.$stock.$booktypeid;
    $sql="INSERT INTO tbbook
            VALUE(null,'$bookname','$author','$price','$stock','$booktypeid')";
    $query=$conn->query($sql);
    echo "<META HTTP-EQUIV='refresh'
                    CONTENT='3; URL=lab2-3.php'>";

    }elseif(isset($_REQUEST['bsubmitbooktype'])){
    $booktypeid=$_REQUEST['tbooktype'];
    echo $booktypeid;
    $sql="INSERT INTO tbbooktype
         VALUE(null,'$booktypeid')";
    $query=$conn->query($sql);
    echo "<META HTTP-EQUIV='refresh'
                    CONTENT='3; URL=lab2-3.php'>";

    }elseif(isset($_REQUEST['bsubmitlogin'])){
    $firstname=$_REQUEST['tfirstname'];
    $lastname=$_REQUEST['tlastname'];
    $username=$_REQUEST['tusername'];
    $password=$_REQUEST['tpassword'];
    $hashValue = md5($password);
    echo"ไปกันต่อ";
    $sql="INSERT INTO tbuser
            VALUE(null,'$firstname','$lastname','$username','$hashValue')";
    $query=$conn->query($sql);
    echo "<META HTTP-EQUIV='refresh'
                    CONTENT='3; URL=lab_function/lab-formlogin.php'>";

    }elseif(isset($_REQUEST['bLogin'])){
        $username=$_REQUEST['tusername'];
        $password=$_REQUEST['tpassword'];
        $hashValue = md5($password);
        $sql="SELECT * FROM tbuser
            WHERE username='$username'
            and password='$hashValue'";
        $query=$conn->query($sql);
        $rs=$query->fetch_object();
        //ดึงข้อมูลตัวที่หาเจอมาเก็บที่ตัวแปร $rs
        $numrows = $query->num_rows;
        //นับจำนวนแถวที่หาเจอ จะคืนค่ากลับมาเแ็น int เสมอ
        if($numrows>0){
            echo"ล็อกอินสำเร็จ";
        }else{
            echo"ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
        echo "<META HTTP-EQUIV='refresh'
                    CONTENT='3; URL=lab_function/lab-formlogin.php'>";

    }
?>