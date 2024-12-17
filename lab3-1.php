<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>

<h2 class="p1">
<i class="fa-solid fa-poo"></i> TBBOOK</h2>
<div class="content">
    <form action="action.php" method="post">    

        <div class="mb-3">
            <label class="form-label">bookname</label>
            <input type="text" class="form-control"
            name="tbookname"
            placeholder="ระบุชื่อหนังสือ">
</div>
<div class="mb-3">
            <label class="form-label">author</label>
            <input type="text" class="form-control"
            name="tauthor"
            placeholder="ระบุชื่อผู้แต่ง">
</div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="number" class="form-control"
            name="tprice">
</div> 
        <div class="mb-3">
            <label class="form-label">stock</label>
            <input type="number" class="form-control"
            name="tstock">
</div> 
        <div class="mb-3">
            <label class="form-label">booktypeid</label>
            <select class="form-control" name="tbooktypeid">
            <?php
                include"dbcon.php";
                $sql="SELECT * FROM tbbooktype";
                $query=$conn->query($sql);
                while($row=$query->fetch_object()){

            ?>
            <option value="<?=$row->booktypeid?>">
            <?=$row->booktypename?></option>
        <?PHP } ?>
        </select>
        </div><button type="submit" class="btn btn-success" name ="bsubmitbook">ADD BOOK</button></div>
    </form>
</div>
