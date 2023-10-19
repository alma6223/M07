<?php
/**
 * get the categories from csv file
 * @param string $filename csv filename
 * @return array category array
 */
function categories(string $filename): array | bool {
    if (file_exists($filename)) {
        $stream = fopen($filename, 'r');
        while ($categories = fgetcsv($stream, separator: ';')) {
            return $categories;
        }
        fclose($stream);
    } else {
        return false;
    }
}


/**
 * get the menu from csv file
 * @param string $filename csv filename
 * @return array menus array
 */
function menu(string $filename): array | bool {
    $menu = array();
    if (file_exists($filename)) {
        $stream = fopen($filename, 'r');
        while ($dish = fgetcsv($stream, separator: ';')) {
            array_push($menu, array('id' => $dish[0], 'category' => $dish[1], 'name' => $dish[2], 'price' => $dish[3]));
        }
        fclose($stream);
        return $menu;
    } else {
        return false;
    }
}


/**
 * shows menus according to their category
 * @param string $category menu category
 * @param array $menu menus array
 */
function table(string $category, array $menu): void {
    echo "
    <table>
        <caption>" . ucwords($category) . "</caption>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
    ";
    foreach($menu as $dish) {
        if ($dish['category'] == $category) {
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