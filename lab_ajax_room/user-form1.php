<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
</head>
<body>
<!--====form section start====-->
<h2 class="p1">
<i class="fa-solid fa-house"></i>Insert User Data</h2>
<div class="content">
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label class="form-label">ROOMNAME</label>
          <input type="text" class="form-control" placeholder="ระบุชื่อห้อง..." name="troomname" required>
          <label class="form-label">DETAIL</label>
          <textarea class="form-control"  name="tdetail" rows="3" required></textarea>

          <label class="form-label">ROOMTYPE</label>
          <select class="form-control" name="troomtype" required>
          <?php
                include"database.php";
                $sql="SELECT * FROM tbroomtype";
                $query=$conn->query($sql);
                while($row=$query->fetch_object()){

            ?>
            <option value="<?=$row->roomtypeid?>">
            <?=$row->roomtypename?></option>
        <?PHP } ?>
        </select>
        <br><button type="submit" class="btn btn-success">Submit</button></br>
        </div>
    </form>
        </div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>
<h1 class="p1">
    <i class="fa-solid fa-house"></i>tbroom</h1>
<div class="content">
    <table class="table table-striped table-hover">
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPE</th>
        </thead>
        <tbody>
<?php
    include"database.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbroom
        INNER JOIN tbroomtype
        ON tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
                <td><?=$row->roomid?></td>
                <td><?=$row->roomname?></td>
                <td><?=$row->detail?></td>
                <td><?=$row->roomtypename?></td>
        </tr>
<?php
    }

?>  
        </tbody>
    </table>
</div>
</div>
