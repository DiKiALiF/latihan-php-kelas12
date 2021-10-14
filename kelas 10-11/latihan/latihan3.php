<?php

$saya = date ("D");

switch ($saya) {
    case "Mon";
    echo "Hari ini hari Senin";
break;
        case "Tue";
        echo "Hari ini hari Selasa";
    break;
            case "Wed";
            echo "Hari ini hari Rabu";
        break;
                case "Thu";
                echo "Hari ini hari Kamis";
            break;
                    case "Fri";
                    echo "Hari ini hari Jumat";
                break;
                        case "Sat";
                        echo "Hari ini hari Sabtu";
                    break;
                            case "Sun";
                            echo "Hari ini hari Minggu";
break;
default:
echo "Hari tidak sesuai";
}
?>