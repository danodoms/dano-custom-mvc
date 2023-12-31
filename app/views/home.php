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
            <h1>Active Employees</h1>
            <input type="text" id="searchInput" placeholder="Search...">
            <table>
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
    </div>

    <script>
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
    </script>
