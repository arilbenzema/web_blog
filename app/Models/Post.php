<?php

namespace App\Models;

class Post
{
    public static function all()
    {
        return [
            [
                'id'          => 1,
                'title'       => 'Judul Post Pertama',
                'content'     => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo.',
                'created_at'  => 'Mar 16, 2020',
                'author'      => 'John Doe',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image'       => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&w=256&h=256&q=80',
                'category'    => 'Programming',
            ],
            [
                'id'          => 2,
                'title'       => 'Judul Post Kedua',
                'content'     => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo.',
                'created_at'  => 'Mar 16, 2020',
                'author'      => 'Jane Doe',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image'       => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&w=256&h=256&q=80',
                'category'    => 'Programming',
            ],
            [
                'id'          => 3,
                'title'       => 'Judul Post Ketiga',
                'content'     => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo.',
                'created_at'  => 'Mar 16, 2020',
                'author'      => 'John Smith',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image'       => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&w=256&h=256&q=80',
                'category'    => 'Programming',
            ],
        ];
    }
}
