<?php

namespace App\Imports;

use App\ProduitCategory;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoryProduitImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProduitCategory([
                'produit_id'     => $row[0],
                'category_id'    => $row[1], 
        ]);
    }
}