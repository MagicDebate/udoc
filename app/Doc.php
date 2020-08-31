<?php

namespace SimpleDoc;
use SimpleDoc\User;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
  protected $fillable = [
      'docname', 'type', 'form','status'
  ];
    //
    public function user()
 {
   return $this->belongsTo(User::class);
 }
}
