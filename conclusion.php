<?php

    // $_FILES
    
    if ($_FILES['file']['error'] == 4) {
        echo 'Please Select File';
    }else {
        print_r($_FILES);
    }
    if (is_uploaded_file($_FILES['file']['tmp_name '])) {
        
        $file_extensions = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ];

        $file_size = (1024 * 1014 * 3);
        $file_extensions = $_FILES['file']['type'];

        if (in_array($file , $file_extensions)) {
            if
            if (file_size <= $_FILES['file']['size']) {


                $download = move_uploaded_file($_FILES)['file']['tmp_name']
                
                if ($download) {
                    echo '<h3>your file has been uploaded successfully</h3>';
                    echo'<mg src="upload/"' . $_FILES['file']['name'] .'">' >
                }
            }else{
                echo'The file you will upload will be only 3MB.'
            }


        }else {
            echo 'the file can only be in jpeg png gif format';
        }

    }else {
        echo'A Problem Occurred While Uploading The File';
    }


//copy($_FILES['file']['type_name'], 'upload' . $_FILES['file']['name']);/
?>