<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Type;

class TypeComposer
{
   
    protected $types;

    public function __construct(Type $types)
    {        
        $this->types = $types;
    }

    public function compose(View $view)
    {
        $all = $this->types::get();
        $parent_ids = $all->pluck('parent_id','id');
        $keys = collect();
        $vals = collect();
        $final_types = [];
        foreach($parent_ids as $k => $v) {
            $keys->push($k);
            $vals->push($v);
        }
        foreach($keys as $item) {
            if(!$vals->contains($item)) {
                array_push($final_types,$item);
            } else {
                continue;
            } 
        }
        $types = $this->types->find($final_types);
        $view->with(compact('types'));
    }
}

