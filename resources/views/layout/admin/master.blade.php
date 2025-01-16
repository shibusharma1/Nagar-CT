<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nagar-CT | Admin</title>
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/images/home/logo1.png') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    /* General reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Sidebar menu styling */
    .menu-bar {
        /* background-color: #333; */
        background: linear-gradient(90deg, #007B55, #00C853);
        /* Gradient green for eco-friendly theme */

        width: 20%;
        height: 100vh;
        position: fixed;
        border-right: 1px solid linear-gradient(90deg, #007B55, #00C853);
        /* Gradient green for eco-friendly theme */

    }

    .menu-bar .logo-img {
        background: #ffffff;
        height: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .menu-bar .logo-img img {
        height: 6rem;
    }

    .menu-items {
        margin-top: 1rem;
    }

    .item {
        padding: 1rem;
        display: flex;
        align-items: center;
        color: #ffffff;
        font-size: 1.2rem;
        border-bottom: 1px solid white;
        cursor: pointer;
        position: relative;
    }

    .item:hover {
        background: #ffffff;
        color: #333;
        font-size: 1.3rem;
    }

    /* Sub-menu styling */
    .sub-items {
        display: none;
        flex-direction: column;
        background-color: #444;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        z-index: 10;

    }

    .sub-items .sub-item {
        padding: 0.8rem;
        color: #ffffff;
        font-size: 1rem;
        border-bottom: 1px solid #555;
    }

    .sub-items .sub-item:hover {
        /* background: #ffffff; */
        background: linear-gradient(90deg, #007B55, #00C853);
        /* Gradient green for eco-friendly theme */
        color: #333;
        /* display: block; */
    }

    /* Show sub-items on hover */
    .item:hover .sub-items {
        display: flex;
    }

    /* Main content styling */
    .contents-side {
        margin-left: 20%;
        width: 80%;
        display: flex;
        flex-direction: column;
    }

    /* Header styling */
    .header-content {
        background: linear-gradient(90deg, #007B55, #00C853);
        /* Gradient green for eco-friendly theme */
        /* background: linear-gradient(90deg, #1A237E, #3F51B5); */
        /* Adjusted for professional look */
        color: #ffffff;
        text-align: center;
        padding: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        width: 80%;
        left: 20%;
        top: 0;
        z-index: 100;
        height: 4rem;
    }

    .header-content span {
        font-size: 2rem;
        font-weight: bold;
    }

    .notification-account-info {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .notification {
        position: relative;
        font-size: 1.5rem;
        cursor: pointer;
    }

    /* Notification dropdown */
    .notification .dropdown {
        display: none;
        position: absolute;
        top: 2rem;
        right: 0;
        background: #ffffff;
        color: #333;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        width: 15rem;
        z-index: 20;
        padding: 0.5rem;
    }

    .notification:hover .dropdown {
        display: block;
    }

    .dropdown .notif-item {
        padding: 0.5rem;
        border-bottom: 1px solid #ddd;
        font-size: 0.9rem;
    }

    .dropdown .notif-item:last-child {
        border-bottom: none;
    }

    .account-info {
        font-size: 1.8rem;
        cursor: pointer;
        position: relative;
    }

    /* User dropdown menu */
    .account-info .user-menu {
        display: none;
        position: absolute;
        top: 2rem;
        right: 0;
        background: #ffffff;
        color: #333;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        width: 12rem;
        z-index: 20;
        padding: 0.5rem;
    }

    .account-info:hover .user-menu {
        display: block;
    }

    .user-menu .user-header {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .user-menu .user-header img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .user-menu .menu-item {
        padding: 0.5rem;
        font-size: 0.9rem;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }

    .user-menu .menu-item:hover {
        background: #f0f0f0;
    }

    .user-menu .menu-item:last-child {
        border-bottom: none;
    }

    /* Main content styling */
    .main-content {
        margin: 6rem 1rem 1rem 1rem;
        padding: 1rem;
        height: calc(100vh - 10rem);
        overflow-y: auto;
        font-size: 1rem;
    }

    /* Footer styling */
    .footer-content {
        /* background: rgba(10, 222, 84, 0.826); */
        background: linear-gradient(90deg, #007B55, #00C853);
        /* Gradient green for eco-friendly theme */
        color: white;
        font-size: 1rem;
        text-align: center;
        padding: 1rem;
    }

    /* Responsive adjustments */
    @media screen and (max-width: 768px) {
        .menu-bar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .contents-side {
            margin-left: 0;
            width: 100%;
        }

        .header-content {
            width: 100%;
            left: 0;
        }
    }
</style>

<body>
    <!-- Sidebar Menu -->
    <div class="menu-bar">
        <div class="logo-img">
            <img src="{{ asset('assets/images/home/logo1.png') }}" alt="Nagar-CT">
        </div>
        <div class="menu-items">
            <div class="item active">
                <i class="fa fa-home" aria-hidden="true"></i> &nbsp; Dashboard
            </div>
            <div class="item">
                <i class="fa fa-user" aria-hidden="true"></i> &nbsp; Admin
                <div class="sub-items">
                    <div class="sub-item">Add Admin</div>
                    <div class="sub-item">Manage Admin</div>
                </div>
            </div>
            <div class="item">
                <i class="fa fa-id-card-o" aria-hidden="true"></i> &nbsp; Drivers
                <div class="sub-items">
                    <div class="sub-item">Add Admin</div>
                    <div class="sub-item">Manage Admin</div>
                </div>
            </div>
            <div class="item">
                <i class="fa fa-users" aria-hidden="true"></i> &nbsp; Users
                <div class="sub-items">
                    <div class="sub-item">Add Admin</div>
                    <div class="sub-item">Manage Admin</div>
                </div>
            </div>
            <div class="item">
                <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Cities
                <div class="sub-items">
                    <div class="sub-item">Add Admin</div>
                    <div class="sub-item">Manage Admin</div>
                </div>
            </div>
            <div class="item">
                <i class="fa fa-money" aria-hidden="true"></i> &nbsp; Fairs
                <div class="sub-items">
                    <div class="sub-item">Add Admin</div>
                    <div class="sub-item">Manage Admin</div>
                </div>
            </div>
            <div class="item">
                <i class="fa fa-commenting-o" aria-hidden="true"></i> &nbsp; Feedback
                <div class="sub-items">
                    <div class="sub-item">Add Admin</div>
                    <div class="sub-item">Manage Admin</div>
                </div>
            </div>
            <div class="item">
                <i class="fa fa-cog" aria-hidden="true"></i> &nbsp; Setting
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="contents-side" style="height: 100vh;">
        <!-- Header Section -->
        <div class="header-content">
            <span>Nagar-CT</span>
            <div class="notification-account-info">
                <!-- Bell Icon with Notification Badge -->
                <div class="notification">
                    <i class="fa fa-bell" aria-hidden="true"></i>

                    <sup class="badge" style="
                    margin-left: -15px;
                    color: white;
                    border: 2px solid white;
                    background:red;
                    border-radius: 50%;
                    padding: 1px;
                    font-size:0.95rem;
                    font-weight:1000;
                    z-index:100;
                ">3</sup>
                    <div class="dropdown">
                        <div class="notif-item">Notification 1</div>
                        <div class="notif-item">Notification 2</div>
                        <div class="notif-item">Notification 3</div>
                    </div>
                </div>
                <!-- User Profile Icon -->
                <div class="account-info">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>

                    <div class="user-menu">
                        <div class="user-header">
                            <img src="{{ asset('assets/images/home/logo1.png') }}" alt="Nagar-CT">
                            <span>John Doe</span>
                        </div>
                        <div class="menu-item">Edit Profile</div>
                        <div class="menu-item">Change Password</div>
                        <div class="menu-item">Logout</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Content goes here -->

            @include('../frontend/forms/login_page')
        </div>

        <!-- Footer Section -->
        <div class="footer-content">
            <div>2024 &copy; Copyright <strong>Nagar-CT</strong></div>
            <div>Designed and Developed by <strong>Himalaya Darshan College</strong></div>
        </div>
    </div>
</body>

</html>