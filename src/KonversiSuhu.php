<?php declare(strict_types=1);

// Class untuk mengonversi suhu dari Celsius
final class KonversiSuhu
{
    // F = C × 9/5 + 32
    public function celsiusKeFahrenheit(float $c): float
    {
        return $c * 9 / 5 + 32;
    }

    // K = C + 273,15
    public function celsiusKeKelvin(float $c): float
    {
        return $c + 273.15;
    }
}