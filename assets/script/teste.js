var nota_critico = 73;
        var nota_usuario = 75;
        var class1 = '.critico"';
        var class2 = '".usuario"';

        alterarCor(nota_critico,class1);
        alterarCor(nota_usuario,class2);
        function alterarCor(x,y) {
            if (x < 33) {
                $(y).addClass("red");
            } else if (x <= 66) {
                $(y).addClass("yellow");
            } else {
                $(y).addClass("green");
            }
        }