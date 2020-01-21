<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_KATEGORIS
 * @property string $KATEGORI
 * @property string $SARAN
 * @property Bmi[] $bmis
 */
class kategori extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID_KATEGORIS';

    /**
     * @var array
     */
    protected $fillable = ['KATEGORI', 'SARAN'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bmis()
    {
        return $this->hasMany('App\bmi', 'ID_KATEGORIS', 'ID_KATEGORIS');
    }
}
