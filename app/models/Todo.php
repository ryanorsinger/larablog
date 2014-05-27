<?php

class Todo extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'todos';

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [
        'title'      => 'required|max:200',
        'body'       => 'required|max:10000'
    ];

    public function getCompletedAttribute($value)
    {
        return (boolean) $value;
    }

}
