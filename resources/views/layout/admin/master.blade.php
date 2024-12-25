<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nagar-CT | Admin</title>
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/images/home/logo1.png') }}" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .menu-bar {
        margin: 0;
        padding: 0;
        background-color: #333;
        width: 20%;
        height: 100vh;
        position: fixed;
    }

    .menu-bar .logo-img {
        background: #ffffff;
        box-sizing: border-box;
        height: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        


    }

    .menu-bar .logo-img img {
        height: 8rem;

    }

    .contents-side {
        margin: 0px;
        width: 80%;
        float: right;
        font-size: 50px;
        font-weight: 700;
        color: black;
        overflow: hidden;

    }

    .content-header {
        margin: auto;
        padding: auto;
        position: fixed;
        background: linear-gradient(90deg, #007B55, #00C853);
        /* Gradient green for eco-friendly theme */
        text-align: center;
        color: #ffffff;
        z-index: 100;
        width: 100%;
        height: 4rem;
    }
    .item{
        padding: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size:1.3rem;
        border-bottom: 1px solid white;
    }
    .item:hover{
        padding: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        /* background: linear-gradient(90deg, #007B55, #00C853); */
        background: #ffffff;
        font-size:1.4rem;
        border-right: 1px solid #333;
    }
    .footer-content{
        display: flex;
        align-items:flex-end;
        justify-content:center;
        flex-direction: column;

    }
</style>

<body>
    <div class="menu-bar">
        <div class="logo-img">
            <img src="{{asset('assets/images/home/logo1.png')}}" alt="Nagar-CT">
        </div>
        <div class="menu-items">
            <div class="item">
                <i class="fa fa-home" aria-hidden="true"></i> &nbsp;&nbsp;Dashboard
            </div>
            <div class="item">
                <i class="fa fa-user" aria-hidden="true"></i> &nbsp;&nbsp;Admin
            </div>
            <div class="item">
                <i class="fa fa-id-card-o" aria-hidden="true"></i> &nbsp;&nbsp;Drivers
            </div>
            <div class="item">
                <i class="fa fa-users" aria-hidden="true"></i> &nbsp;&nbsp;Users
            </div>
            <div class="item">
                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; Cities
            </div>
            <div class="item">
                <i class="fa fa-money" aria-hidden="true"></i> &nbsp;&nbsp;Fairs
            </div>
            <div class="item">
                <i class="fa fa-commenting-o" aria-hidden="true"></i> &nbsp;&nbsp;Feedback
            </div>
        </div>
        <div class="item">
            <i class="fa fa-cog" aria-hidden="true"></i> &nbsp;&nbsp;Setting
        </div>

    </div>
    <div class="contents-side">
        <div class="content-header">
            Nagar-CT
        </div>
        <section class="content">
            lorem500
        </section>
        <div class="footer-content">
            <div>
            2024 &copy; Copyright <strong>Nagar-CT</strong> <br />
            </div>
            <div>
            Designed and Developed by <strong>Himalaya Darshan College</strong>

            </div>
        </div>

    </div>
</body>

</html>