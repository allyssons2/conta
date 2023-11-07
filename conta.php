<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class conta
{             
    private $numero;
    private $agencia;
    private $proprietario;
    private $saldo;
    private $limite;
    
 
    
    public function__construct(){}
 
    public function create($_numero,$_agencia,$_proprietario,$_saldo,$_limite,)
    {
     $this->numero = $_numero;
     $this->agencia = $_agencia;
     $this->proprietario = $_proprietario;
     $this->saldo = $_saldo;
     $this->limite = $_limite;
     
     
     public function set_numero($_numero)
     {
         $this->numero = $_numero;
     }

     public function set_agencia($_agencia)
     {
         $this->agencia = $_agencia;
     }

     public function get_proprietario()
     {
         $this $this->proprietario;
     }

     public function get_saldo()
     {
         $this $this->saldo;
     }

     public function limite()
     {
        $this $this->limite;
     }


    public function depositar($_valor)
    {
        echo "$this->nome recebe um valor e acrescenta no saldo;";
 
        public function sacar($_valor)
        {
         if $this->saldo + $this ->limite >= $_valor    
          {
              $this->saldo-= $_valor;
              $this->getsaldo  ();                              
        }

        else {
            return false;
    }
 
}
 
 
?>
</body>
</html>

