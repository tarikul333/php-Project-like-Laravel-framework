<?php

namespace Core;

use Core\Database;

class Validator
{
    protected $data = [];
    protected $rules = [];
    protected $errors = [];

    public function __construct(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;
        $this->validate();
    }

    protected function validate()
    {
        foreach ($this->rules as $field => $ruleString) {
            $rules = explode('|', $ruleString);
            $value = trim($this->data[$field] ?? '');

            foreach ($rules as $rule) {
                if ($rule === 'required' && empty($value)) {
                    $this->addError($field, ucfirst($field) . ' is required.');
                }

                if (str_starts_with($rule, 'min:')) {
                    $min = (int) explode(':', $rule)[1];
                    if (strlen($value) < $min) {
                        $this->addError($field, ucfirst($field) . " must be at least $min characters.");
                    }
                }

                if (str_starts_with($rule, 'max:')) {
                    $max = (int) explode(':', $rule)[1];
                    if (strlen($value) > $max) {
                        $this->addError($field, ucfirst($field) . " must be no more than $max characters.");
                    }
                }

                if ($rule === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($field, 'Invalid email address.');
                }

                if (str_starts_with($rule, 'unique:')) {
                    [$table, $column] = explode(',', str_replace('unique:', '', $rule));
                    $db = new Database();
                    $exists = $db->fetch("SELECT * FROM {$table} WHERE {$column} = ?", [$value]);

                    if ($exists) {
                        $this->addError($field, ucfirst($field) . ' already exists.');
                    }
                }

                if ($rule === 'confirmed') {
                    $confirmation = $this->data[$field . '_confirmation'] ?? '';
                    if ($value !== $confirmation) {
                        $this->addError($field . '_confirmation', 'Password confirmation does not match.');
                    }
                }
            }
        }
    }

    protected function addError($field, $message)
    {
        if (!isset($this->errors[$field])) {
            $this->errors[$field] = $message;
        }
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}
