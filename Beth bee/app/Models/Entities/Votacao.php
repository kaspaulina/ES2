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
            $this->atributes['candidato_id'] = Candidato::where('id',$value)->first()->id;
        }
      }
      public function setSecaoAttribute($value)
      {
        if(isset($value)){
            $this->atributes['secao_id'] = Secao::where('id',$value)->first()->id;
        }
      }
      public function setMunicipioAttribute($value)
      {
        if(isset($value)){
            $this->atributes['mun_id'] = Municipio::where('id',$value)->first()->id;
        }
      }


     /**
         * get the Municipio pertece a votacao
         * @return Municipio
         */
        public function municipioRelationship()
        {
        return $this->belongsTo(Municipio::class,'mun_id');
        }
        /**
             * get the Secao pertece a votacao
             * @return Secao
             */
        public function secaoRelationship()
        {
        return $this->belongsTo(Secao::class,'secao_id');
        }

        /**
             * get the Candidato pertece a votacao
             * @return Candidato
             */
        public function candidatoRelationship()
        {
        return $this->belongsTo(Candidato::class,'candidato_id');
        }
}
