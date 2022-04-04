<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\Traits;

trait CommonModel
{
    public function __construct(?Array $properties=array()){
        if($properties !== null && count($properties) )
        {
            foreach($properties as $key => $value){
                $this->{$key} = $value;
            }
        }
    }


    public function assignedToArray(): array
    {
        $res = [];

        foreach($this as $key => $value)
        {
            if($this->{$key} !== null){
                $res[$key] = $value;
            }
        }

        return $res;
    }
}
