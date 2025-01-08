<?php

//--------------------------CRIAÇÃO DE CLASSES A PARTIR DE INTERFACES--------------------------

/*
    Em programação orientada a objetos, o conceito de interfaces é semelhante ao de uma classe abstrata. Vamos ver as diferenças.

    Interfaces permitem especificar métodos que as classes vão ter que implementar nas suas estruturas.

    Quando várias classes tem que implementar um conjunto de métodos semelhantes, estamos a entrar num conceito muito importante da programação orientada a objetos que é o polimorfismo.

    Vejamos um exemplo de uma interface.
*/

// Usa-se o Implements para usar o interface

interface animal{
    public function vocalizar($vezes);
    public function indentificar();
    public function executar_movimento($direcao);
}

/*
    Principais diferenças entre interface e classes abstradas:

    > Os interfaces não podem conter propiedades, as classes podem.
    > Todos os métodos dos interfaces são public.
    > Todos os métodos dos interfaces são abstratos por natureza. Não podem ter implementação dentro do interface. O uso do termo abstract não é necessário. Está implicito.
    > As classes podem implementar um interface a herdar de outra classe ao mesmo tempo.

*/