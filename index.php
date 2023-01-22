<?php @(include"logic.php") or die("PHP File is Not Found")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- style="border: 2px solid red;" -->
    <center>
    <div>
        <h2>Class Registration</h2>
        <p style="color: red;">* Required field</p>
        <hr>
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <!-- <b style="color: red;font-size:large"></b> -->
            Name:
            <span class="error">*<?php echo $nameErr;?></span>
            <input type="text" name ="username" placeholder="e.g , john joue" value="<?php echo $username;?>">
            
            <!-- <b style="color: red;font-size:large">*</b> -->
            
            <!-- <br> -->
            E-mail:
            <span class="error">*<?php echo $emailErr;?></span>
            <input type="text" name ="email" placeholder="e.g , email@domain.com" value="<?php echo $email;?>">
            <!-- <br> -->
            Group#
            <input type="text" name ="group" value="<?php echo $group;?>">
            <!-- <br> -->
            Class details:
            <textarea name ="message" ><?php echo $message;?></textarea>
            <b style="color: red;font-size:large">*</b>
            Gender:
            <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> >male
            <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> >female
            <span class="error">*<?php echo $genderErr;?></span>
            <br><br>
            Select Courses:
            <span class="error">*<?php echo $selectErr;?></span>
            <select name="courses[]" multiple >
                <option value="php" translate="yes">PHP</option>
                <option value="javaScript">Java Script</option>
                <option value="mysql">MySQL</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="nodejs">NodeJS</option>
            </select>
            <!-- <br> -->
            
            <!-- <br> -->
            <!-- Agree:<input type="checkbox" name="" id=""> -->
            <br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </div>  
    </center>  
</body>
</html>