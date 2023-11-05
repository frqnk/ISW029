<?php

class pessoa {
    public $nome;
    public $hp;
    public $xp;
    public $atk;
    public $def;
    public $ração;

    public function __construct($nome, $atk, $def, $ração) {
        $this->nome = $nome;
        $this->hp = 100;
        $this->xp = 1;
        $this->atk = $atk;
        $this->def = $def;
        $this->ração = $ração;
    }
    public function atacar($pessoa) {
        if($this->atk > $pessoa->def) {
            $pessoa->hp--;
            print("{$this->nome} derrotou {$pessoa->nome}<br>".PHP_EOL);
        }
        else {
            $this->hp--;
            print("{$this->nome} foi derrotado por {$pessoa->nome}<br>".PHP_EOL);
        }
        $this->xp++;
    }
    public function consumir_ração($quantidade) {
        $this->ração = $this->ração - $quantidade;
        $this->hp = $this->ração + $quantidade;
        print("{$this->nome} consumiu {$quantidade} ração e recuperou {$quantidade} hp<br>".PHP_EOL);
    }
}

class sala_virtual {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
    public function entrar(pessoa $p) {
        print("{$p->nome} entrou em {$this->nome}<br>".PHP_EOL);
    }
    public function sair(pessoa $p) {
        print("{$p->nome} saiu de {$this->nome}<br>".PHP_EOL);
    }
}

$pessoa1 = new pessoa("Johnny", 15, 10, 50);
$pessoa2 = new pessoa("Marquinhos", 14, 12, 40);
$pessoa3 = new pessoa("Brabo", 25, 3, 60);
$pessoa4 = new pessoa("Francisco", 10, 12, 70);
$pessoa5 = new pessoa("Renato", 17, 13, 45);

$pessoa1->atacar($pessoa2);
$pessoa2->atacar($pessoa4);
$pessoa1->consumir_ração(5);
$pessoa3->atacar($pessoa4);
$pessoa1->atacar($pessoa3);
$pessoa1->atacar($pessoa4);
$pessoa4->consumir_ração(1);

$sala_virtual1 = new sala_virtual("sala de aula");
$sala_virtual2 = new sala_virtual("fazenda");
$sala_virtual3 = new sala_virtual("minecraft");
$sala_virtual4 = new sala_virtual("RPG de mesa");
$sala_virtual5 = new sala_virtual("escola");

$sala_virtual1->entrar($pessoa1);
$sala_virtual2->entrar($pessoa2);
$sala_virtual3->entrar($pessoa3);
$sala_virtual4->sair($pessoa4);
$sala_virtual5->sair($pessoa5);