<?php


include 'db.php';


// Fetch graves for visual representation
$sql = "SELECT g.grave_id, g.status, d.first_name, d.last_name
        FROM graves g
        LEFT JOIN deceased d ON g.grave_id = d.grave_id
        ORDER BY g.grave_id ASC";  
$result = $conn->query($sql);
$graves = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $graves[] = $row;
    }
}

// Fetch all deceased individuals
$sql = "SELECT d.deceased_id, d.first_name, d.last_name, d.birth_date, d.death_date, d.obituary, 
               g.grave_id, g.section, g.block_number, g.lot_number, g.status
        FROM deceased d
        LEFT JOIN graves g ON d.grave_id = g.grave_id
        ORDER BY g.grave_id ASC";
$result = $conn->query($sql);
$deceasedList = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $deceasedList[] = $row;
    }
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemetery Map</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
       

    <link rel="stylesheet" href="map2.css">    
</head>
<body>




 <!-- HEADER / NAVBAR -->
<header>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <nav class="navbar section-content">
        <a href="index.php" class="nav-logo">
            <h2 class="logo-text">  
            💐Ethernal</h2>
        </a>
        <ul class="nav-menu">    
            <button id="menu-close-button" class="fas fa-times"></button>

            <li class="nav-item">
                <a href="index.php#home" class="nav-link">Home</a>
            </li>
            
            <li class="nav-item">
                <a href="map-page.php" class="nav-link">Map</a>
            </li>
            <li class="nav-item">
                <a href="index.php#about" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="index.php#contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <button id="menu-open-button" class="fas fa-bars"></button>
    </nav>
</header>

    


    <!-- MAP SECTION -->
<section id="map" class="map-section">
    <div class="section-content">
        <!-- Grid Display for Graves -->
        <div class="grid">
            <?php foreach ($graves as $grave): ?>
                <div class="grave <?php echo strtolower($grave['status']); ?>" 
                     onclick="alert('Grave ID: <?php echo $grave['grave_id']; ?>')" 
                     data-name="<?php echo htmlspecialchars($grave['first_name'] . ' ' . $grave['last_name']); ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<!--LIST AND SEARCH SECTION -->




<section class="list-section">
    <h2>List of Deceased</h2>
    <p>Below is a list of all deceased individuals in the cemetery.</p>

    <!-- Search Input -->
    <input type="text" id="searchInput" placeholder="Search by name..." onkeyup="searchTable()">

   

    <table border="1" id="deceasedTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Date</th>
                <th>Death Date</th>
                <th>Obituary</th>
                <th>Grave Location</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deceasedList as $person): ?>
                <tr>
                    <td><?php echo $person['deceased_id']; ?></td>
                    <td><?php echo htmlspecialchars($person['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($person['last_name']); ?></td>
                    <td><?php echo $person['birth_date']; ?></td>
                    <td><?php echo $person['death_date']; ?></td>
                    <td><?php echo htmlspecialchars($person['obituary'] ?: 'N/A'); ?></td>
                    <td>Section <?php echo $person['section']; ?>, Block <?php echo $person['block_number']; ?>, Lot <?php echo $person['lot_number']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>







<!-- FOOTER SECTION -->
<footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Ethernal Cemetery Mapping. All rights reserved.</p>
            <p>Developed by <a href="https://github.com/yourprofile" target="_blank">Nazlah and Hazel</a></p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </footer>


    <script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase().split(" "); // Split the input by space
        table = document.getElementById("deceasedTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) { // Start at 1 to skip table header
            td = tr[i].getElementsByTagName("td");
            let found = false;

            // Combine first and last name and check if the search input matches the full name
            let fullName = (td[1].textContent || td[1].innerText) + " " + (td[2].textContent || td[2].innerText); // Combine first and last name
            
            // Check if every part of the input matches the full name
            let matches = filter.every(part => fullName.toLowerCase().includes(part));
            if (matches) {
                found = true;
            }

            tr[i].style.display = found ? "" : "none"; // Show or hide row
        }
    }
</script>



    

    

<script src="script.js"></script>






    

</body>
</html>
