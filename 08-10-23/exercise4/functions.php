<?php
function add_file(string $name, string $tmp_name): string {
    if (!file_exists('files/' . $name)) {
        move_uploaded_file($tmp_name, 'files/' . $name);
        return 'File uploaded successfully';
    }
    return 'Error uploading file';
}

