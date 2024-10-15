<?php
// if (isset($_FILES['file'])) {
//     $errors = array();
//     $file_name = $_FILES['file']['name'];
//     $file_size = $_FILES['file']['size'];
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     @$file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
//     $extensions = array("pdf", "doc", "docx", "txt");

//     if (in_array($file_ext, $extensions) === false) {
//         $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
//     }

//     if ($file_size > 2097152) {
//         $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
//     }

//     if (empty($errors) == true) {
//         move_uploaded_file($file_tmp, "documents/" . $file_name);
//         echo "File berhasil diunggah.";
//     } else {
//         echo implode(" ", $errors);
//     }
// }

if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        @$file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$key])));

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
        }
    }

    if (empty($errors) == true) {
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
