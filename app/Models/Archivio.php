<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivio extends Model
{
    /***
     * $this->attributes['id'] - int 
     * $this->attributes['name'] - string
     * $this->attributes['cognome'] - string
     * $this->attributes['documenti'] - string
     * $this->attributes['tipo'] - string
     * $this->attributes['email'] - string
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     */

    public function getId(){ return $this->attributes['id']; }
    public function getName(){ return $this->attributes['name']; }
    public function getSurname(){ return $this->attributes['Surname']; }
    public function getDocuments(){ return $this->attributes['Documents']; }
    public function getType(){ return $this->attributes['Type']; }
    public function getEmail(){ return $this->attributes['Email']; }
     
    
    public function setId(int $id){ $this->attributes['id'] = $id; }
    public function setName(string $name){ $this->attributes['name'] = $name; }
    public function setSurname(string $surname){ $this->attributes['Surname'] = $surname; }
    public function setDocuments(string $documents){ $this->attributes['Documents'] = $documents; }
    public function setType(string $type){ $this->attributes['type'] = $type; }
    public function setEmail(string $email){ $this->attributes['email'] = $email; }
    
}
