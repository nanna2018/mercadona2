<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CantidadRepository")
 */
class Cantidad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedido")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pedidos;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Producto")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productos;

    public function getId()
    {
        return $this->id;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPedidos(): ?Pedido
    {
        return $this->pedidos;
    }

    public function setPedidos(?Pedido $pedidos): self
    {
        $this->pedidos = $pedidos;

        return $this;
    }

    public function getProductos(): ?Producto
    {
        return $this->productos;
    }

    public function setProductos(?Producto $productos): self
    {
        $this->productos = $productos;

        return $this;
    }
}
