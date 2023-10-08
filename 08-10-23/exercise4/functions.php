<?php 
function add_file(string $file, string $name, string $tmp_name): bool {
    if (!file_exists($name)) {
        return move_uploaded_file($tmp_name, $file);
    }
    return false;
}

