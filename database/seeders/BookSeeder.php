<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use\App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "To Yuul",
            "author" => " Andan",
            "year" => 2023,
            "publisher" => "Indosiar",
            "city" => "Colombia",
            "cover" => "Cover A",
            "bookshelf_id" => 1,
        ]);
    }
}
