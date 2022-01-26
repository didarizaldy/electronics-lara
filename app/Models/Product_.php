<?php

namespace App\Models;

class Product
{
    private static
        $detail_produk = [
            [
                "title" => "Judul Pertama",
                "slug" => "judul-pertama",
                "category" => "Laptop",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, aliquid! Placeat dolor expedita itaque id fugiat illo quas, vero, veniam quisquam a ducimus vel voluptatum libero? Corrupti exercitationem cumque, dolorum modi aliquam quod unde nam qui vitae perferendis est optio distinctio. Sunt sint voluptates incidunt culpa officiis consequuntur architecto deserunt, ea, cum tempora deleniti soluta ducimus rem exercitationem. Ratione illum veritatis, vel similique sed labore beatae, dignissimos soluta non tempora fuga architecto dolorem natus temporibus. Rerum officiis reprehenderit impedit eligendi eaque, vel pariatur molestias distinctio animi quibusdam quasi adipisci quae eos explicabo ullam molestiae illo temporibus fugit provident qui debitis?"
            ],
            [
                "title" => "Judul Kedua",
                "slug" => "judul-kedua",
                "category" => "Kulkas",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, aliquid! Placeat dolor expedita itaque id fugiat illo quas, vero, veniam quisquam a ducimus vel voluptatum libero? Corrupti exercitationem cumque, dolorum modi aliquam quod unde nam qui vitae perferendis est optio distinctio. Sunt sint voluptates incidunt culpa officiis consequuntur architecto deserunt, ea, cum tempora deleniti soluta ducimus rem exercitationem. Ratione illum veritatis, vel similique sed labore beatae, dignissimos soluta non tempora fuga architecto dolorem natus temporibus. Rerum officiis reprehenderit impedit eligendi eaque, vel pariatur molestias distinctio animi quibusdam quasi adipisci quae eos explicabo ullam molestiae illo temporibus fugit provident qui debitis?"
            ],
        ];

    public static function all()
    {
        return collect(self::$detail_produk);
    }

    public static function find($slug)
    {
        $products = static::all();

        return $products->firstWhere('slug', $slug);
    }
}
