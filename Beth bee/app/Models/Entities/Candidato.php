<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $table = 'votacaos';

    protected $hidden = [
        'created_at',
        'upated_at',
        'votacaoRelationship',
        'racaRelationship',
        'grauRelationship',
        'generoRelationship',
        'cargoRelationship',
        'partidoRelationship',
    ];

    public function getVotacaoAttribute(){
        return $this->votacaoRelationship;
    }
    public function getRacaAttribute(){
        return $this->racaRelationship;
    }
    public function getGrauAttribute(){
        return $this->grauRelationship;
    }
    public function getGeneroAttribute(){
        return $this->generoRelationship;
    }
    public function getCargoAttribute(){
        return $this->cargoRelationship;
    }
    public function getPartidoAttribute(){
        return $this->partidoRelationship;}

      public function setVotacaoAttribute($value)
      {
        if(isset($value)){
            $this->atributes['votacao_id'] = Candidato::where('id',$value)->first()->id;
        }
      }
      public function setRacaAttribute($value)
      {
        if(isset($value)){
            $this->atributes['raca_id'] = Secao::where('id',$value)->first()->id;
        }
      }
      public function setGrauAttribute($value)
      {
        if(isset($value)){
            $this->atributes['grau_id'] = Grau::where('id',$value)->first()->id;
        }
      }
        public function setGeneroAttribute($value)
        {
            if(isset($value)){
                $this->atributes['genero_id'] = Genero::where('id',$value)->first()->id;
            }
        }
        public function setCargoAttribute($value)
        {
            if(isset($value)){
                $this->atributes['cargo_id'] = Cargo::where('id',$value)->first()->id;
            }
        }
        public function setPartidoAttribute($value)
        {
            if(isset($value)){
                $this->atributes['nr_partido_id'] = Partido::where('id',$value)->first()->id;
            }
        }


     /**
         * get the votacao tem vários a candidato
         * @return Votacao
         */
        public function votacaoRelationship()
        {
        return $this->hasMany(Votacao::class,'votacao_id');
        }
         /**
     * Get the Raca that owns the candidato.
     *
     * @return Raca
     */

    public function racaRelationship()
    {
        return $this->belongsTo(Raca::class, 'raca_id');
    }

      /**
     * Get the Grau that owns the candidato.
     *
     * @return Grau
     */

     public function grauRelationship()
     {
         return $this->belongsTo(Grau::class, 'grau_id');
     }

    /**
     * Get the Genero that owns the candidato.
     *
     * @return Genero
     */

    public function generoRelationship()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }

    /**
     * Get the Cargo that owns the candidato.
     *
     * @return Cargo
     */

    public function cargoRelationship(){
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    /**
     * Get the Partido that owns the candidato.
     *
     * @return Partido
     */
    public function partidoRelationship(){
        return $this->belongsTo(Partido::class, 'nr_partido_id');
    }

}
