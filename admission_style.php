<style>
        /* Reset default margin and padding */
        html, body, * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header Styles */
        .header {
            background-color: #3498db; /* Use a shade of blue */
            color: #fff;
            height: 70px;
            line-height: 70px;
            padding: 0 30px; /* Add padding to left and right */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensure header is on top of other content */
        }

        /* Logout link Styles */
        .logout {
            float: right;
            margin-right: 30px; /* Add margin to separate from right edge */
            color: #fff; /* Text color */
            text-decoration: none;
            transition: color 0.3s; /* Smooth color transition on hover */
        }

        .logout:hover {
            color: #f39c12; /* Change color on hover */
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #2c3e50; /* Dark background */
            color: #fff;
            width: 16%; /* Width of the sidebar */
            height: 100%;
            position: fixed;
            top: 70px; /* Match height of header */
            left: 0;
            padding-top: 70px; /* Match height of header */
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            padding: 20px 0; /* Add padding top and bottom */
            font-size: 18px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s; /* Smooth color transition on hover */
        }

        .sidebar a:hover {
            color: #3498db; /* Change color on hover */
        }

        /* Main Content Styles */
        .content {
            margin-left: 16%; /* Match width of sidebar */
            margin-top: 70px; /* Match height of header */
            padding: 20px; /* Add padding inside content */
            background-color: #ecf0f1; /* Light background */
            min-height: calc(100vh - 70px); /* Ensure content takes up remaining viewport height */
        }
    </style>