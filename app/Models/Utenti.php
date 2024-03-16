<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivio extends Models
{
    /***
     * $this->attributes['id'] - int
     * $this->attributes['username'] - string
     * $this->attributes['password'] - string
     * $this->attributes['tipo'] - string
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     */

    public function getId(){ return $this->attributes['id']; }
    public function getName(){ return $this->attributes['username']; }
    public function getPassword(){ return $this->attributes['password']; }
    public function getDocuments(){ return $this->attributes['tipo']; }
    public function getBirthDay(){ return $this->attributes['birthday']; }
    public function getCreatedAt(){ return $this->attributes['createdAt']; }
    public function getUpdateAt(){ return $this->attributes['updatedAt']; }
     
    
    public function setId(int $id){ $this->attributes['id'] = $id; }
    public function setName(string $name){ $this->attributes['username'] = $name; }
    public function setSurname(string $password){ $this->attributes['password'] = $password; }
    public function setDocuments(string $tipo){ $this->attributes['tipo'] = $tipo; }
    public function setBirthDay(string $BirthDay){ $this->attributes['birthday'] = $BirthDay; }
    public function setType(string $createdAt){ $this->attributes['createdAt'] = $createdAt; }
    public function setEmail(string $updatedAt){ $this->attributes['updatedAt'] = $updatedAt; }
    
}
