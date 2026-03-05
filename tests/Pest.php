<?php

/*
|--------------------------------------------------------------------------
| configuro el caso base de pruebas
|--------------------------------------------------------------------------
|
| indico que los closures de tests se vinculan una clase de PHPUnit.
| Por defecto uso "PHPUnit\Framework\TestCase", y puedo cambiarlo con "pest()".
|
*/

pest()->extend(Tests\TestCase::class)
 // puedo habilitar RefreshDatabase si lo necesito.
    ->in('Feature');

/*
|--------------------------------------------------------------------------
| defino expectativas
|--------------------------------------------------------------------------
|
| uso "expect()" para validar condiciones y puedo extender su API cuando lo necesite.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| defino funciones auxiliares
|--------------------------------------------------------------------------
|
| expongo helpers globales para no repetir c??digo de pruebas.
|
*/

function something()
{
    // puedo añadir lógica de apoyo aquí.
}
