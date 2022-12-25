<head>
    <title>Dashboard</title>
    <style>
        body{
            background-color: 969FF1;
            margin: 10px;
        }
        .navbar{
            background-color: 1A08EF;
            color: white;
            margin: 20px;
        }
        .button {
    background-color: #04AA6D; /* Green */
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50%;
    margin-left: 20px;
    margin-right: 20px;
}
    .profile{
        background-color: 17249B;
        margin: 20px;
        padding: 20px;
        color:white;
        display: flex;
        position: relative;
        margin-left: 10px;
        margin-right: 20px;
        box-shadow: 4px 4px #B5B6BD;
        float: auto;
        text-align: center;
    }
    .status{
        margin: 20px;
        color: white;
    }
    .goal{
        border-radius: 20px;
        background-color: #09E3C6;
        margin: 20px;
        padding: 10px;
        box-shadow: 4px  4px #B5B6BD;
        padding: 10px;
    }
    .heart_data{
        background-color: slateblue;
        margin: 20px;
        color: white;
    }
    .heart{
        padding: 20px;
    }
    </style>
</head>
<body>
    <div class="navbar">
        <h3>TM-Heart</h3>
        <img src="img/appimage@1x.png" alt="vfds" float="right">
    </div>
    <div class="status">
        <h3>My Status</h3>
        <div class="profile">
            <h4 class="button">Age</h4>
            <h4 class="button">Height</h4>
            <h4 class="button">Weight</h4>
        </div>
    </div>
    <div class="goal">
        <h3 align="center">Pick A Goal</h3>
    </div>
    <div class="heart_data">
        <h3>My Heart</h3>
        <div class="heart">
            <h4 class="button">My Heart</h4>
            <h4 class="button">Lows</h4>
            <h4 class="button">High</h4>
            <h4 class="button">Max Rate</h4>
        </div>
    </div>
</body>