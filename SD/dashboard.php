
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SCHOLAR HOME</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dstyle.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
 <div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">SJC Home</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="profile.php">
                <i class="bx bx-user"></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="uploadfile.php">
            <i class='bx bx-upload' ></i>
                <span class="links_name">Upload File</span>
            </a>
            <span class="tooltip">Upload File</span>
        </li>
        <li>
            <a href="#">
            <i class='bx bxs-file'></i>
                <span class="links_name">View File</span>
            </a>
            <span class="tooltip">View File</span>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <?php 
                include ("../database/dbase.php");
                $sql="Select * from staff_detail where s_id ";
                $result=mysqli_query($cn,"$sql");
                $row=$result->fetch_assoc();
                $email=$row['email'];
                $profilename=$row['name'];
                ?>
                <div class="name_job">
                    <div class="name"><?php echo $profilename ?></div>
                    <div class="job"><?php echo $email ?></div>
                </div>
            </div>
            
            <a href="../Login/logout.php">
            <i class="bx bx-log-out" id="log_out"></i>
            </a>
        </div>
    </div>
 </div>
 <div class="home_content">
    <div class="text"><h4>Scholar Dashboard</h4></div>
 </div>
 <script>
    let btn =document.querySelector("#btn");
    let sidebar =document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
 </script>
 
</body>
</html>
