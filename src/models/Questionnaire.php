<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

  protected $table = 'questionnaire'; // optionnal

  protected $fillable = [
    'id_questionnaire',
  ];


  public function setPassword($password){
    $this->update([
      'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
  }
}

?>
