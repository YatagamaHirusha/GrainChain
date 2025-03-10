<?php
session_start();
$farmer_name = $_SESSION['full_name'];
$farmer_contact = $_SESSION['contact_number'];
$province = $_SESSION['province'];
$district = $_SESSION['district'];
$land_size = $_SESSION['land_area'];
$irrigation = $_SESSION['irrigation_type'];
$address = $_SESSION['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="FarmerDashboard.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Welcome, <span id="farmer-name"><?php echo $farmer_name ?></span></h1> 
            <nav>
                <a href="Index.html">Home</a>
                <a href="#">Profile</a>
                <a href="Logout.php">Logout</a>
            </nav>
        </div>
    </header>

    <div class="dashboard-container">
        <aside class="sidebar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Rice Supply</a></li>
                <li><a href="#">Requests</a></li>
                <li><a href="#">Notifications</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <section class="profile">
                <h2>Profile</h2>
                <div class="profile-details">
                    <div class="profile-info">
                        <p><strong>Name:</strong> <span id="farmer-name-text"><?php echo $farmer_name; ?> </span></p> 
                        <p><strong>Contact:</strong> <span id="contact-info"><?php echo $farmer_contact; ?></span></p> 
                        <p><strong>Address:</strong> <span id="land-size"><?php echo $address; ?></span></p>
                        <p><strong>Farm Location:</strong> <span id="farm-location"><?php echo $district.",".$province."."; ?></span></p> 
                        <p><strong>Land Size:</strong> <span id="land-size"><?php echo $land_size." Acres."; ?></span></p>
                        <p><strong>Irrigation Type:</strong> <span id="land-size"><?php echo $irrigation; ?></span></p>
                        <!--<button id="edit-profile-btn">Edit Profile</button>-->
                    </div>
                </div>
            </section>

            <section class="rice-supply">
                <h2>Rice Supply Overview</h2>
                <div class="supply-info">
                    <p><strong>Total Harvested:</strong> <span id="total-harvested">5000kg</span></p>
                    <p><strong>Rice Types:</strong></p>
                    <ul id="rice-types">
                        <li>Red Rice: 2000kg</li>
                        <li>White Rice: 3000kg</li>
                    </ul>
                    <button id="add-harvest-btn">Add New Harvest</button>
                </div>
                <div class="harvest-history">
                    <h3>Harvest History</h3>
                    <ul id="harvest-history">
                        <li>Date: 01/01/2025, Quantity: 200kg</li>
                        <li>Date: 15/12/2024, Quantity: 300kg</li>
                    </ul>
                </div>
            </section>

            <section class="fertilizer-subsidy-container">
                <h2>Fertilizer Subsidy</h2>
                
                <div class="subsidy-status">
                    <h3>Your Subsidy Status</h3>
                    <p id="subsidy-status">Eligibility Status: <span id="eligibility-status">Eligible</span></p>
                    <p id="subsidy-amount">Subsidy Amount: <span id="amount">LKR 5000</span></p>
                </div>
                
                <div class="request-subsidy">
                    <button id="apply-btn">Apply for Subsidy</button>
                </div>
                
                <div class="subsidy-history">
                    <h3>Your Subsidy Application History</h3>
                    <table id="history-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- For sample data -->
                            <tr>
                                <td>2025-01-15</td>
                                <td>Approved</td>
                                <td>LKR 5000</td>
                            </tr>
                            <tr>
                                <td>2024-12-01</td>
                                <td>Pending</td>
                                <td>LKR 4500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="rice-requests">
                <h2>Rice Requests</h2>
                <button id="request-sell-rice-btn">Request to Sell Rice</button>
                <h3>Past Requests</h3>
                <ul id="past-requests">
                    <li>Date: 01/01/2025, Quantity: 200kg, Status: Approved</li>
                    <li>Date: 15/12/2024, Quantity: 300kg, Status: Pending</li>
                </ul>
            </section>

            <section class="notifications">
                <h2>Notifications</h2>
                <ul id="notifications-list">
                    <li>Rice Request Approved (01/02/2025)</li>
                    <li>New Rice Harvest Submitted (25/01/2025)</li>
                </ul>
            </section>
        </main>
    </div>
    
    <footer>
        <p>© 2025 Paddy Marketing Board | Terms & Conditions</p>
    </footer>
</body>
</html>
