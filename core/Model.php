<?php

namespace Core;

use Core\Database;

class Model
{
    protected $db;
    protected $table;
    protected $fillable = [];
    protected $relations;

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

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = ?";
        return $this->db->fetch($sql, [$email]);
    }

    public function with($relation)
    {
        if (!isset($this->relations[$relation])) {
            throw new \Exception("Relation {$relation} not defined.");
        }

        $config = $this->relations[$relation];

        $relatedTable = $config['table'];
        $foreignKey   = $config['foreignKey'];
        $ownerKey     = $config['ownerKey'] ?? 'id';
        $selectField  = $config['select'] ?? '*';
        $asField      = $config['as'] ?? $selectField;

        $sql = "SELECT {$this->table}.*, {$relatedTable}.{$selectField} AS {$asField}
            FROM {$this->table}
            JOIN {$relatedTable}
              ON {$this->table}.{$foreignKey} = {$relatedTable}.{$ownerKey}
            ORDER BY {$this->table}.created_at DESC";

        return $this->db->fetchAll($sql);
    }


    public function create(array $data)
    {
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
        $values = array_values($data);

        $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        return $this->db->query($sql, $values);
    }

    public function update($id, array $data)
    {
        $data = array_filter(
            $data,
            fn($key) => in_array($key, $this->fillable),
            ARRAY_FILTER_USE_KEY
        );

        if (empty($data)) {
            throw new \Exception("No valid data provided for update.");
        }

        $setClause = implode(", ", array_map(fn($key) => "$key = ?", array_keys($data)));
        $values = array_values($data);
        $values[] = $id;

        $sql = "UPDATE {$this->table} SET {$setClause} WHERE id = ?";
        return $this->db->query($sql, $values);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        return $this->db->query($sql, [$id]);
    }
}
