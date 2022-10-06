<?php
$count = 0;
class Lutador
{
    protected $nome;
    protected $nacionalidade;
    protected $dataNascimento;
    protected $altura;
    protected $peso;
    protected $categoria;
    protected $vitorias;
    protected $derrotas;
    protected $empates; 


    public function __construct($nome, $nacionalidade, $dataNascimento, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->dataNascimento = $dataNascimento;
        $this->altura = $altura;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
        //setting up the category
        $this->setPeso($peso);
    }
    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }
    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    /**
     * Get the value of dataNascimento
     */ 
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    /**
     * Set the value of dataNascimento
     *
     * @return  self
     */ 
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }
    /**
     * Get the value of nacionalidade
     */ 
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    /**
     * Set the value of nacionalidade
     *
     * @return  self
     */ 
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }
    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }
    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }
    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
       return $this->peso;
    }
    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria($peso);
        // return $this;
    }
    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($peso)
    {
        if($peso < 52.2){
            $this->categoria = 'Invalido';
        } if( $peso <= 70.3){
            $this->categoria = 'Leve';            
        }if( $peso <= 83.9){
            $this->categoria = 'Medio';            
        }if( $peso <= 120.2){
            $this->categoria = 'Pesado';            
        }else {
            $this->categoria = 'Invalido';            
        }
        return $this;
    }
    /**
     * Get the value of vitorias
     */ 
    public function getVitorias()
    {
        return $this->vitorias;
    }
    /**
     * Set the value of vitorias
     *
     * @return  self
     */ 
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }
    /**
     * Get the value of derrotas
     */ 
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    /**
     * Set the value of derrotas
     *
     * @return  self
     */ 
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }
    /**
     * Get the value of empates
     */ 
    public function getEmpates()
    {
        return $this->empates;
    }
    /**
     * Set the value of empates
     *
     * @return  self
     */ 
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
    public function apresentar()
    {
        echo '<table class="table container mt-3">';
        echo '<thead>';
        echo '    <tr>';
        echo '        <th scope="col">Nome</th>';
        echo '        <th scope="col">Nacionalidade</th>';
        echo '        <th scope="col">Idade</th>';
        echo '        <th scope="col">Altura</th>';
        echo '        <th scope="col">Peso</th>';
        echo '        <th scope="col">Categoria</th>';
        echo '        <th scope="col">Vitorias</th>';
        echo '        <th scope="col">Derrotas</th>';
        echo '        <th scope="col">Empates</th>';
        echo '    </tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr>';
        echo '  <th scope="row">'.$this->getNome().'</th>';
        echo '  <td>'.$this->getNacionalidade().'</td>';
        echo '  <td>'.$this->getIdade().'</td>';
        echo '  <td>'.$this->getAltura().'</td>';
        echo '  <td>'.$this->getPeso().'</td>';
        echo '  <td>'.$this->getCategoria().'</td>';
        echo '  <td>'.$this->getVitorias().'</td>';
        echo '  <td>'.$this->getDerrotas().'</td>';
        echo '  <td>'.$this->getEmpates().'</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';

    } 
    public function status()
    {
        echo '<p>'.$this->getNome(). ' e um peso '. $this->getCategoria();
        echo 'e ja ganhou '.$this->getVitorias(). ' vezes ';
        echo 'perdeu '.$this->getDerrotas(). ' vezes e ';
        echo 'empatou '.$this->getEmpates(). ' vezes!';
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() - 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        $anoAtual = (int) date('Y');
        if($anoAtual < $this->getDataNascimento()){
            echo 'Ano de Nascimento Invalido!';
        }else {
            $idade = $anoAtual - $this->getDataNascimento();
            return $idade;
        }
        
    }
}