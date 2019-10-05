<?php
require_once('Gafanhoto.php');
require_once('Video.php');
class Visualizacao{
  private $espectador, $video;
  
  function __construct($video, $espectador){
    $this->setEspectador($espectador);
    $this->setVideo($video);
    $this->video->setViews($this->video->getViews() + 1);
    $this->video->setReproduzindo(true);
    $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
  }

  function avaliar(){
    echo $this->getEspectador()->getNome() . ' Avaliou ' . $this->getVideo()->getTitulo();
    $this->video->setAvaliacao(5);
  }

  function avaliarPorNota($nota){
    $this->video->setAvaliacao($nota);
  }

  public function getEspectador()
  {
      return $this->espectador;
  }

  public function setEspectador($espectador)
  {
      $this->espectador = $espectador;
      return $this;
  }

  public function getVideo()
  {
      return $this->video;
  }

  public function setVideo($video)
  {
      $this->video = $video;
      return $this;
  }
}

?>