<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

  protected $table = 'question'; // optionnal

  protected $fillable = [
    'id_question',
    'id_questionnaire',
    'type_questionnaire',
    'question',
  ];


  public function setPassword($password){
    $this->update([
      'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
  }
}

?>
