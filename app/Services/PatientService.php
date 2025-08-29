<?php
namespace App\Services;

class PatientService {
  public function createEncounter($patientUserId, $payload, $doctorId){
    // Placeholder: implement encryption (AWS KMS), S3 upload, MongoDB insert, and chain anchoring
    return [
      'encounter_id' => uniqid('enc_'),
      'anchored' => false
    ];
  }
}
