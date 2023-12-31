<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
     /* ---delete---  */ 

     if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query("DELETE FROM info_student WHERE id = $delete_id");
        $deletestmt->execute();

        if ($deletestmt) {
            $_SESSION['success'] = "Data has been deleted successfully";
            echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'ลบข้อมูลนี้เรียบร้อย',
                    icon: 'success',
                    timer: 5000,

                });
            })
        </script>";
        header("refresh:10; url=../ConfirmPage.php");
           
        
        }
    }
?>
<div class="content">
<?php include '../component/Admin/Confirm/Haeder.php'?>
<div class="table-container">
        <table class="custom-table">
        <tr>
            <th>ชื่อกิจกรรม</th>
            <th>เพิ่มด้วยตนเอง</th>
            <th>ผู้รับรอง</th>
            <th>รหัสนักศึกษา</th>
            <th>จำนวนชั่วโมง</th>
            <th>วันที่บันทึกมา</th>
            <th>รูปภาพ</th>
            <th>รายละเอียด</th>
            <th>สถานนะ</th>
        </tr>
        <?php
            //คิวรี่ข้อมูลมาแสดงในตาราง
            require_once 'server.php';
            $stmt = $conn->prepare("SELECT * FROM info_student");
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $k) {
            ?>

            <tr>
            <td><?php echo $k['user_activity']; ?></td>
            <td><?php echo $k['activity2']; ?></td>
            <td><?php echo $k['user_certifier']; ?></td>
            <td><?php echo $k['studentID']; ?></td>
            <td><?php echo $k['collect_hours']; ?></td>
            <td><?php echo $k['name_time']; ?></td>
            <td width="150px" ><img class="rounded" width="100%"  src="../page/uploadsIMG/<?php echo $k['img']; ?>" alt=""></td>
            <td><?php echo $k['name_message']; ?></td>
            <td><?php echo $k['user_status']; ?></td>
            
            </tr>
            <?php } ?>

    </table>
    </div>