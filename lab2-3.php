<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>





<h2 class="p1">
    <i class="fa-solid fa-house"></i> การดึงข้อมูลตารางมากกว่า 1 ตาราง (join table)</h2>
<div class="content">
xxxxxxxx</br>
</div>

<h2 class="p1">
    <i class="fa-solid fa-house"></i> ทดสอบดึงตาราง tbroom</h2>
<div class="content">
    <table class="table table-striped">
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPEID</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroom";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomid?></td>
                <td><?=$row->roomname?></td>
                <td><?=$row->detail?></td>
                <td><?=$row->roomtypeid?></td>
            </tr>
<?php
    }
?>
        </tbody>
</table>
</div>



<h2 class="p1">
    <i class="fa-solid fa-house"></i> ทดสอบดึงตาราง tbroomtype</h2>
<div class="content">
    <table class="table table-striped table-bordered">
        <thead>
            <th>ROOMTYPEID</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomtypeid?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
    }
?>
        </tbody>
</table>
</div>

<h2 class="p1">
    <i class="fa-solid fa-house"></i> ทดสอบดึงตารางมากกว่า 1 ตาราง</h2>
<div class="content">
    <table class="table table-striped table-bordered">
        <thead>
            <th>ROOMNAME</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroom
        INNER JOIN tbroomtype
         ON tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomname?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
    }
?>
        </tbody>
</table>
</div>
<h1 class="p1">
    <i class="fa-solid fa-house"></i>BOOK</h1>
<div class="content">
    <table class="table table-striped">
        <thead>
            <th>BOOKNAME</th>
            <th>AUTHOR</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>BOOKTYPEID</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbbook
        INNER JOIN tbbooktype 
        on tbbook.booktypeid=tbbooktype.booktypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->bookname?></td>
            <td><?=$row->author?></td>
            <td><?=$row->price?></td>
            <td><?=$row->stock?></td>
            <td><?=$row->booktypeid?></td>
        </tr>
<?php
    }

?>
        </tbody>
    </table>
</div>
<a href="lab3-1.php">
        <button class="btn btn-primary">
        <i class="fa-solid fa-plus">      </i>ADD BOOK</button>
</a></div>
</div>
<h1 class="p1">
    <i class="fa-solid fa-house"></i>BOOK TYPE</h2>
<div class="content">
    <table class="table table-striped">
        <thead>
            <th>booktypeid</th>
            <th>booktypname</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->booktypeid?></td>
            <td><?=$row->booktypename?></td>
        </tr>
<?php
    }
?>
        <tbody>
    </table>
    </div>
</div>
</div><a href="lab3-2.php">
        <button class="btn btn-primary">
        <i class="fa-solid fa-plus">      </i>ADD BOOKTYPE</button>
</a></div>