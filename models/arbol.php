<?php

class Nodo
{
    public $valor;
    public $izq;
    public $der;

    public function __construct($valor)
    {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

class Arbol
{

    // PRE + IN
    public function construirPreIn($pre, $in)
    {
        if (empty($pre) || empty($in)) return null;

        $raizValor = $pre[0];
        $raiz = new Nodo($raizValor);

        $indice = array_search($raizValor, $in);

        $inIzq = array_slice($in, 0, $indice);
        $inDer = array_slice($in, $indice + 1);

        $preIzq = array_slice($pre, 1, count($inIzq));
        $preDer = array_slice($pre, 1 + count($inIzq));

        $raiz->izq = $this->construirPreIn($preIzq, $inIzq);
        $raiz->der = $this->construirPreIn($preDer, $inDer);

        return $raiz;
    }

    // IN + POST
    public function construirInPost($in, $post)
    {
        if (empty($in) || empty($post)) return null;

        $raizValor = end($post);
        $raiz = new Nodo($raizValor);

        $indice = array_search($raizValor, $in);

        $inIzq = array_slice($in, 0, $indice);
        $inDer = array_slice($in, $indice + 1);

        $postIzq = array_slice($post, 0, count($inIzq));
        $postDer = array_slice($post, count($inIzq), -1);

        $raiz->izq = $this->construirInPost($inIzq, $postIzq);
        $raiz->der = $this->construirInPost($inDer, $postDer);

        return $raiz;
    }

    // representación visual (árbol)
    public function renderHTML($nodo)
    {
        if ($nodo == null) return "";

        $html = "<li><div>{$nodo->valor}</div>";

        if ($nodo->izq || $nodo->der) {
            $html .= "<ul>";
            $html .= $this->renderHTML($nodo->izq);
            $html .= $this->renderHTML($nodo->der);
            $html .= "</ul>";
        }

        $html .= "</li>";

        return $html;
    }
}
