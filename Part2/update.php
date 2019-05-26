<?php
// Include config file
require_once "database.php";


// Define variables and initialize with empty values
$title = $text = $image = $content = "";
$title_err = $text_err = $image_err = $content_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    }else{
        $title = $input_title;
    }
    
    // Validate address address
    $input_text = trim($_POST["Text"]);
    if(empty($input_text)){
        $text_err = "Please enter an Text.";     
    } else{
        $text = $input_text;
    }


    

    // Validate salary
    $input_content = trim($_POST["Content"]);
    if(empty($input_content)){
        $content_err = "Please enter the content amount.";     
    }else{
        $content = $input_content;
    }
    


    // Check input errors before inserting in database
    if(empty($title_err) && empty($text_err) && empty($content_err)){
        // Prepare an update statement
        $sql = "UPDATE benefit_keys SET title='$title', text='$text', content='$content' WHERE id='$id'";         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss",$title, $_text, $content, $id);
            // Set parameters
            $param_title = $title;
            $param_text = $text;
            $param_content = $content;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: admin.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
         
        // Close statement
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM benefit_keys WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $title = $row["Title"];
                    $text = $row["Text"];
                    $content = $row["Content"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="POST">
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
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input name= "SubmitButton" type="submit" class="btn btn-primary" value="Submit" method = "post">
                        <a href="admin.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>