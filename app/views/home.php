<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="hero">
        <h1>FINGERPRINT ATTENDANCE SYSTEM</h1>
    </div>
    
    <div class="container">
        <div class="content">

            <div class="container">
                <h1>Active Employees</h1>
                <input type="text" id="userSearchInput" placeholder="Search...">
            </div>
             
            <table id="user-table"> 
                <tr>
                    <th>Name</th>
                    <th>Privilege</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($data['users'] as $user): ?>
                    <tr>
                        <?php foreach ($user as $key => $value): ?>
                            <td><?= htmlspecialchars($value) ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        
        <div class="content">
            <div class="container">
                <h1>Attendance</h1>
                <input type="text" id="attendanceSearchInput" placeholder="Search...">
            </div>
           
            <table id="attendance-table">
                <tr>
                    <th>Month, Year</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Time In (AM)</th>
                    <th>Time Out (AM)</th>
                    <th>Time In (PM)</th>
                    <th>Time Out (PM)</th>
                </tr>
                <?php foreach ($data['attendance'] as $attendance): ?>
                    <tr>
                        <?php foreach ($attendance as $key => $value): ?>
                            <td><?= htmlspecialchars($value) ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <!-- <script>
        document.getElementById("searchInput").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script> -->


    <script src="public/scripts/tableUtil.js"></script>
    <script>
        document.getElementById("userSearchInput").addEventListener("keyup", function() {
            filterTable("userSearchInput", "#user-table");
        });

        document.getElementById("attendanceSearchInput").addEventListener("keyup", function() {
            filterTable("attendanceSearchInput", "#attendance-table");
        });
    </script>

</body>
</html>
