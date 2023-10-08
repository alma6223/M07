<?php
/**
 * Adds a file to the 'files' directory.
 *
 * @param string $name - The desired name for the file.
 * @param string $tmp_name - The temporary name of the file as uploaded.
 * @return string - A message indicating the success or failure of the file upload.
 */
function add_file(string $name, string $tmp_name): string {
    if (!file_exists('files/' . $name)) {
        move_uploaded_file($tmp_name, 'files/' . $name);
        return 'File uploaded successfully';
    }
    return 'Error uploading file';
}

