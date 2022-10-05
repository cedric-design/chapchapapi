<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    protected $fillable = [
        'nom_destinataire', 'adresse_destinataire','numero_destinataire','nom_livreur','statut_id'
    ];
}
