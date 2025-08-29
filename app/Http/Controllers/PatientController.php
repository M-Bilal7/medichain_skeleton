<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PatientController extends Controller {
  public function show($id){
    return response()->json(['message' => 'Patient record placeholder', 'id' => $id]);
  }
  public function addEncounter(Request $req, $id){
    return response()->json(['message' => 'Encounter created (placeholder)'], 201);
  }
}
