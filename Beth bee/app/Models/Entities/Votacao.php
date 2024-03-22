<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votacao extends Model
{
    use HasFactory;
    protected $table = 'votacaos';

    protected $hidden = [
        'created_at',
        'upated_at',
        'candidatoRelationship',
        'secaoRelationship',
        'municipioRelationship',
    ];

    public function getCandidatoAttribute(){
        return $this->candidatoRelationship;
    }
    public function getSecaoAttribute(){
        return $this->secaoRelationship;
    }
    public function getMunicipioAttribute(){
        return $this->municipioRelationship;
    }

      public function setCandidatoAttribute($value)
      {
        if(isset($value)){
            $this->atributes['id_candidato'] = Candidato::where('id_candidato',$value)->first()->id_candidato;
        }
      }
      public function setSecaoAttribute($value)
      {
        if(isset($value)){
            $this->atributes['id_secao'] = Secao::where('id_secao',$value)->first()->id_candidato;
        }
      }
      public function setMunicipioAttribute($value)
      {
        if(isset($value)){
            $this->atributes['cd_mun'] = Municipio::where('cd_mun',$value)->first()->cd_mun;
        }
      }


     /**
         * get the Municipio pertece a votacao
         * @return Municipio
         */
        public function municipioRelationship()
        {
        return $this->belongsTo(Municipio::class,'cd_mun');
        }
        /**
             * get the Secao pertece a votacao
             * @return Secao
             */
        public function secaoRelationship()
        {
        return $this->belongsTo(Secao::class,'id_secao');
        }

        /**
             * get the Candidato pertece a votacao
             * @return Candidato
             */
        public function candidatoRelationship()
        {
        return $this->belongsTo(Candidato::class,'id_candidato');
        }
}
