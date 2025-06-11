<?php

namespace Core;

use Core\Database;

class Model
{
    protected $db;
    protected $table;
    protected $fillable = [];  // <-- declare fillable fields here in child model

    public function __construct()
    {
        $this->db = new Database();

        if (!$this->table) {
            $class = (new \ReflectionClass($this))->getShortName();
            $this->table = strtolower($class) . 's';
        }
    }

    public function all()
    {
        return $this->db->fetchAll("SELECT * FROM {$this->table}");
    }

    public function find($id)
    {
        return $this->db->fetch("SELECT * FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function create(array $data)
    {
        // Filter data to only allow fillable columns
        $data = array_filter(
            $data,
            fn($key) => in_array($key, $this->fillable),
            ARRAY_FILTER_USE_KEY
        );

        if (empty($data)) {
            throw new \Exception("No valid data provided for insertion.");
        }

        $columns = implode(", ", array_keys($data));
        $placeholders = rtrim(str_repeat("?, ", count($data)), ", ");

        $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        return $this->db->query($sql, array_values($data));
    }
}
