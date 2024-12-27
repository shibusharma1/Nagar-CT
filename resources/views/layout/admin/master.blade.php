<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nagar-CT | Admin</title>
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/images/home/logo1.png') }}" />
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
        background-color: #333;
        width: 20%;
        height: 100vh;
        position: fixed;
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
        background: #ffffff;
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

    /* Notification count badge */
    .notification .badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: red;
        color: white;
        font-size: 0.7rem;
        font-weight: bold;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .account-info {
        font-size: 1.8rem;
        cursor: pointer;
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
        background: rgba(10, 222, 84, 0.826);
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
            <div class="item">
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
    <div class="contents-side">
        <!-- Header Section -->
        <div class="header-content">
            <span>Nagar-CT</span>
            <div class="notification-account-info">
                <!-- Bell Icon with Notification Badge -->
                <div class="notification">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="badge">3</span>
                </div>
                <!-- User Profile Icon -->
                <div class="account-info">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Content goes here -->
        </div>

        <!-- Footer Section -->
        <div class="footer-content">
            <div>2024 &copy; Copyright <strong>Nagar-CT</strong></div>
            <div>Designed and Developed by <strong>Himalaya Darshan College</strong></div>
        </div>
    </div>
</body>

</html>
