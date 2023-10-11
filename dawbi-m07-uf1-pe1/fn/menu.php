<?php
/**
 * 
 */
function categories(string $filepath): array {
    $file = fopen(filename: $filepath, mode: 'r');
    while ($categories = fgetcsv(stream: $file)) {
        return $categories;
    }
    fclose($file);
}


/**
 * 
 */
function menu(string $filepath): array {
    $menu = [];
    $stream = fopen($filepath, 'r');
    while ($data = fgetcsv(stream: $stream, separator: ';')) {
        $dish = [
            'id' => $data[0],
            'category' => $data[1],
            'name' => $data[2],
            'price' => $data[3]
        ];
        array_push($menu, $dish);
    }
    fclose($stream);
    return $menu;
}


/**
 * 
 */
function table(array $categories, array $menu): void {
    echo "
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
    ";
    foreach($menu as $dish) {
        if (in_array($dish['category'], $categories)) {
            echo "     
            <tr>
                <td>{$dish['name']}</th>
                <td>{$dish['price']}</th>
            </tr>
            ";
        }
    }
    echo "</table>";
}

