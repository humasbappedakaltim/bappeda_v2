<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ],
            [
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Website Resmi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ],
            [
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\\November2020\\oshyVlgDO8A7tiSy7dDM.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ],
            [
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => null,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ],
            [
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings\\September2020\\qI7jSveJTf2vAJ5GWpaV.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ],
            [
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'BAPPEDA KALTIM',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ],
            [
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Selamat Datang di Halaman Administrator Website Bappeda Prov. Kaltim',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ],
            [
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ],
            [
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings\\September2020\\akBHm4gYEq4pgdfOLIHQ.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ],
            [
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => null,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ],
            [
                'id' => 11,
                'key' => 'media-social.link_fb',
                'display_name' => 'Link Facebook',
                'value' => 'https://www.facebook.com/mediapublikasi.bappeda.1/',
                'details' => null,
                'type' => 'text',
                'order' => 6,
                'group' => 'Media Social',
            ],
            [
                'id' => 12,
                'key' => 'media-social.link_twitter',
                'display_name' => 'Link Twitter',
                'value' => 'https://twitter.com/bapp_kaltim',
                'details' => null,
                'type' => 'text',
                'order' => 7,
                'group' => 'Media Social',
            ],
            [
                'id' => 13,
                'key' => 'media-social.link_yb',
                'display_name' => 'Link Youtube',
                'value' => 'https://www.youtube.com/channel/UCW0yOAVXuRWSLt6v7V4Ncug',
                'details' => null,
                'type' => 'text',
                'order' => 8,
                'group' => 'Media Social',
            ],
            [
                'id' => 14,
                'key' => 'media-social.link_ig',
                'display_name' => 'Link Instagram',
                'value' => 'https://www.instagram.com/bappeda_kaltim/',
                'details' => null,
                'type' => 'text',
                'order' => 9,
                'group' => 'Media Social',
            ],
            [
                'id' => 15,
                'key' => 'profil-kantor.email_kantor',
                'display_name' => 'Email Kantor',
                'value' => 'bappeda@kaltimprov.go.id',
                'details' => null,
                'type' => 'text',
                'order' => 10,
                'group' => 'Profil Kantor',
            ],
            [
                'id' => 16,
                'key' => 'profil-kantor.alamat_kantor',
                'display_name' => 'Alamat Kantor',
                'value' => 'Jl. Kesuma Bangsa No.2, Kel. Sungai Pinang Luar, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur',
                'details' => null,
                'type' => 'text',
                'order' => 11,
                'group' => 'Profil Kantor',
            ],
            [
                'id' => 17,
                'key' => 'profil-kantor.telp_kantor',
                'display_name' => 'Telepon Kantor',
                'value' => '0541 - 741044',
                'details' => null,
                'type' => 'text',
                'order' => 12,
                'group' => 'Profil Kantor',
            ],
            [
                'id' => 18,
                'key' => 'profil-kantor.fax_kantor',
                'display_name' => 'Fax Kantor',
                'value' => '0541 - 742283',
                'details' => null,
                'type' => 'text',
                'order' => 13,
                'group' => 'Profil Kantor',
            ],
            [
                'id' => 19,
                'key' => 'profil-kantor.kodepos_kantor',
                'display_name' => 'Kode Pos Kantor',
                'value' => '75242',
                'details' => null,
                'type' => 'text',
                'order' => 14,
                'group' => 'Profil Kantor',
            ],
            [
                'id' => 20,
                'key' => 'site.foto_visi_misi',
                'display_name' => 'Foto Visi & Misi',
                'value' => 'settings\\November2020\\0w9U5ff6rRnuckX18KhZ.jpg',
                'details' => null,
                'type' => 'image',
                'order' => 15,
                'group' => 'Site',
            ],
            [
                'id' => 21,
                'key' => 'site.bg_welcome',
                'display_name' => 'Background Welcome',
                'value' => 'settings\\December2020\\UQIcPco7lXyKEJhx0KY6.jpg',
                'details' => null,
                'type' => 'image',
                'order' => 16,
                'group' => 'Site',
            ],
            [
                'id' => 22,
                'key' => 'profil-kantor.visi_misi',
                'display_name' => 'Visi Misi',
                'value' => '<p class="text-center">Visi dan Misi Provinsi Kalimantan Timur yang tertuang dalam RPJMD Kalimantan Timur Tahun 2019 - 2023</p><h3 class="text-center">Visi</h3><p class="text-center">"Berani Untuk Kalimantan Timur Berdaulat".</p><h3 class="text-center"><span>Misi</span></h3><div style="padding-left: 30px; padding-right:30px;"><ol class="text-justify"><li>Berdaulat Dalam Pembangunan Sumber Daya Manusia Berahklak Mulia, Produktif, Inovatif, dan Berdaya Saing Terdepan Di Indonesia.</li><li>Berdaulat Dalam Pemeliharaan Kesehatan Lingkungan Hidup yang Berkualitas dan Berkelanjutan.</li><li>Berdaulat Dalam Pemenuhan Infrastruktur Dasar.</li><li>Berdaulat Dalam Pengembangan Ekonomi Masyarakat yang Berdaya Saing, Berkerakyatan dan Berbasis Sumber Daya Alam (SDA) Berkelanjutan.</li><li>Berdaulat Dalam Pengelolaan Keuangan Daerah yang Efisien dan Akuntabel.</li></ol></div>',
                'details' => null,
                'type' => 'rich_text_box',
                'order' => 17,
                'group' => 'Profil Kantor',
            ],
            [
                'id' => 25,
                'key' => 'media-social.link_wa',
                'display_name' => 'Link WhatsApp',
                'value' => 'https://api.whatsapp.com/send?phone=+628NOHP&text=Salam, ada beberapa hal yang ingin saya pertanyakan kepada admin Bappeda Prov. Kaltim. Terima Kasih.',
                'details' => null,
                'type' => 'text',
                'order' => 19,
                'group' => 'Media Social',
            ],
            [
                'id' => 27,
                'key' => 'media-social.api_ig',
                'display_name' => 'API Instagram',
                'value' => 'EAAC4zGzPVZBUBAKXxuq42WsVwoy8xpsZAnVfcEjgMJZB5BhmJzrcM6ZAZCl8T8wwT7DgZAIkP6oVhZBsHRV9t06asLB7ZBadrfUNAqvCcA13UIKSDu1bKk9UZCpo8NyCAJEBwX0pVZChgCdmPvfXPPOZBGSY8EwVWIZCS9dfulU1NPltrB3cWZAorbMLC',
                'details' => null,
                'type' => 'text',
                'order' => 20,
                'group' => 'Media Social',
            ],
        ]);
    }
}