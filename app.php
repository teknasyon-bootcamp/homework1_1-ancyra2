<?php

$age = 24;

/**
 * Problemde sadece "Çocuk", "Genç", "Yetişkin", "Yaşlı" dizgelerinin
 * yazdırılması istenmesi sebebiyle ve değişkenin değerinin dinamik bir
 * şekilde değiştirilmesi istenilmediğinden $age değişkeninin
 * negatif olması ve çok yüksek yaş değerleri içermesi
 * durumlarıyla ilgilenilmemiştir.
 */


if ($age >= 0 && $age <= 14) {
    echo "Çocuk";
} elseif ($age > 14 && $age <= 24) {
    echo "Genç";
} elseif ($age > 24 && $age <= 64) {
    echo "Yetişkin";
} elseif ($age > 64) {
    echo "Yaşlı";
}

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
