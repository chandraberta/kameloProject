--update nama item
UPDATE laporan_keuangan
SET item=(SELECT item FROM menu WHERE menu.id_item=laporan_keuangan.id_item);

--update topping
UPDATE laporan_keuangan SET topping=(SELECT n_topping FROM topping WHERE topping.id_topping=laporan_keuangan.id_topping)

--menampilkan join tabel laporan_keuangan, menu dan topping
SELECT laporan_keuangan.tanggal, menu.item, topping.n_topping, laporan_keuangan.jumlah_pembelian, laporan_keuangan.total_pembelian FROM `laporan_keuangan` INNER JOIN menu ON laporan_keuangan.id_item=menu.id_item
INNER JOIN `topping` ON laporan_keuangan.id_topping=topping.id_topping

--kalau menampilkan harganya
SELECT laporan_keuangan.tanggal, menu.item, menu.harga, topping.n_topping, topping.harga, laporan_keuangan.jumlah_pembelian, laporan_keuangan.total_pembelian FROM `laporan_keuangan` INNER JOIN menu ON laporan_keuangan.id_item=menu.id_item
INNER JOIN `topping` ON laporan_keuangan.id_topping=topping.id_topping

SELECT menu.harga FROM `laporan_keuangan` INNER JOIN menu ON laporan_keuangan.id_item=menu.id_item

-- update kolom total pembelian di laporan keuangan dari jumlah_pembelian(hargaItem + hargaTopping)
UPDATE laporan_keuangan SET total_pembelian=jumlah_pembelian*((SELECT harga FROM menu WHERE laporan_keuangan.id_item=menu.id_item)+ (SELECT harga FROM topping WHERE laporan_keuangan.id_topping=topping.id_topping))


