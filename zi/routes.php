<?php
/*
 * Copyright (C) 2014 surya || nanang.ask@gmail.com
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the NGNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * User: surya
 * Date: 2/17/14
 * Time: 1:30 PM
 */
Route::controller('/uploadit','resthttp@uploadfile')->post();
// Route::controller('/uploadit','test@testUploadIt')->post();
Route::controller('/deleteit','resthttp@deletefile')->post();
Route::controller('/render','test@testRender')->get();
Route::controller('/render/:name','test@testRedirect')->get();
Route::controller('/filej','test@testUploadIt')->get()->post();
Route::controller('/gen','test@testGenID')->get();
Route::controller('/','main@index')->get()->name('home');
Route::controller('/gen-kode-invoice','main@genInvoice')->get();


/*** master setup ***/

Route::controller('/uom','unitOM@index')->get();
Route::controller('/uom/add','unitOM@a001')->get();
Route::controller('/uom/add','unitOM@s003')->post();
Route::controller('/uom(/:id)','unitOM@v005')->get();
Route::controller('/uom(/:id)','unitOM@d011')->post();

Route::controller('/principal','principal@index')->get();
Route::controller('/principal/add','principal@a001')->get();
Route::controller('/principal/add','principal@s003')->post();
Route::controller('/principal(/:id)','principal@v005')->get();
Route::controller('/principal(/:id)','principal@d011')->post();

Route::controller('/pricelist','pricelist@index')->get();
Route::controller('/pricelist/add','pricelist@a001')->get();
Route::controller('/pricelist/add','pricelist@s003')->post();
Route::controller('/pricelist(/:id)','pricelist@v005')->get();
Route::controller('/pricelist(/:id)','pricelist@d011')->post();

Route::controller('/item','item@index')->get();
Route::controller('/item/add','item@a001')->get();
Route::controller('/item/add','item@s003')->post();
Route::controller('/item(/:id)','item@v005')->get();
Route::controller('/item(/:id)','item@d011')->post();

Route::controller('/price','itemprice@index')->get();
Route::controller('/price','itemprice@filter')->post();
Route::controller('/price/add','itemprice@a001')->get();
Route::controller('/price/add','itemprice@s003')->post();
Route::controller('/price(/:id)','itemprice@v005')->get();
Route::controller('/price(/:id)','itemprice@d011')->post();

Route::controller('/batch','batch@index')->get();
Route::controller('/batch','batch@filter')->post();
Route::controller('/batch/add','batch@a001')->get();
Route::controller('/batch/add','batch@s003')->post();
Route::controller('/batch(/:id)','batch@v005')->get();
Route::controller('/batch(/:id)','batch@d011')->post();

Route::controller('/stok/balance','stok@index')->get();

Route::controller('/stok/saldo','stok@viewbalance')->get();

Route::controller('/stok/batch','stok@viewbatch')->get();

Route::controller('/stok','stok@s003')->post();


Route::controller('/stok/entry/list','stok@list_stock_entry')->get();

Route::controller('/stok/ledger/list','stok@list_stock_ledger')->get();

Route::controller('/stok/entry/item','stok@entryitem')->get();

Route::controller('/stok/entry/:tipe','stok@entry')->get();

Route::controller('/pos','selling@pos')->get();

Route::controller('/pos','selling@s003')->post();

Route::controller('/pos/submit','selling@submit_status')->post();

Route::controller('/pos/item','selling@positem')->get();

Route::controller('/pos/print/harian','selling@print_harian')->get();

Route::controller('/pos/print/export','selling@export_excel')->get();

Route::controller('/pos/print(/:id)','selling@print_invoice')->get();

Route::controller('/pos/list','selling@list_penjualan')->get();

Route::controller('/test/chat','test@TestChat')->get();

Route::controller('/api/comments','test@apiJson')->get()->post();

Route::controller('/item/temp','item@addtemp')->get();

/**
* API routes
*/
Route::controller('/api/1.0/stok','stok@balance')->get();

Route::controller('/api/1.0/stok/batch','stok@balancebatch')->get();

Route::controller('/api/1.0/saldo/batch','stok@datasetBatch')->get();

Route::controller('/api/1.0/jpasien','pasien@jenispasien')->get();

Route::controller('/api/1.0/grupitem','item@grupitem')->get();

Route::controller('/api/1.0/stok/entry/dataset','stok@dataset_stock_entry')->get();

Route::controller('/api/1.0/stok/ledger/dataset','stok@dataset_stock_ledger')->get();

Route::controller('/api/1.0/item','item@dataset')->get()->post();

Route::controller('/api/1.0/satuan','unitOM@dataset')->get();

Route::controller('/api/1.0/gudang','warehouse@dataset')->get()->post();

Route::controller('/api/1.0/principal','principal@dataset')->get();

Route::controller('/api/1.0/pricelist','pricelist@dataset')->get();

Route::controller('/api/1.0/price','itemprice@dataset')->get()->post();

Route::controller('/api/1.0/batch','batch@dataset')->get()->post();

Route::controller('/api/1.0/batchentries','batch@stockEntries')->get();

Route::controller('/api/1.0/saldo','stok@dataset')->get();

Route::controller('/api/1.0/entries','stok@entrytipe')->get();

Route::controller('/api/1.0/pasien','pasien@dataset')->get();

Route::controller('/api/1.0/regpasien','pasien@reg_pasien')->get();

Route::controller('/api/1.0/dokter','selling@dokter')->get();

Route::controller('/api/1.0/dosis','selling@dosis')->get();

Route::controller('/api/1.0/sellprice','selling@pricelist')->get();

Route::controller('/api/1.0/pos','selling@dataset_penjualan')->get();

Route::controller('/api/1.0/pos(/:id)','selling@detail_penjualan')->get();

Route::controller('/u0','login@index')->post()->get()->name('login');
Route::controller('/u7','login@getOut')->get()->name('logout');
