<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Calendario extends Model{
    public $table = 'Calendar';

    public function getId(){ return $this->attributes['id']; }
    public function getPrenotazione(){ return $this->attributes['Prenotazione']; }
    public function getNameProfessore(){ return $this->attributes['NameProfessore']; }
    public function getSurnameProfessore(){ return $this->attributes['SurnameProfessore']; }
    public function getDay(){ return $this->attributes['Day']; } //campo per il giorno dei colloqui
    public function getMetodologia(){ return $this->attributes['Metodologia']; }
    public function getAula(){ return $this->attributes['Aula']; }
    public function getOrarioInizio(){ return $this->attributes['OrarioInizio']; }
    public function getOrarioFine(){ return $this->attributes['OrarioFine']; }
     
    public function setId(int $id){ $this->attributes['id'] = $id; }
    public function setPrenotazione(int $Prenotazione){ $this->attributes['Prenotazione'] = $Prenotazione; }
    public function setNameProfessore(string $nameProfessore){ $this->attributes['nameProfessore'] = $nameProfessore; }
    public function setSurnameProfessore(string $surnameProfessore){ $this->attributes['SurnameProfessore'] = $surnameProfessore; }
    public function setDay(string $Day){ $this->attributes['Day'] = $Day; }
    public function setMetodologia(string $Metodologia){ $this->attributes['Metodologia'] = $Metodologia; }
    public function setAula(string $Aula){ $this->attributes['Aula'] = $Aula; }
    public function setOrarioInizio(string $OrarioInizio){ $this->attributes['OrarioInizio'] = $OrarioInizio; }
    public function setOrarioFine(string $OrarioFine){ $this->attributes['OrarioFine'] = $OrarioFine; }


}





?>