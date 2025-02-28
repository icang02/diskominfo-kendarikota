<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Pastikan model Category di-import

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      [
        'category_name' => 'Berita Resmi',
        'description'   => 'Berita resmi dari Diskominfo mengenai kegiatan, pengumuman, dan informasi resmi.'
      ],
      [
        'category_name' => 'Layanan Publik',
        'description'   => 'Informasi tentang layanan publik yang disediakan oleh Diskominfo.'
      ],
      [
        'category_name' => 'Teknologi Informasi',
        'description'   => 'Berita dan artikel seputar perkembangan teknologi informasi dan komunikasi.'
      ],
      [
        'category_name' => 'Pengumuman',
        'description'   => 'Pengumuman resmi dari Diskominfo untuk masyarakat umum.'
      ],
      [
        'category_name' => 'Artikel Edukasi',
        'description'   => 'Artikel edukasi tentang komunikasi, informasi, dan teknologi.'
      ],
      [
        'category_name' => 'Kegiatan Diskominfo',
        'description'   => 'Informasi tentang kegiatan, acara, dan program yang diselenggarakan oleh Diskominfo.'
      ],
      [
        'category_name' => 'Regulasi dan Kebijakan',
        'description'   => 'Informasi tentang regulasi dan kebijakan di bidang komunikasi dan informatika.'
      ],
      [
        'category_name' => 'Pengaduan Masyarakat',
        'description'   => 'Layanan pengaduan dan aspirasi masyarakat terkait layanan Diskominfo.'
      ],
      [
        'category_name' => 'Siaran Pers',
        'description'   => 'Siaran pers resmi dari Diskominfo.'
      ]
    ];

    foreach ($data as $item) {
      Category::create($item);
    }
  }
}
