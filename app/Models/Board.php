<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Board extends Model{
        protected $table =  'boards';
        public function category(){
            return $this->belongsTo('App\Models\Category', 'id_category');
        }
    }