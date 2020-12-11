<?php

if(isset($_POST['upload'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $attach = $_FILES['attach'];

        //var_dump($attach);

        $filename = $attach["name"];
        $filetype = $attach["type"];
        $filetmpname = $attach["tmp_name"];
        $filesize = $attach["size"];

        // echo "File name is= " . $filename . "<br/>";
        // echo "File type is= " . $filetype . "<br/>";
        // echo "File tmp name is= " . $filetmpname . "<br/>";
        // echo "File size is= " . $filesize . "<br/>";

        //Move to fileserver (tmp_name, destination/ filename)
        //Limit File Size
        $limit=1;
        $filesizeinmb=$filesize/1000000;

        if($filesizeinmb > $limit){
            echo "Wow your is too big. It's {$filesizeinmb}MB. Can't Upload, We allow {$limit}MB only.";
        }else{
            move_uploaded_file($filetmpname,'fileserver/'. $filename);
            echo "Success Uploaded!";
        }
        

    }
}

?>

<!DOCTYPE html>
<html>
<head><title>Attach Form Single</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<label for="attach">Attach</label>
<input type="file" name="attach" id="attach" class=""><br/><br/>
<input type="submit" name="upload" id="upload" class="" value="Upload">
</form>
</body>
</html>