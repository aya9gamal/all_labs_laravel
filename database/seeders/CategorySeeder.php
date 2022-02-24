<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $categorys=[
        [
         'name'=>'mr.aya'         
        ],
        [
            'name'=>'mr.gamal'         
           ],
    ];
    public function run()
    {
        // DB::table('categories')->insert([
        //     'name' => Str::random(5),            
        // ]);
        foreach($this->categorys as $category){
            $categorys=new category($category);
            $categorys->save();
        }
    }
}
