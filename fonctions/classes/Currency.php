<?php

class Currency
{

    private string $value1;
    private string $value2;
    private int $multiplicator;
    private float $conversion;
    private string $date;

    public function __construct(string $value1, string $value2, int $multiplicator, float $conversion, string $date)
    {

        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->multiplicator = $multiplicator;
        $this->conversion = $conversion;
        $this->date = $date;
    }

    public function getValue1(): string
    {

        return $this->value1;
    }

    public function setValue1(string $value1): void
    {

        $this->value1 = $value1;
    }

    public function getValue2(): string
    {

        return $this->value2;
    }

    public function setValue2(string $value2): void
    {

        $this->value1 = $value2;
    }

    public function getMultiplicator(): int
    {

        return $this->multiplicator;
    }

    public function setMultiplicator(int $multiplicator): void
    {

        $this->multiplicator = $multiplicator;
    }

    public function getConversion(): float
    {

        return $this->conversion;
    }

    public function setConversion(float $conversion): void
    {

        $this->conversion = $conversion;
    }

    public function getDate(): string
    {

        return $this->date;
    }

    public function setDate(string $date): void
    {

        $this->date = $date;
    }

    public function __toString()
    {
        echo 
        "<br>Devise a convertir: ".$this->value1."<br>
        Devise cible: ".$this->value2."<br>
        Montant: ".$this->multiplicator." ".$this->value1."<br>
        Resultat: ",$this->conversion."<br>"."<br>
        Date du taux de change: ".$this->date."<br><br>";
        
    }

}
