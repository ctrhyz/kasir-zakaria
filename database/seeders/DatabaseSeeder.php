<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Produk
        Produk::create([
            "ProdukID"=> "1",
            "NamaProduk"=> "Mie",
            "Harga"=> "2000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "2",
            "NamaProduk"=> "Ayam",
            "Harga"=> "2000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "3",
            "NamaProduk"=> "Kue",
            "Harga"=> "5000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "4",
            "NamaProduk"=> "Sandal",
            "Harga"=> "5000",
            "Stok"=> "50"
        ]);
        Produk::create([
            "ProdukID"=> "5",
            "NamaProduk"=> "Teh",
            "Harga"=> "2000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "6",
            "NamaProduk"=> "Bakso",
            "Harga"=> "10000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "7",
            "NamaProduk"=> "Nasi",
            "Harga"=> "6000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "8",
            "NamaProduk"=> "Tas",
            "Harga"=> "40000",
            "Stok"=> "10"
        ]);
        Produk::create([
            "ProdukID"=> "9",
            "NamaProduk"=> "Sepatu",
            "Harga"=> "20000",
            "Stok"=> "20"
        ]);
        Produk::create([
            "ProdukID"=> "10",
            "NamaProduk"=> "Baju",
            "Harga"=> "150000",
            "Stok"=> "100"
        ]);

        // Pelanggan
        Pelanggan::create([
            "PelangganID"=> "1",
            "NamaPelanggan"=> "Ahmad Temola",
            "Alamat"=> "Lojejer",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "2",
            "NamaPelanggan"=> "Ahmad Bajindul",
            "Alamat"=> "Puger",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "3",
            "NamaPelanggan"=> "Supri Temola",
            "Alamat"=> "Ambulu",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "4",
            "NamaPelanggan"=> "Ahmad Perkukuk",
            "Alamat"=> "Balung",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "5",
            "NamaPelanggan"=> "Asep Kujang",
            "Alamat"=> "Lojejer",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "6",
            "NamaPelanggan"=> "Ahmad Jajang",
            "Alamat"=> "Wuluhan",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "7",
            "NamaPelanggan"=> "Anying Oppa",
            "Alamat"=> "Korea",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "8",
            "NamaPelanggan"=> "Semprul Rugi",
            "Alamat"=> "Gresik",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "9",
            "NamaPelanggan"=> "Cukurukuk",
            "Alamat"=> "Jakarta",
            "NomorTelepon"=> "085748440529"
        ]);
        Pelanggan::create([
            "PelangganID"=> "10",
            "NamaPelanggan"=> "Ah Temola",
            "Alamat"=> "Lojejer",
            "NomorTelepon"=> "085748440529"
        ]);

        //Penjualan
        Penjualan::create([
            "PenjualanID"=> "1",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"1"
        ]);
        Penjualan::create([
            "PenjualanID"=> "2",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"2"
        ]);
        Penjualan::create([
            "PenjualanID"=> "3",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"3"
        ]);
        Penjualan::create([
            "PenjualanID"=> "4",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"4"
        ]);
        Penjualan::create([
            "PenjualanID"=> "5",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"5"
        ]);
        Penjualan::create([
            "PenjualanID"=> "6",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"6"
        ]);
        Penjualan::create([
            "PenjualanID"=> "7",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"7"
        ]);
        Penjualan::create([
            "PenjualanID"=> "8",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"8"
        ]);
        Penjualan::create([
            "PenjualanID"=> "9",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"9"
        ]);
        Penjualan::create([
            "PenjualanID"=> "10",
            "TanggalPenjualan"=> "2024-02-28",
            "TotalHarga"=> "20000",
            "PelangganID"=>"10"
        ]);

        //DetailPenjualan
        DetailPenjualan::create([
            "DetailID"=> "1",
            "PenjualanID"=> "1",
            "ProdukID"=> "1",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "2",
            "PenjualanID"=> "2",
            "ProdukID"=> "2",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "3",
            "PenjualanID"=> "3",
            "ProdukID"=> "3",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "4",
            "PenjualanID"=> "4",
            "ProdukID"=> "4",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "5",
            "PenjualanID"=> "5",
            "ProdukID"=> "5",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "6",
            "PenjualanID"=> "6",
            "ProdukID"=> "6",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "7",
            "PenjualanID"=> "7",
            "ProdukID"=> "7",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "8",
            "PenjualanID"=> "8",
            "ProdukID"=> "8",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "9",
            "PenjualanID"=> "9",
            "ProdukID"=> "9",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
        DetailPenjualan::create([
            "DetailID"=> "10",
            "PenjualanID"=> "10",
            "ProdukID"=> "10",
            "JumlahProduk"=> "20",
            "Subtotal"=> "20000"
        ]);
    }
}
