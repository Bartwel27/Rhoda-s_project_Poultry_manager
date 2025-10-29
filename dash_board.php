<?php
require "action.php";

if (isset($_SESSION["fname"])) {
	$f_name = $_SESSION["fname"]; 
	$l_name = $_SESSION["lname"];$fullname = $f_name." ".$l_name;
	$email = $_SESSION["email"];
	$farm_name = $_SESSION["farmName"];
	$phone_number = $_SESSION["phoneNumber"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoultryPro User Dashboard</title>
    <style>
        :root {
            --primary: #1B5E20; /* Dark Green */
            --secondary: #FF9800; /* Orange */
            --accent: #FFFFFF; /* White */
            --light: #E8F5E9; /* Light Green */
            --dark: #000000; /* Black */
            --text: #333333;
            --sidebar-width: 250px;
            --card-bg: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--primary);
            color: var(--accent);
            height: 100vh;
            position: fixed;
            padding: 20px 0;
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }
        
        .sidebar-logo {
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-logo h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent);
        }
        
        .sidebar-logo span {
            color: var(--secondary);
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0 15px;
        }
        
        .sidebar-menu li {
            margin-bottom: 10px;
        }
        
        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            text-decoration: none;
            color: var(--accent);
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .sidebar-menu a:hover, .sidebar-menu a.active {
            background: var(--secondary);
            color: var(--dark);
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .content-wrapper {
            flex: 1;
        }
        
        /* Header */
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .dashboard-header h1 {
            color: var(--primary);
            font-weight: 600;
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .notification-bell {
            position: relative;
            margin-right: 20px;
            cursor: pointer;
            color: var(--primary);
        }
        
        .notification-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--secondary);
            color: var(--dark);
            font-size: 12px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
            border: 2px solid var(--secondary);
        }
        
        .user-role {
            background: var(--secondary);
            color: var(--dark);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-left: 10px;
            font-weight: bold;
        }
        
        .farm-name {
            font-weight: 600;
            color: var(--primary);
        }
        
        /* Home Button */
        .home-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 15px;
            transition: background 0.3s ease;
            font-weight: 500;
        }
        
        .home-button:hover {
            background: var(--secondary);
            color: var(--dark);
        }
        
        /* Summary Cards */
        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .card {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
            border-left: 4px solid var(--primary);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .card-title {
            font-size: 16px;
            color: var(--primary);
            font-weight: 500;
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
        }
        
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            background: var(--primary);
            margin: 0 auto 15px;
            font-size: 24px;
        }
        
        .card-value {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--primary);
        }
        
        .card-footer {
            font-size: 14px;
            color: #555;
        }
        
        /* Forms */
        .form-container {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-left: 4px solid var(--secondary);
        }
        
        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .form-title {
            font-size: 20px;
            color: var(--primary);
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .form-input {
            flex: 1;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary);
        }
        
        input, select, textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            color: #333;
        }
        
        input:focus, select:focus, textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 2px rgba(27, 94, 32, 0.2);
        }
        
        .btn {
            display: inline-block;
            padding: 10px 18px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s ease;
            font-size: 16px;
        }
        
        .btn:hover {
            background: var(--secondary);
            color: var(--dark);
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
            color: white;
        }
        
        /* Report Section */
        .report-section {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-left: 4px solid var(--primary);
        }
        
        .report-controls {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .report-content {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            max-height: 400px;
            overflow-y: auto;
            color: #333;
        }
        
        .report-table {
            width: 100%;
            border-collapse: collapse;
            color: #333;
        }
        
        .report-table th, .report-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #333;
        }
        
        .report-table th {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
        }
        
        .report-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .report-table tr:hover {
            background-color: #e9f7e9;
        }
        
        /* Flocks Section */
        .flocks-section {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-left: 4px solid var(--primary);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .section-title {
            font-size: 20px;
            color: var(--primary);
            font-weight: 600;
        }
        
        .view-all {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .flock-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background: #f9f9f9;
        }
        
        .flock-card h4 {
            color: var(--primary);
            margin-bottom: 8px;
        }
        
        .flock-card p {
            color: #555;
            margin-bottom: 10px;
        }
        
        /* Profile Section */
        .profile-section {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-left: 4px solid var(--secondary);
            display: none;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 32px;
            font-weight: bold;
            border: 3px solid var(--secondary);
        }
        
        .profile-info h3 {
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .profile-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .detail-group {
            margin-bottom: 15px;
        }
        
        .detail-label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .detail-value {
            color: #555;
        }
        
        /* Tasks Section */
        .tasks-section {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-left: 4px solid var(--secondary);
        }
        
        .task-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }
        
        .task-item:last-child {
            border-bottom: none;
        }
        
        .task-checkbox {
            margin-right: 15px;
        }
        
        .task-details {
            flex: 1;
        }
        
        .task-title {
            font-weight: 500;
            color: var(--primary);
        }
        
        .task-due {
            font-size: 14px;
            color: #555;
        }
        
        .task-priority {
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        
        .priority-high {
            background: #ffebee;
            color: #c62828;
        }
        
        .priority-medium {
            background: #fff3e0;
            color: #ef6c00;
        }
        
        .priority-low {
            background: #e8f5e9;
            color: #2e7d32;
        }
        
        /* Quick Actions */
        .quick-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
            background: var(--card-bg);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .action-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s ease;
            font-size: 16px;
            flex: 1;
        }
        
        .action-button:hover {
            background: var(--secondary);
            color: var(--dark);
        }
        
        /* Tabs */
        .tabs {
            display: flex;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            color: #333;
        }
        
        .tab.active {
            border-bottom: 3px solid var(--secondary);
            color: var(--primary);
            font-weight: 600;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        /* Logout Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        
        .modal-title {
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .modal-buttons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .modal-buttons .btn {
            flex: 1;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .report-controls {
                flex-direction: column;
            }
            
            .profile-details {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            
            .sidebar-logo h2, .sidebar-menu span {
                display: none;
            }
            
            .sidebar-menu {
                text-align: center;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .summary-cards {
                grid-template-columns: 1fr 1fr;
            }
            
            .quick-actions {
                flex-direction: column;
            }
            
            .tabs {
                flex-wrap: wrap;
            }
            
            .home-button span {
                display: none;
            }
            
            .home-button {
                padding: 8px 12px;
            }
        }
        
        @media (max-width: 576px) {
            .summary-cards {
                grid-template-columns: 1fr;
            }
            
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .user-info {
                width: 100%;
                justify-content: space-between;
            }
            
            .home-button {
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Logout Confirmation Modal -->
    <div class="modal" id="logout-modal">
        <div class="modal-content">
            <h2 class="modal-title">Confirm Logout</h2>
            <p>Are you sure you want to log out of PoultryPro?</p>
            <div class="modal-buttons">
                <button class="btn btn-secondary" id="cancel-logout">Cancel</button>
                <button class="btn" id="confirm-logout">Log Out</button>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <h2>Poultry<span>Pro</span></h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#" class="active" data-target="dashboard">
                <span>Dashboard</span>
            </a></li>
            <li><a href="#" data-target="flocks">
                <span>My Flocks</span>
            </a></li>
            <li><a href="#" data-target="health">
                <span>Health Tracking</span>
            </a></li>
            <li><a href="#" data-target="reports">
                <span>Reports</span>
            </a></li>
            <li><a href="#" data-target="profile">
                <span>Profile</span>
            </a></li>
            <li><a href="#" data-target="logout">
                <span>Logout</span>
            </a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Header -->
            <div class="dashboard-header">
                <div>
                    <h1>My Dashboard</h1>
                    <span class="user-role" id="display-role">Farm Manager</span>
                </div>
                <div class="user-info">
                    <!-- Home Button -->
                    <a href="index.php" class="home-button">

                        <span>Home</span>
                    </a>
                    
                    <div class="user-profile">
                        <div class="user-avatar" id="farm-avatar"><?php
							$newAvatar = $farm_name[0]."".$farm_name[-1];
							echo $newAvatar;
						?></div>
                        <span class="farm-name" id="display-farm-name"><?=$farm_name?></span>
                    </div>
                </div>
            </div>

			
            <!-- Summary Cards -->
            <div class="summary-cards">
                <div class="card">
                    <div class="card-icon">
                        <span>🐔</span>
                    </div>
                    <div class="card-title">Total Birds</div>
                    <div class="card-value">
						<?php
							//echo mysqli_fetch_assoc(mysqli_query($connect, "select Number_of_birds from health_records"))["Number_of_birds"];
						?>
					</div>
                    <div class="card-footer">Across 3 flocks</div> 
                </div>
                
                <div class="card">
                    <div class="card-icon" style="background-color: #1b5a02;">
                        <span>❤️</span>
                    </div>
                    <div class="card-title">Mortality Rate</div>
                    <div class="card-value">2.1%</div>
                    <div class="card-footer">This month</div>
                </div>
                
                <div class="card">
                    <div class="card-icon" style="background-color: var(--secondary);">
                        <span>🍽️</span>
                    </div>
                    <div class="card-title">Feed Cost</div>
                    <div class="card-value">$1,240</div>
                    <div class="card-footer">This month</div>
                </div>
                
                <div class="card">
                    <div class="card-icon" style="background-color: #4CAF50;">
                        <span>🥚</span>
                    </div>
                    <div class="card-title">Egg Production</div>
                    <div class="card-value">8,425</div>
                    <div class="card-footer">This month</div>
                </div>
            </div>

            <!-- Tabs for Forms -->
            <div class="tabs">
                <div class="tab active" data-tab="flock">Add Flock</div>
                <div class="tab" data-tab="metrics">Record Metrics</div>
                <div class="tab" data-tab="health">Record Health</div>
                <div class="tab" data-tab="transaction">Record Transaction</div>
            </div>

            <!-- Add Flock Form -->
            <div class="form-container tab-content active" id="flock-tab">
                <div class="form-header">
                    <h3 class="form-title">Add New Flock</h3>
                </div>
                
                <form id="flock-form">
                    <div class="form-row">
                        <div class="form-input">
                            <label for="flock-id">Flock ID</label>
                            <input type="text" id="flock-id" placeholder="e.g., Broiler-001" required>
                        </div>
                        
                        <div class="form-input">
                            <label for="flock-type">Flock Type</label>
                            <select id="flock-type" required>
                                <option value="">Select flock type</option>
                                <option value="broiler">Broiler</option>
                                <option value="layer">Layer</option>
                                <option value="breeder">Breeder</option>
                                <option value="pullet">Pullet</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="flock-size">Number of Birds</label>
                            <input type="number" id="flock-size" placeholder="Enter number of birds" required>
                        </div>
                        
                        <div class="form-input">
                            <label for="location">Location/House</label>
                            <input type="text" id="location" placeholder="e.g., House A" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="start-date">Start Date</label>
                            <input type="date" id="start-date" required>
                        </div>
                        
                        <div class="form-input">
                            <label for="source">Source</label>
                            <input type="text" id="source" placeholder="e.g., Hatchery name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea id="notes" rows="3" placeholder="Any additional information about this flock"></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Add Flock</button>
                </form>
            </div>

            <!-- Record Metrics Form -->
            <div class="form-container tab-content" id="metrics-tab">
                <div class="form-header">
                    <h3 class="form-title">Record Daily Metrics</h3>
                </div>
                
                <form id="metrics-form">
                    <div class="form-row">
                        <div class="form-input">
                            <label for="flock-select">Select Flock</label>
                            <select id="flock-select" required>
                                <option value="">Select a flock</option>
                                <option value="broiler-001">Broiler-001</option>
                                <option value="layer-003">Layer-003</option>
                                <option value="broiler-002">Broiler-002</option>
                            </select>
                        </div>
                        
                        <div class="form-input">
                            <label for="record-date">Date</label>
                            <input type="date" id="record-date" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="mortality">Mortality Count</label>
                            <input type="number" id="mortality" placeholder="Number of dead birds" min="0">
                        </div>
                        
                        <div class="form-input">
                            <label for="feed-consumption">Feed Consumption (kg)</label>
                            <input type="number" id="feed-consumption" placeholder="Total feed consumed" min="0" step="0.1">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="egg-production">Egg Production</label>
                            <input type="number" id="egg-production" placeholder="Number of eggs" min="0">
                        </div>
                        
                        <div class="form-input">
                            <label for="water-consumption">Water Consumption (L)</label>
                            <input type="number" id="water-consumption" placeholder="Liters of water consumed" min="0" step="0.1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="health-notes">Health Observations</label>
                        <textarea id="health-notes" rows="2" placeholder="Note any health issues or observations"></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Record Metrics</button>
                </form>
            </div>

            <!-- Record Health Form -->
            <div class="form-container tab-content" id="health-tab">
                <div class="form-header">
                    <h3 class="form-title">Record Health Data</h3>
                </div>
                
                <form id="health-form">
                    <div class="form-row">
                        <div class="form-input">
                            <label for="health-flock">Select Flock</label>
                            <select id="health-flock" required>
                                <option value="">Select a flock</option>
                                <option value="broiler-001">Broiler-001</option>
                                <option value="layer-003">Layer-003</option>
                                <option value="broiler-002">Broiler-002</option>
                            </select>
                        </div>
                        
                        <div class="form-input">
                            <label for="health-date">Date</label>
                            <input type="date" id="health-date" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="disease">Disease/Observation</label>
                            <input type="text" id="disease" placeholder="e.g., Respiratory issues" required>
                        </div>
                        
                        <div class="form-input">
                            <label for="affected-count">Number Affected</label>
                            <input type="number" id="affected-count" placeholder="Number of birds affected" min="0">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="treatment">Treatment Given</label>
                            <input type="text" id="treatment" placeholder="e.g., Antibiotics, Vaccination">
                        </div>
                        
                        <div class="form-input">
                            <label for="vet-name">Veterinarian Name</label>
                            <input type="text" id="vet-name" placeholder="Name of veterinarian">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="health-notes">Additional Notes</label>
                        <textarea id="health-notes" rows="3" placeholder="Any additional health observations"></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Record Health Data</button>
                </form>
            </div>

            <!-- Record Transaction Form -->
            <div class="form-container tab-content" id="transaction-tab">
                <div class="form-header">
                    <h3 class="form-title">Record Transaction</h3>
                </div>
                
                <form id="transaction-form">
                    <div class="form-row">
                        <div class="form-input">
                            <label for="transaction-type">Transaction Type</label>
                            <select id="transaction-type" required>
                                <option value="">Select type</option>
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                        </div>
                        
                        <div class="form-input">
                            <label for="transaction-date">Date</label>
                            <input type="date" id="transaction-date" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-input">
                            <label for="amount">Amount ($)</label>
                            <input type="number" id="amount" placeholder="Enter amount" min="0" step="0.01" required>
                        </div>
                        
                        <div class="form-input">
                            <label for="category">Category</label>
                            <select id="category" required>
                                <option value="">Select category</option>
                                <option value="feed">Feed</option>
                                <option value="medication">Medication</option>
                                <option value="equipment">Equipment</option>
                                <option value="labor">Labor</option>
                                <option value="egg-sales">Egg Sales</option>
                                <option value="bird-sales">Bird Sales</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" placeholder="Brief description of transaction" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="transaction-notes">Notes</label>
                        <textarea id="transaction-notes" rows="2" placeholder="Any additional notes"></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Record Transaction</button>
                </form>
            </div>

            <!-- Report Generator -->
            <div class="report-section">
                <div class="form-header">
                    <h3 class="form-title">Generate Report</h3>
                </div>
                
                <div class="report-controls">
                    <div class="form-input">
                        <label for="report-type">Report Type</label>
                        <select id="report-type">
                            <option value="flocks">Flocks Summary</option>
                            <option value="metrics">Production Metrics</option>
                            <option value="health">Health Records</option>
                            <option value="financial">Financial Summary</option>
                            <option value="comprehensive">Comprehensive Report</option>
                        </select>
                    </div>
                    
                    <div class="form-input">
                        <label for="start-date-report">Start Date</label>
                        <input type="date" id="start-date-report">
                    </div>
                    
                    <div class="form-input">
                        <label for="end-date-report">End Date</label>
                        <input type="date" id="end-date-report">
                    </div>
                    
                    <div class="form-input">
                        <label>&nbsp;</label>
                        <button type="button" class="btn" id="generate-report">Generate Report</button>
                    </div>
                </div>
                
                <div class="report-content" id="report-output">
                    <p>Select report type and date range, then click "Generate Report" to view your data.</p>
                </div>
            </div>

            <!-- Profile Section -->
            <div class="profile-section" id="profile-section">
                <div class="form-header">
                    <h3 class="form-title">User Profile</h3>
                </div>
                
                <div class="profile-header">
                    <div class="profile-avatar" id="profile-avatar">FP</div>
                    <div class="profile-info">
                        <h3 id="profile-farm-name"><?=$farm_name;?></h3>
                        <span class="user-role" id="profile-role">Farm Manager</span>
                    </div>
                </div>
                
                <div class="profile-details">
                    <div class="detail-group">
                        <div class="detail-label">Farm Name</div>
                        <div class="detail-value" id="profile-farm-name-value">Fresh Poultry Farm</div>
                    </div>
                    
                    <div class="detail-group">
                        <div class="detail-label">Farm Owner</div>
                        <div class="detail-value" id="profile-owner-name">Rhoda Sakala</div>
                    </div>
                    
                    <div class="detail-group">
                        <div class="detail-label">Email Address</div>
                        <div class="detail-value" id="profile-email">Rhoda@freshpoultry.com</div>
                    </div>
                    
                    <div class="detail-group">
                        <div class="detail-label">Phone Number</div>
                        <div class="detail-value" id="profile-phone">+260 777974609</div>
                    </div>
                    
                    <div class="detail-group">
                        <div class="detail-label">Farm Location</div>
                        <div class="detail-value" id="profile-location">Rural County, Farm State</div>
                    </div>
                    
                    <div class="detail-group">
                        <div class="detail-label">Farm Size</div>
                        <div class="detail-value" id="profile-size">Medium (5,000 birds capacity)</div>
                    </div>
                    
                    <div class="detail-group">
                        <div class="detail-label">Member Since</div>
                        <div class="detail-value" id="profile-member-since">January 15, 2025</div>
                    </div>
                </div>
            </div>

            <!-- Flocks Section -->
            <div class="flocks-section">
                <div class="section-header">
                    <h3 class="section-title">My Flocks</h3>
                    <a href="#" class="view-all">View All</a>
                </div>
                
                <div class="flock-card">
                    <h4>Broiler-001</h4>
                    <p><strong>Location:</strong> House A | <strong>Birds:</strong> 500 | <strong>Age:</strong> 25 days</p>
                    <p><strong>Status:</strong> Healthy | <strong>Feed Type:</strong> Starter Mash</p>
                    <div class="quick-actions" style="margin-top: 10px;">
                        <button class="action-button" onclick="switchTab('metrics')">
                            <span>Record Metrics</span>
                        </button>
                        <button class="action-button" onclick="switchTab('health')">
                            <span>Record Health</span>
                        </button>
                    </div>
                </div>
                
                <div class="flock-card">
                    <h4>Layer-003</h4>
                    <p><strong>Location:</strong> House C | <strong>Birds:</strong> 300 | <strong>Age:</strong> 40 days</p>
                    <p><strong>Status:</strong> Healthy | <strong>Feed Type:</strong> Layer Pellets</p>
                    <div class="quick-actions" style="margin-top: 10px;">
                        <button class="action-button" onclick="switchTab('metrics')">
                            <span>Record Metrics</span>
                        </button>
                        <button class="action-button" onclick="switchTab('health')">
                            <span>Record Health</span>
                        </button>
                    </div>
                </div>
                
                <div class="flock-card">
                    <h4>Broiler-002</h4>
                    <p><strong>Location:</strong> House B | <strong>Birds:</strong> 450 | <strong>Age:</strong> 10 days</p>
                    <p><strong>Status:</strong> Healthy | <strong>Feed Type:</strong> Starter Mash</p>
                    <div class="quick-actions" style="margin-top: 10px;">
                        <button class="action-button" onclick="switchTab('metrics')">
                            <span>Record Metrics</span>
                        </button>
                        <button class="action-button" onclick="switchTab('health')">
                            <span>Record Health</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <button class="action-button" onclick="switchTab('flock')">
                <span>Add New Flock</span>
            </button>
            <button class="action-button" onclick="switchTab('metrics')">
                <span>Record Metrics</span>
            </button>
            <button class="action-button" onclick="switchTab('health')">
                <span>Record Health</span>
            </button>
            <button class="action-button" onclick="switchTab('transaction')">
                <span>Record Transaction</span>
            </button>
            <button class="action-button" id="quick-report">
                <span>Generate Report</span>
            </button>
        </div>
    </div>

    <script>
       
    </script>
</body>
</html>
<?php 
} else {
	_innerhtml("Your session expired, Try to log in again!","login.php");
}
?>