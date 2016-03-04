# tekkadan

DROP Function stocks.get_stock_harian(date_awal date, date_akhir date);
CREATE OR REPLACE FUNCTION stocks.get_stock_harian(date_awal date, date_akhir date)
RETURNS TABLE(item_kode VARCHAR, item_nama VARCHAR, masuk numeric, keluar numeric, balance numeric, warehouse VARCHAR, warehouse_nama VARCHAR) AS $$
BEGIN
  RETURN QUERY
    SELECT
    l.item_kode,
    l.item_nama,
    ( SELECT sum(s.actual_qty) AS sum
           FROM stocks.tx_stok_entry_ledger s
          WHERE s.item_kode = l.item_kode AND s.actual_qty > 0 AND
          s.warehouse = l.warehouse AND
          s.posting_date BETWEEN date_awal AND date_akhir) AS masuk,
    ( SELECT sum(s.actual_qty) AS sum
           FROM stocks.tx_stok_entry_ledger s
          WHERE s.item_kode = l.item_kode AND s.actual_qty < 0 AND
          s.warehouse = l.warehouse AND
          s.posting_date BETWEEN date_awal AND date_akhir)AS keluar,
    sum(l.actual_qty) AS balance,
    l.warehouse,
    w.warehouse_nama
   FROM stocks.tx_stok_entry_ledger l
     JOIN stocks.tb_warehouse w ON w.id = l.warehouse
   WHERE l.posting_date BETWEEN date_awal AND date_akhir
  GROUP BY l.item_kode, l.item_nama, l.warehouse, w.warehouse_nama;

END
$$ LANGUAGE 'plpgsql';



 
