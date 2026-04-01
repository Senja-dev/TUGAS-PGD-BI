
<?php 
$belajar = "belajar";             
$latihan = "tidak mengerjakan";        
$fokus   = "fokus";                
$ujian   = "mendekati ujian";    
$latihan_2 = "mengerjakan"; 

// 1 kondisi positif
if ($belajar == "belajar") {
    echo "kamu akan mendapatkan nilai bagus.<br><br>";
}

// 1 kondisi negatif
if ($latihan != "mengerjakan") {
    echo "kamu akan mendapat teguran dari guru.<br><br>";
}

// 2 kondisi (gullit)
if ($belajar == "belajar" && $latihan_2 == "mengerjakan") {
    echo "kamu akan mendapatkan nilai yang baik.<br><br>";
} else {
    echo "kamu akan mendapatkan nilai yang buruk.<br><br>";
}

// Lebih dari 2 kondisi (5–7 kondisi)
if ($belajar == "belajar" && $latihan_2 == "tidak mengerjakan") {
    echo "kamu kurang memahami soal.<br><br>";
} elseif ($belajar == "tidak belajar" && $latihan_2 == "tidak mengerjakan") {
    echo "kamu akan mendapatkan hasil yang tidak maksimal.<br><br>";
} elseif ($belajar == "belajar" && $latihan_2 == "tidak mengerjakan") {
    echo "kamu akan mendapatkan nilai yang rendah.<br><br>";
} elseif ($belajar == "belajar" && $fokus == "fokus") {
    echo "hasil yang didapat akan lebih maksimal.<br><br>";
} elseif ($ujian == "mendekati ujian") {
    echo "kamu akan mudah lupa.<br><br>";
} elseif ($belajar == "tidak belajar" && $latihan_2 == "mengerjakan") {
    echo "hasilnya tidak maksimal.<br><br>";
}else {
    echo "Kamu akan mendapatkan nilai buruk. <br><br>";
}

// Bersarang (nested condition)
if ($belajar == "belajar") {
    if ($latihan_2 == "mengerjakan") {
        echo "kamu akan mendapatkan nilai yang baik.<br><br>";
    } elseif ($latihan_2 == "tidak mengerjakan") {
        echo "nilai kamu cukup.<br><br>";
    }
} elseif ($belajar == "tidak belajar") {
    if ($latihan_2 == "mengerjakan") {
        echo "kamu akan mendapatkan hasil yang tidak maksimal.<br><br>";
    } elseif ($latihan_2 == "tidak mengerjakan") {
        echo "kamu akan mendapatkan nilai yang rendah.<br><br>";
    }
}else {
    echo "kamu akan belajar dengna fokus.<br><br>";
}

// Kondisi dengan syarat DAN
if ($belajar == "belajar" && $latihan_2 == "mengerjakan") {
    echo "kamu akan mendapatkan nilai yang baik.<br><br>";
}else {
    echo "kamu akan mendapatkan nilai jelek
<br><br>";
}
// Kondisi dengan syarat ATAU
if ($belajar == "belajar" || $latihan_2 == "mengerjakan") {
    echo "kamu tetap bisa memahami materi.<br><br>";
}else {
    echo "kamu tetap bisa memahami materi
<br><br>";
}
?>