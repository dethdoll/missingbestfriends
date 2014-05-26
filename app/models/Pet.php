<?php 
 
class Pet extends \Eloquent {
 
    protected $table = 'pets';

    protected $fillable = array('picture', 'type_post', 'last_day_seen', 'last_seen', 'description', 'contact_info', 'pet_name',
        'type', 'breed', 'color', 'specific_marks');

    protected $guarded = array('id'); 

}