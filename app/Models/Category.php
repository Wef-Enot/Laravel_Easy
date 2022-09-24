<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Category extends Model{
        protected $table = 'categories';
        //protected $filt
        public function boards(){
            return $this->hasMany('App\Models\Board', 'id_category');
        }
    }
