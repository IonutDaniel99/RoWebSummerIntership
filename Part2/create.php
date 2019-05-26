<?php
// Include config file
require_once "database.php";
 
// Define variables and initialize with empty values
$title = $text = $image = $content = "";
$title_err = $text_err = $image_err = $content_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    }else{
        $title = $input_title;
    }
    
    // Validate address
    $input_text = trim($_POST["Text"]);
    if(empty($input_text)){
        $text_err = "Please enter an Text.";     
    } else{
        $text = $input_text;
    }
    //Validate Image

    $random = rand(1,3);
    switch($random){
        case 1:
            $image = "images/credit-locked.svg";
            break;
        case 2:
            $image = "images/goal-54.svg";
            break;
        case 3:
            $image = "images/chart-bar-33.svg";
            break;
    }




    // Validate salary
    $input_content = trim($_POST["Content"]);
    if(empty($input_content)){
        $content_err = "Please enter the salary amount.";     
    }else{
        $content = $input_content;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($text_err) && empty($content_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO benefit_keys (title, text, image, content) VALUES ('$title', '$text','$image','$content');";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_title, $param_text, $param_content);
            
            // Set parameters
            $param_title = $title;
            $param_text = $text;
            $param_content = $content;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: admin.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($text_err)) ? 'has-error' : ''; ?>">
                            <label>Text</label>
                            <textarea name="Text" class="form-control"><?php echo $text; ?></textarea>
                            <span class="help-block"><?php echo $text_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($content_err)) ? 'has-error' : ''; ?>">
                            <label>Content</label>
                            <input type="text" name="Content" class="form-control" value="<?php echo $content; ?>">
                            <span class="help-block"><?php echo $content_err;?></span>
                        </div>
                        <input name= "SubmitButton" type="submit" class="btn btn-primary" value="Submit">
                        <a href="admin.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>