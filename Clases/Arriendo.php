<?php
    class Arriendo {
        private $idArriendo;
        private $patente;
        private $rutCliente;
        private $nombreCliente;
        private $apellidoCliente;
        private $fechaArriendo;
        private $fechaDevolucion;
        private $fechaRealDevolucion;

	    function getIdArriendo()
	    {
		return this.$idArriendo;
    	}

	    function setdIdArriendo($idArriendo)
	    {
		    $this->idArriendo = $idArriendo;
	    }

	    function getPatente()
	    {
    		return $this->patente;
    	}

    	function setPatente($patente)
    	{
    		$this->patente = $patente;
        }
            
        function getRutCliente()
    	{
    		return $this->rutCliente;
    	}

    	function setRutCliente($rutCliente)
    	{
    		$this->rutCliente = $rutCliente;
    	}

    	function getNombreCliente()
    	{
    		return $this->nombreCliente;
    	}

    	function setNombreCliente($nombreCliente)
    	{
    		$this->nombreCliente = $nombreCliente;
    	}

    	function getApellidoCliente()
    	{
    		return $this->apellidoCliente;
    	}

    	function setApellidoCliente($apellidoCliente)
	    {
    		$this->apellidoCliente = $apellidoCliente;
    	}

    	function getFechaArriendo()
    	{
    		return $this->fechaArriendo;
    	}

    	function setFechaArriendo($fechaArriendo)
    	{
    		$this->fechaArriendo = $fechaArriendo;
    	}

    	function getFechaDevolucion()
    	{
    		return $this->fechaDevolucion;
    	}

    	function setFechaDevolucion($fechaDevolucion)
    	{
    		$this->fechaDevolucion = $fechaDevolucion;
    	}

    	function getFechaRealDevolucion()
    	{
	    	return $this->fechaRealDevolucion;
    	}

    	function setFechaRealDevolucion($fechaRealDevolucion)
    	{
	    	$this->fechaRealDevolucion = $fechaRealDevolucion;
	    }

        
        
    }
?>