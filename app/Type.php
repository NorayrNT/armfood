<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Type extends Model
{
    public $timestamps = false;

    
    
    protected $fillable = [
        'parent_id', 'name', 'symbol'
    ];
    
    public function products(){
        return $this->hasMany("App\Product",'type_id');
    }
    
    protected $attributes = [
        'parent_id' => '0',
    ];
    
    
    public function createMenu() {
        $all = $this->get();
        $parents = $all->where('parent_id','!=',null)->pluck('parent_id')->unique();
       foreach($all as $item) {
           if($parents->contains($item->id)) {
               $childs = $all->where('parent_id',$item->id);
               $parent = $all->where('id',$item->id)->first();
               $parent->children = $childs;
            }
        }       
        
        $all = $all->where('parent_id',null);
        if(!is_null($all)) {
            echo "<ul class='parent_ul'>";                
            foreach($all as $cat) {
                $this->renderCats($cat);
            }
            echo "</ul>";
        }
    }
    public function renderCats($cat) {             
        if(count($cat->children)) {                 
            echo "<li class='with_items'>
            <span class='main_cat_name'>$cat->name</span>
            <span class='down'><i class='fas fa-angle-down'></i></span>
            <ul class='child_ul'>";
            $i = '0';
            foreach($cat->children as $k => $v) {
                $i++;
                if($i == count($cat->children)-1) {
                    echo "<li><a href='/shop/$v->id'>$v->name</a></li>";
                } else {
                    $this->renderCats($v);
                }  
            }              
            echo "</ul> </li>";
        } else {
            echo "<li><a href='/shop/$cat->id'>$cat->name</a></li>";
        }
    }    
    
    // protected static $ids = '';
    
    // public function findCats ($id) {
    //     $prod_type_ids = Product::pluck('type_id')->unique();
    //     $parents = $this->where('parent_id',$id)->get('id');
    //     foreach($parents as $item) {
    //         $childs = $this->where('parent_id',$item->id)->get('id');
    //         if(!count($childs)) {
    //             if($prod_type_ids->contains($item->id)) {                    
    //                 $this->ids .= $item->id.',';
    //             }
    //         } else {
    //             $this->findCats($item->id);
    //         }
    //     }
    // }
    
}

