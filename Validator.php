<?php

class Validator{

  private $field, $data, $validators, $errors = [], $is_validated = false;
    
    public function validate(String $field, $data, array $validators = []) {
        $this->field = $field;
        $this->data = $data;
        $this->validators = $validators;
        // array_push($errors, $this->validator());
        foreach($this->validator() as $error) {
          array_push($this->errors, $error);
        }
        if($this->errors == []) {
          $this->is_validated = true;
        }
      
  }


  public function errors() {
    return $this->errors;
  }

  public function validated() {
    return $this->is_validated;
  }

  private function validator() {
    $errors = [];
    foreach($this->validators as $validator) {
      if(gettype($validator) == "array") {
        foreach(array_keys($validator) as $validatorKey) {
          if($validatorKey == "min") {
            $error = $this->min($validator[$validatorKey]);
            if($error) {
              array_push($errors, $error);
            }
          }
        }
      }
      if($validator == "required") {
        if(empty($this->data)) {
          $error = $this->field . " field must be filled.";
          array_push($errors, $error);  
        }
      }
    }
    return $errors;
  }

  private function min($min_value) {
    if(strlen($this->data) < $min_value) {
      return $this->field . " must be of at least of $min_value characters.";
    } else {
    }
  }
}