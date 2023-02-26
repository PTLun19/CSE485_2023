<?php
    $path = $_POST['path'];
    // Kiểm tra xem file đã được gửi lên thành công hay chưa
    if ($_FILES['img']['error'] == UPLOAD_ERR_OK) {
        // Lấy tên file gốc
        $filename = basename($_FILES['img']['name']);
        // Tạo đường dẫn mới cho file
        // $destination = '../images/' .$path . $filename;
        $destination = $path . $filename;
        // Di chuyển file từ vị trí tạm thời đến địa chỉ đích
        if (move_uploaded_file($_FILES['img']['tmp_name'], $destination)) {
            // File đã được lưu thành công
            echo 'File uploaded successfully';
        } else {
            // Lỗi khi lưu file
            echo 'There was an error uploading the file.';
        }
    } else {
        // File chưa được gửi lên
        echo 'No file was uploaded.';
    }
?>