<?php

if(isset($_POST['upload'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $file = $_FILES['attach'];

        $filename = $file["name"];
        $filetype = $file["type"];
        $filetmpname = $file["tmp_name"];
        $filesize = $file["size"];

        //var_dump($file);
        // echo "<br/>";
        //echo $file["name"][0];

        $limitsize = 1;
        
        $totalfilesize = array_sum($filesize);
        // echo $totalfilesize;

        $listen=count($filename);
        // echo $listen;

        function bytetomb($size){
            $cal = $size/1000000;
            return $cal;
        }

        



        foreach($filetmpname as $key=>$value){

            if(bytetomb($totalfilesize) < $limitsize){
                move_uploaded_file($filetmpname[$key],'fileserver/'.$filename[$key]);
                echo ($listen > 1 ? "$listen files are " : "$listen file is ") . "successful uploaded";

            }else{
                echo "Wow your files are too big. They are about ". bytetomb($totalfilesize) . "Mb. Can't upload. We allowed {$limitsize}Mb only";

            }
            

        }




    }
}

echo "<hr/>";
?>


<!DOCTYPE html>
<html>
<head><title>Attach Form Multi</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<label for="attach">Files</label><br/><br/>
<input type="file" name="attach[]" id="attach" class="" multiple><br/><br/>
<button type="submit" name="upload" id="upload" class="">Upload</button>



</form>
</body>
</html>
