 <?php


class cilinder extends figuur {

    public function berekenOppervlakte(){
      echo $oppervlakteTweeCirkels = 2 * $this->pi * $this->r * $this->r,"</br>";

      echo$oppervlakteBuis = 2 * $this->pi * $this->r * $this->h,"</br>";
      $oppervlakteCilinder = $oppervlakteTweeCirkels + $oppervlakteBuis;
      echo "$oppervlakteCilinder <br>";
     }
}
 ?>