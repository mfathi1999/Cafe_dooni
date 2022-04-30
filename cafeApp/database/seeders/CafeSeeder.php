<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cafes')->insert([
            'name'=>'کافه لمیز',
            'address' => 'اصفهان، خیابان استانداری، روبروی بلوار هشت بهشت، پلاک 50',
            'map_src_google_map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13436.916032052353!2d51.6759634!3d32.6533495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb613c257ac8b041!2sLamiz%20Coffee!5e0!3m2!1sen!2suk!4v1651167392019!5m2!1sen!2suk',
            'city' => 'isfahan',
            'provance' => 'esfahan',
            'email_address' => 'lamiz@gmail.com',
            'phone_number' => '03132247982',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('cafes')->insert([
            'name'=>'کافه رستوران هوگر',
            'address' => 'چهار باغ عباسی، دروازه دولت، خیابان مسجد باب الرحمه کوچه جهان نما، انتهای بن‌بست دهدشتی، پلاک ۱۱۰',
            'map_src_google_map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13435.76931573422!2d51.6682054!3d32.6609788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9708901dab18138b!2sHouger%20Cafe!5e0!3m2!1sen!2suk!4v1651169856511!5m2!1sen!2suk',
            'city' => 'isfahan',
            'provance' => 'esfahan',
            'email_address' => 'dahdashti@gmail.com',
            'phone_number' => '09134208004',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('cafes')->insert([
            'name'=>'کافه رادیو',
            'address' => ' اصفهان - خیابان چهارباغ - کوچه ی سپاهان',
            'map_src_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6718.360445103123!2d51.667351525827655!3d32.65464792403633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbc35e46847f919%3A0x760d61d40c9d6b77!2sRadio%20Cafe!5e0!3m2!1sen!2suk!4v1651169579198!5m2!1sen!2suk',
            'city' => 'isfahan',
            'provance' => 'esfahan',
            'email_address' => 'radiocafe@gmail.com',
            'phone_number' => '03132245089',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
