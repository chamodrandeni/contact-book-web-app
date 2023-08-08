<?php
    $page_id = 6;
    include "inc_header.php";
    $msg="";
     

    ?>
    <title>View Contact</title>
    <style>
        #wrap{
            width: 500px;
        }
        .row{
            width: 100%;
            font-size: 1.1em;
            padding: 5px;
            float: left;
        }
        .item1{
            width: 30%;
            background: #eee;
        }
        .item2{
            width: 70%;
            background: #ccc;
        }
        .item1, .item2{
            float: left;
            padding: 5px 0;
            text-indent: 10px;
        }
        .button{
            width: 48%;
            margin: 10px 1% 0;
            float: left;
            padding: 10px 0;
            background: #f3b918;
            color: #000;
            border: 0;
            box-shadow: 0 0 3px #000;
            font-size: 1.1em;
            text-align: center;
            text-decoration: none;
            font-family: 'Open Sans', sans-serif;
        }
        .button:hover{
            background: #F27609;
        }
        #msg{
            display: none;
            padding: 5px 10px;
            margin: 10px;
            min-height: 30px;
            text-align: center;
            background: #d11919;
            color: #fff;
        }

        /* Media Query */

        @media screen and (max-width:800px){
            #wrap{
                width: 100%;
            }
        }
        @media screen and (max-width:450px){
            .item1{
                width: 100%;
            }
            .item2{
                width: 100%;
                border-bottom: 1px solid #666;
                margin-bottom: 15px;
            }
        }
    </style>
    <?php include "inc_menus.php"; ?>
        <div id="wrap">
            <?php
                try{
                    if(isset($_GET['id'])){
            
                    //connect to db
                    include "db_connection.php";
            
                    //get contact details
                    $query = $db->prepare("SELECT * FROM `contacts` WHERE `id`=?");
                    $query->execute(array($_GET['id']));
            
                    if($query->rowCount()>0){
                        if($result=$query->fetch()){

                        $type = array("Other","Friend","Relation","Co-Worker","Other");
                        $gender = array("","Male","Female");
                        
    ?>
            <div class="row">
                <h2><?php echo $result['name']; ?></h2>
            </div>
            <div class="row">
                <span class="item1">Nick</span>
                <span class="item2"><?php echo $result['nick']; ?></span>
            </div>

            <div class="row">
                <span class="item1">Email</span>
                <span class="item2"><?php echo $result['email']; ?></span>
            </div>

            <div class="row">
                <span class="item1">Mobile No1</span>
                <span class="item2"><?php echo $result['mobile1']; ?></span>
            </div>

            <div class="row">
                <span class="item1">Mobile No2</span>
                <span class="item2"><?php echo $result['mobile2']; ?></span>
            </div>
            <div class="row">
                <span class="item1">Land No</span>
                <span class="item2"><?php echo $result['landline']; ?></span>
            </div>
            <div class="row">
                <span class="item1">Address</span>
                <span class="item2"><?php echo $result['address']; ?></span>
            </div>
            <div class="row">
                <span class="item1">Contact Type</span>
                <span class="item2"><?php echo $type[$result['type']]; ?></span>
            </div>
            <div class="row">
                <span class="item1">Gender</span>
                <span class="item2"><?php echo $gender[$result['gender']]; ?></span>
            </div>
            <div class="row">
                <span class="item1">Note</span>
                <span class="item2"><?php echo $result['note']; ?></span>
            </div>
            <div class="row">
                <a href="edit.php?id=<?php echo $_GET['id']; ?>" class="button">Edit</a>
                <a href="all.php?id=<?php echo $_GET['id']; ?>&delete=yes" class="button">Delete</a>
            </div>
    <?php
                        }
                    }else $msg = "Given user id is invalid";
            
                    }else $msg ="URL is Invalid. User id is required in URL";
                }catch(PDOException $e){
                    $msg.=$e->getMessage();
                }
    ?>
        <?php echo !empty($msg) ? '<div id="msg">'.$msg.'</div>' : '' ;?>
        </div>
    <?php include "inc_footer.php";
