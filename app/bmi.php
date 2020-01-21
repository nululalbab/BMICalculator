<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_BMI
 * @property int $USER_ID
 * @property int $ID_KATEGORIS
 * @property int $nilai
 * @property string $DATE
 * @property Kategori $kategori
 * @property User $user
 */
class bmi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID_BMI';

    /**
     * @var array
     */
    protected $fillable = ['USER_ID', 'ID_KATEGORIS', 'nilai', 'DATE'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'ID_KATEGORIS', 'ID_KATEGORIS');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'USER_ID');
    }
}
