 <?php 
    $page_id = 1;
    include "inc_header.php";
    ?>
    <title>Contact Book</title>
    <style>

        /* Home page styles */
        .box{
            background: #fff;
            height: 100px;
            width: 100px;
            text-align: center;
            color: #000;
            display: block;
            border: 5px solid #F38918;
            padding: 20px;
            text-decoration: none;
            border-radius: 100px;
            margin: 50px 20px 0;
        }
        .box:hover{
            background: #F27609;
        }
        .item{
            display: block;
            text-transform: uppercase;
            padding-top: 10px;
            font-weight: bold;
        }
        .imgs{
            width: 50px;
        }
        main{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
 </head>
 <body>
    <header>
        <div id="welcome">
            <span id="uname">Hi, <?php echo $_SESSION['name'];?></span>
            <a href="login.php"><img src="icons/logout.svg" alt="LOGOUT" id="logout"></a>
        </div>
        <h1>Contact Book <span id="pgname">- Home</span></h1>
    </header>
    <main>
        <a href="all.php" class="box">
            <img src="icons/search.svg" alt="Show" class="imgs">
            <span class="item">Show All</span>
        </a>
        <a href="add.php" class="box">
            <img src="icons/add.svg" alt="Add" class="imgs">
            <span class="item">Add New</span>
        </a>
        <a href="settings.php" class="box">
            <img src="icons/settings.svg" alt="Settings" class="imgs">
            <span class="item">Settings</span>
        </a>
        <a href="logout.php" class="box">
            <img src="icons/logout.svg" alt="Logout" class="imgs">
            <span class="item">Logout</span>
        </a>
<?php include "inc_footer.php";?>