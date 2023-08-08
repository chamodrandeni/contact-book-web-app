</head>
<body>
    <header>
        <div id="welcome">
            <span id="uname">Hi, <?php echo $_SESSION['name'];?></span>
            <a href="logout.php"><img src="icons/logout.svg" alt="LOGOUT" id="logout"></a>
        </div>
<?php
    $page_name = array("","","Home","Add Contact","Edit Contact","All Contacts","View Contact","Setting");
?>
        <h1>Contact Book <span id="pgname">- <?php echo $page_name[$page_id]; ?></span></h1>
    </header>
    <nav id="menu">
        <a href="index.php" class="menu">
            <img src="icons/home-yellow.svg" alt="Home" class="menuimg">
            <span class="menutext">Home</span>
        </a>
        <a href="add.php" class="menu">
            <img src="icons/add-yellow.svg" alt="Home" class="menuimg" >
            <span class="menutext" <?php if($page_id==3) echo'id="active"';?>>Add New</span>
        </a>
        <a href="all.php" class="menu">
            <img src="icons/search-yellow.svg" alt="Home" class="menuimg">
            <span class="menutext" <?php if($page_id==5) echo'id="active"';?>>Show All</span>
        </a>
        <a href="settings.php" class="menu">
            <img src="icons/settings-yellow.svg" alt="Home" class="menuimg">
            <span class="menutext" <?php if($page_id==7) echo'id="active"';?>>Settings</span>
        </a>
        <a href="logout.php" class="menu">
            <img src="icons/logout-yellow.svg" alt="Home" class="menuimg">
            <span class="menutext">Logout</span>
        </a>
    </nav>
    <main>