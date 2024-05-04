<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prenotazione extends Model
{
    use HasFactory;
    public function getId(){return $this->attributes['id']; }
    public function getIdProfessore(){ return $this->attributes['idProfessore']; }
    public function getIdCalendario(){ return $this->attributes['idCalendario']; }
    public function getIdUser(){ return $this->attributes['idUser']; }

    public function setId($id){ $this->attributes['id'] = $id;}
    public function idProfessore(): HasMany{
        return $this->hasMany(Calendario::class);
    }
    public function setIdProfessore($idProfessore){}
    public function setIdCalendario($idCalendario){}
    public function setIdUser($idUser){}

}
