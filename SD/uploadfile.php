<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'stud') {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="ustyle.css">
  <link rel="stylesheet" href="dstyle.css">
  <!----===== Iconscout CSS ===== -->

  <title>Uploading File</title>

</head>

<body>
  <?php include "dashboard.php"; ?>
  <div class="content">
    <div class="content_1">
      <div class="container">
        <header>Upload File</header>

        <form action="upload.php" method="post">
          <div class="form first">
            <div class="details personal">

              <div class="fields">
                <div class="input-field">
                  <label>Full Name</label>
                  <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input-field">
                  <label>Guide Name</label>
                  <input type="text" name="guidename" placeholder="Enter the name" required>
                </div>

                <div class="input-field">
                  <label>Journal Name</label>
                  <input type="text" name="journalname"placeholder="Enter the name" required>
                </div>

                <div class="input-field">
                  <label>H-Index</label>
                  <input type="number" name="hindex" placeholder="Enter the H-Index" required>
                </div>

                <div class="input-field">
                  <label>Journal Type</label>
                  <select name="type" required>
                    <option disabled selected>Select Journal</option>
                    <option>UGC Care</option>
                    <option>Scopus</option>
                    <option>Web of Science</option>
                    <option>Others</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Title of the Paper</label>
                  <input type="text" name="title"placeholder="Enter the Title" required>
                </div>

                <div class="input-field">
                  <label>Impact Factor</label>
                  <input type="text" name="impactfactor"placeholder="Enter Impact Factor" required>
                </div>
                <div class="input-field">
                  <label>Issued Date</label>
                  <input type="date" name="date" placeholder="Enter your issued date" required>
                </div>
                <div class="input-field">
                  <label>Authors</label>
                  <input type="text" name="authors"placeholder="Enter the Authors" required>
                </div>


                <button class="sumbit">
                  <span class="btnText">Submit</span>
                </button>
                <button class="clear" type="button" onclick="clearForm()">
                  <span class="btnText">Clear</span>
                </button>

              </div>
        </form>
      </div>

    </div>
  </div>
  <script>
    function clearForm() {
      var inputFields = document.querySelectorAll("input, select");
      for (var i = 0; i < inputFields.length; i++) {
        inputFields[i].value = "";
      }
    }
  </script>


</body>

</html>
<?php
} else {
    header("location:../Login/index.php");
}
?>