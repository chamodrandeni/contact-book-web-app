<?php 
    $page_id = 3;
    include "inc_header.php";
    $msg="";

    if(isset($_POST['sent'])){

        // username validation
        $_POST['uname'] = htmlspecialchars(trim($_POST['uname']), ENT_QUOTES,'UTF-8');
        if(empty($_POST['uname'])) $msg.="Your Name cannot be empty<br>";

        // email validation
        if(!empty($_POST['email'])){
            $_POST['email'] = trim($_POST['email']);
            if(empty($_POST['email'])) $msg.="Email cannot be empty<br>";
            elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $msg.="Email address is not valid<br>";
        }

        //mobile numbers
        if(empty($_POST['mob1']) && empty($_POST['mob2']) && empty($_POST['land'])) $msg.= "YBoth mobile numbers and Land number cannot be empty<br>";

        if(empty($msg)){
            try{
                //connect to db
                include "db_connection.php";

                $ok = $db->prepare("INSERT INTO `contacts` (`name`,`nick`,`email`,`mobile1`,`mobile2`,`landline`,`address`,`type`,`gender`,`note`) VALUES (?,?,?,?,?,?,?,?,?,?)")->execute(array($_POST['uname'],$_POST['nick'],$_POST['email'],$_POST['mob1'],$_POST['mob2'],$_POST['land'],$_POST['address'],$_POST['type'],$_POST['gender'],$_POST['note']));
                if($ok) $okmsg = "Record is added successfully";
            }catch(PDOException $e){
                $msg.=$e->getMessage();
            }
        }
    }
?>
    <title>Add New Contacts</title>
    <style>
        form{
            width: 500px;
        }
        .in1{
            background: #cac6c6;
            border: 1px solid #ccc;
            padding: 5px 1%;
            font-size: 1.1em;
            font-family: 'Open Sans', sans-serif;
            width: 65%;
        }
        .in2{
            width: 49%;
            float: left;
            background: #f3b918;
            padding: 10px 0;
            margin: 0 .5%;
            border: none;
            font-size: 1.1em;
            font-family: 'Open Sans', sans-serif;
            color: #000;
            box-shadow: 0 0 3px #000;
        }
        .in2:hover{
            background: #f27609;
        }
        .row{
            width: 100%;
            float: left;
            margin-bottom: 5px;
        }
        .item{
            width: 30%;
            float: left;
            font-size: 1.1em;
        }
        .gender{
            background: #cac6c6;
            width: 31.5%;
            padding: 5px .5%;
            float: left;
            margin: 0 .5%;
            border: 1px solid #ccc;
        }
        select{
            background: #cac6c6;
            width: 67.2%;
            padding: 5px 0;
            font-size: 1em;
            font-family: 'Open Sans', sans-serif;
        }
        #msg, #okmsg{
            display: none;
            padding: 5px 0;
            margin: 5px;
            min-height: 30px;
            width: 100%;
            text-align: center;
        }
        .err{
            background: #d11919;
            color: #fff;
        }
        #okmsg{
            background: #229205;
            color: #fff;
        }
        <?php if(!empty($msg)) echo '#msg{display: block;}'; ?>
        <?php if(isset($okmsg)) echo '#okmsg{display: block;}'; ?>

        /* Media Query */

        @media screen and (max-width:800px){
            form{
                width: 100%;
            }
        }
        @media screen and (max-width:440px){
            .in1{
                width: 98%;
            }
            .item{
                width: 100%;
            }
            .gender{
                width: 100%;
                margin: 5px 0;
            }
            select{
                width: 100%;
            }
            .row{
                margin-bottom: 20px;
            }
        }
    </style>
    <?php include "inc_menus.php"; ?>
        <div id="msg" class="err"><?php if(!empty($msg)) echo $msg; ?></div>
        <div id="okmsg"><?php if(isset($okmsg)) echo $okmsg; ?></div>
        <form onsubmit="return validate()" name="form1" method="post">
            <label class="row">
                <span class="item">Name</span>
                <input type="text" class="in1" maxlength="30" required name="uname">
            </label>
            <label class="row">
                <span class="item">Nickname</span>
                <input type="text" class="in1" maxlength="12" name="nick">
            </label>
            <label class="row">
                <span class="item">Email</span>
                <input type="email" class="in1" maxlength="100" required name="email">
            </label>
            <label class="row">
                <span class="item">Mobile No 1</span>
                <input type="text" class="in1" maxlength="12" required name="mob1">
            </label>
            <label class="row">
                <span class="item">Mobile No 2</span>
                <input type="text" class="in1" maxlength="12" name="mob2">
            </label>
            <label class="row">
                <span class="item">Land No</span>
                <input type="text" class="in1" maxlength="12" name="land">
            </label>
            <label class="row">
                <span class="item">Address</span>
                <textarea maxlength="160" class="in1" name="address"></textarea>
            </label>
            <label class="row">
                <span class="item">Contact type</span>
                <select name="type">
                    <option value="1">Friend</option>
                    <option value="2">Relation</option>
                    <option value="3">Co-Worker</option>
                    <option value="0">Other</option>
                </select>
            </label>
            <div class="row">
                <span class="item">Gender</span>
                <label class="gender">Male<input type="radio" name="gender" value="1"></label>
                <label class="gender">Female<input type="radio" name="gender" value="2"></label>
            </div>
            <label class="row">
                <span class="item">Note</span>
                <textarea maxlength="160" class="in1" name="note"></textarea>
            </label>
            <div class="row">
                <input type="submit" value="Add Contact" class="in2" name="sent">
                <input type="reset" value="Reset Form" class="in2">
            </div>
        </form>
    <script src="validate.js"></script>
<?php include "inc_footer.php";?>