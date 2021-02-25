<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BussinesLogic/RemoveTodoList.php";
function viewRemoveTodoList()
{

    echo "Delete TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == 'x') {
        // batal
        echo "batal menghapus Todo" . PHP_EOL;
    } else {
        $sukses = RemoveTodoList($pilihan);

        if ($sukses) {
            echo "todo berhasil dihapus" . PHP_EOL;
        } else {
            echo "todo gagal dihapus" . PHP_EOL;
        }
    }
}