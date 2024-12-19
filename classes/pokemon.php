<?php

    class Pokemon {
        private string $name;
        private Type $type;
        private int $id;
        private float $weight;
        private float $height; 
        private array $moves;

        //mètode constructor
        function __construct(string $name, Type $type, int $id, float $weight, float $height) {
            $this->name = $name;
            $this->type = $type;
            $this->id = $id;
            $this->weight = $weight;
            $this->height = $height;
            $this->moves = array();
        }

        //getters
        function get_name(): string {
            return $this->name;
        }
        function get_type(): Type {
            return $this->type;
        } 
        function get_id(): int {
            return $this->id;
        } 
        function get_weight(): float {
            return $this->weight;
        } 
        function get_height(): float {
            return $this->height;
        }
        function get_moves(): array {
            return $this->moves;
        }

        //setters
        function set_name($name): void {
            $this->name = $name;
        }
        function set_type($type): void {
            $this->type = $type;
        }
        function set_id($id): void {
            $this->id = $id;
        }
        function set_weight($weight): void {
            $this->weight = $weight;
        }
        function set_height($height): void {
            $this->height = $height;
        }
       
        //mètodes classe
        function useMove(string $move): void {
            echo "{$this->name} has used {$move}";
        }

        function learnMove(string $move_name): void {
            array_push($this->moves, $move_name); 
            //echo "{$this->name} has learnt {$move_name} </br>"; --> avís de q s'ha realitzat la funció correctament
        }
    }
