<?php

class Team {
    private array $pokemons;
    private Pokemon $pokemon;
    //construct
    public function __construct(array $pokemons) {
        $this->pokemons = $pokemons;
    }
    //getter
    public function get_pokemons() {
        return $this->pokemons;
    }
    public function get_pokemon() {
        return $this->pokemon;
    }
    //mètodes classe
    public function select_pokemon(Type $type): void {
        foreach($this->pokemons as $selected_pokemon) {
            if($selected_pokemon->get_type() === $type) {
                echo '<pre>' . var_export($selected_pokemon->get_name(), true) . '</pre>';
                echo '<pre>' . var_export($selected_pokemon->get_type(), true) . '</pre>';

            }
        }
    }

}
