<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>

<h2 class="p1">
<i class="fa-solid fa-house"></i> หน้าจอเพิ่มข้อมูลผู้ใช้</h2>
<div class="content">
    <form action="../action.php" method="post">    

        <div class="mb-3">
            <label class="form-label">firstname</label>
            <input type="text" class="form-control"
            name="tfirstname"
            placeholder="ระบุชื่อ" required>
</div>
<div class="mb-3">
            <label class="form-label">lastname</label>
            <input type="text" class="form-control"
            name="tlastname"
            placeholder="ระบุนามสกุล" required>
</div>
        <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" class="form-control"
            name="tusername"
            placeholder="ลืมใส่ชื่ออะคัฟน้อง" required>
</div> 
        <div class="mb-3">
            <label class="form-label">password</label>
            <input type="password" class="form-control"
            name="tpassword"
            placeholder="ใส่รหัสด้วยครับน้อง" required>
</div> 
        </select>
        <button type="submit" class="btn btn-success" name ="bsubmitlogin">บันทึกข้อมูล</button>
    </form>
</div>