<?php
    class pessoa {
        public $hp;
        public $xp;
        public $atk;
        public $def;
        public $ração;
        public function __construct($hp, $atk, $def, $ração) {
            $this->hp = $hp;
            $this->atk = $atk;
            $this->def = $def;
            $this->ração = $ração;
        }
        public function atacar($pessoa) {
            if($this->atk > $pessoa->def) {
                $this->xp++;
                print("Você derrotou {$pessoa}");
            }
            else {
                $this->hp--;
                print("Você foi derrotado {$pessoa}");
            }
        }
        public function consumir_racao($quantidade) {
            $this->ração = $this->ração - $quantidade;
            $this->hp = $this->ração + $quantidade;
            print(" consumiu {$quantidade} ração e recuperou {$quantidade} hp");
        }
    }
    $marquinhos = new pessoa(1000, 1000, 1000, 1000);
    $jonny = new pessoa(1500, 750, 1200, 1553);
    $jonny->consumir_racao(5);
?>