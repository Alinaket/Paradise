<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $slug)
 * @method static take(int $int)
 * @property mixed $id
 */
class Product extends Model
{
    use HasFactory;
    public function getAllImgAttribute(){

        return ProductImg::where('product_id',$this->id)->orderBy("sort")->get();
    }
    public function getTitleImgAttribute(){

        return ProductImg::where('product_id',$this->id)->orderBy("sort")->first();
    }
    public function getTagAttribute(){

        return ProductTeg::where('product_id',$this->id)
            ->leftJoin('tags','tags.id', 'product_tegs.teg_id')
            ->select('tags.name')
            ->pluck('name');
    }

}
