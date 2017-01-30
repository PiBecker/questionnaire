<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

  protected $table = 'response'; // optionnal

  protected $fillable = [
    'id_response',
    'id_question',
    'valeur_choix',
    'text_libre',
  ];


  public function setPassword($password){
    $this->update([
      'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
  }
}

?>
