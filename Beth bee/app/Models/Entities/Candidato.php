<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $table = 'candidato';

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
            $this->atributes['id_votacao'] = Candidato::where('id_votacao',$value)->first()->id_votacao;
        }
      }
      public function setRacaAttribute($value)
      {
        if(isset($value)){
            $this->atributes['cd_cor_raca'] = Secao::where('cd_cor_raca',$value)->first()->cd_cor_raca;
        }
      }
      public function setGrauAttribute($value)
      {
        if(isset($value)){
            $this->atributes['cd_grau'] = Grau::where('cd_grau',$value)->first()->cd_grau;
        }
      }
        public function setGeneroAttribute($value)
        {
            if(isset($value)){
                $this->atributes['cd_genero'] = Genero::where('cd_genero',$value)->first()->cd_genero;
            }
        }
        public function setCargoAttribute($value)
        {
            if(isset($value)){
                $this->atributes['cd_cargo'] = Cargo::where('cd_cargo',$value)->first()->cd_cargo;
            }
        }
        public function setPartidoAttribute($value)
        {
            if(isset($value)){
                $this->atributes['nr_partido'] = Partido::where('nr_partido',$value)->first()->nr_partido;
            }
        }


     /**
         * get the votacao tem vários a candidato
         * @return Votacao
         */
        public function votacaoRelationship()
        {
        return $this->hasMany(Votacao::class,'id_votacao');
        }
         /**
     * Get the Raca that owns the candidato.
     *
     * @return Raca
     */

    public function racaRelationship()
    {
        return $this->belongsTo(Raca::class, 'cd_cor_raca');
    }

      /**
     * Get the Grau that owns the candidato.
     *
     * @return Grau
     */

     public function grauRelationship()
     {
         return $this->belongsTo(Grau::class, 'cd_grau');
     }

    /**
     * Get the Genero that owns the candidato.
     *
     * @return Genero
     */

    public function generoRelationship()
    {
        return $this->belongsTo(Genero::class, 'cd_genero');
    }

    /**
     * Get the Cargo that owns the candidato.
     *
     * @return Cargo
     */

    public function cargoRelationship(){
        return $this->belongsTo(Cargo::class, 'cd_cargo');
    }

    /**
     * Get the Partido that owns the candidato.
     *
     * @return Partido
     */
    public function partidoRelationship(){
        return $this->belongsTo(Partido::class, 'nr_partido');
    }

}
