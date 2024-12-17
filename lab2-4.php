<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>

<h2 class="p1">
<i class="fa-solid fa-poo"></i> เพิ่มข้อมูลห้องพัก</h2>
<div class="content">
    <form action="action.php" method="post">    

        <div class="mb-3">
            <label class="form-label">ROOMNAME</label>
            <input type="text" class="form-control"
            name="troomname"
            placeholder="ระบุชื่อห้อง...">
</div>
        <div class="mb-3">
            <label class="form-label">DETAIL</label>
            <textarea class="form-control"
            name="tdetail"
            rows="3"></textarea>
</div> 
        <div class="mb-3">
            <label class="form-label">ROOMTYPE</label>
            <select class="form-control" name="troomtype">
            <?php
                include"dbcon.php";
                $sql="SELECT * FROM tbroomtype";
                $query=$conn->query($sql);
                while($row=$query->fetch_object()){

            ?>
            <option value="<?=$row->roomtypeid?>">
            <?=$row->roomtypename?></option>
        <?PHP } ?>
        </select>
        </div>
        <div>
            <button type="submit" class="btn btn-success" name ="bsubmitroom">บันทึกข้อมูล</button>
        </div>

    </form>
</div>

