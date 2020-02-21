<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Student extends Eloquent {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student';

    protected  $fillable = [];

    public function school() {
        return $this->belongsTo(School::class, 'id_school_board'); // to complete relation following convention
    }

}