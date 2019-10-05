<?php
class ContaBanco
{
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function __construct()
  {
    $this->setStatus(false);
    $this->setSaldo(0);
  }



  public function getNumConta()
  {
    return $this->numConta;
  }

  public function setNumConta($novoNumConta)
  {
    $this->numConta = $novoNumConta;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function setTipo($novoTipo)
  {
    if ($novoTipo === "CC") {
      $this->tipo = $novoTipo;
    } elseif ($novoTipo === "CP") {
      $this->tipo = $novoTipo;
    } else {
      echo "Tipo de conta inválida, utilize CC para Conta Corrente ou CP para Conta Poupança";
    }
  }

  public function getDono()
  {
    return $this->dono;
  }

  public function setDono($novoDono)
  {
    $this->dono = $novoDono;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function setSaldo($novoSaldo)
  {
    $this->saldo = $novoSaldo;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($novoStatus)
  {
    $this->status = $novoStatus;
  }

  public function abrirConta($tipoDeConta)
  {
    if ($tipoDeConta === "CC" && $this->getStatus() === false) {
      $this->setTipo($tipoDeConta);
      $this->setNumConta(mt_rand());
      echo "Conta Corrente criada com sucesso <br>";
      $this->setStatus(true);
      $this->setSaldo(50);
      print "Você ganhou R$50 de bônus, seu saldo agora é R$ {$this->getSaldo()} <br>";
    } elseif ($tipoDeConta === "CP" && $this->getStatus() === false) {
      $this->setTipo($tipoDeConta);
      $this->setNumConta(mt_rand());
      echo "Conta Poupança criada com sucesso";
      $this->setStatus(true);
      $this->setSaldo(150);
      print "Você ganhou R$150 de bônus, seu saldo agora é R$ {$this->getSaldo()} <br>";
    } elseif ($this->getStatus() === true) {
      echo "Você já possui uma conta aberta <br>";
    } else {
      echo "Tipo de conta inválida, utilize CC para Conta Corrente ou CP para Conta Poupança";
    }
  }

  public function fecharConta()
  {
    if ($this->getSaldo() > 0) {
      echo "Existe saldo em sua conta, saque todo seu dinheiro antes de fechar <br>";
    } elseif ($this->getSaldo() < 0) {
      echo "Você esta devendo para o banco safadinho, pague sua dívida antes de fechar a conta <br>";
    } else {
      $this->setStatus(false);
      echo "Conta fechada com sucesso!";
    }
  }

  public function depositar($valorDoDeposito)
  {
    if ($this->getStatus() && $valorDoDeposito > 0) {
      $this->setSaldo($this->getSaldo() + $valorDoDeposito);
      echo "Foi depositado R$ {$valorDoDeposito} em sua conta, seu saldo agora é R$ {$this->getSaldo()} <br>";
    } else {
      echo "Sua conta não está ativa, ative-a para realizar depósitos";
    }
  }

  public function sacar($valorDoSaque)
  {
    if ($this->getStatus() === true && $this->getSaldo() > 0 && $valorDoSaque <= $this->getSaldo() && $valorDoSaque >  0) {
      echo "Você sacou R$ {$valorDoSaque} <br>";
      $this->setSaldo($this->getSaldo() - $valorDoSaque);
      echo "Seu saldo agora é R$ {$this->getSaldo()} <br>";
    } elseif ($valorDoSaque > $this->getSaldo()) {
      echo "Valor do saque é maior que saldo disponível, seu saldo atual é R$ {$this->getSaldo()} <br>";
    } elseif ($valorDoSaque < 0) {
      echo "Valor negativo não permitido <br>";
    } else {
      echo "Erro ao sacar";
    }
  }

  public function pagarMensal()
  {
    if ($this->getTipo() === "CC" && $this->getStatus() === true && $this->getSaldo() > 0) {
      $this->setSaldo($this->getSaldo() - 12);
      echo "Descontado R$12 de mensalidade";
    } elseif ($this->getTipo() === "CP" && $this->getStatus() === true && $this->getSaldo() > 0) {
      $this->setSaldo($this->getSaldo() - 20);
      echo "Descontado R$20 de mensalidade";
    }
  }
}
