<?php
function generarMenuLateral($elementos, $tipo = 'ul')
{
    if (!in_array($tipo, ['ul', 'ol'])) {
        $tipo = 'ul';
    }

    // INICIO DEL MENU LATERAL
    echo "<aside>";
    // TITULO O IMG DEL MENU
    echo "<div class='side-title'>";
    if (!empty($elementos["Titulo"])) {
        echo "<h1>" . $elementos["Titulo"] . "</h1>";
    } else {
        echo "<h1><img src='" . $elementos["img"] . "'></h1>";
    }
    echo "</div>";

    // LISTA DEL MENU SUPERIOR
    echo "<$tipo>";
    for ($i = 0; $i < count($elementos["Up"]); $i++) {
        echo "<li>
        <a href='" . $elementos["Up"][$i]["href"] . "'>";
        if (!empty($elementos["Up"][$i]["svg"])) {
            echo "<i>";
            echo '<svg viewBox="0 0 576 512">';
            echo '<path d="' . $elementos["Up"][$i]["svg"] . '" />';
            echo '</svg>';
            echo "</i>";
        }
        echo "<span class='aside-item'>" . $elementos["Up"][$i]["nombre"] . "</span>
        </a>
        </li>";
    }

    // LISTA DEL MENU INFERIOR
    echo "<form method=" . $elementos["Down"]["form"] . ">";
    for ($i = 0; $i < count($elementos["Down"]) - 1; $i++) {
        echo "<div class='" . $elementos["Down"][$i]["class"] . "'>";
        if (!empty($elementos["Down"][$i]["svg"])) {
            echo "<i>";
            echo '<svg viewBox="0 0 576 512">';
            echo '<path d="' . $elementos["Down"][$i]["svg"] . '" />';
            echo '</svg>';
            echo "</i>";
        }
        echo "<" . $elementos["Down"][$i]["elemento"] . " class='".$elementos["Down"][$i]["Elementclass"]."' name='" . $elementos["Down"][$i]["name"] . "'>
        " . $elementos["Down"][$i]["nombre"] . "
        </" . $elementos["Down"][$i]["elemento"] . ">
        </div>";
    }
    echo "</form>";
    echo "</$tipo>";
    echo "</aside>";
}
?>
<style>
    main {
        position: relative;
        width: 78vw;
        left: 20vw;
    }

    aside {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        height: 100vh;
        width: 20vw;
        background-color: var(--color-principal-oscuro);
    }

    aside .side-title {
        text-align: center;
        color: var(--color-letras-claro);
        padding: 1.5rem;
    }

    aside .side-title h1 {
        margin: 0;
        font-size: 2rem;
    }

    aside .side-title img {
        width: 7rem;
    }
    aside .aside-item{
        padding: 4px;
    }
    aside li {
        padding-bottom: 2rem;
        list-style: none;
    }

    aside li a {
        font-size: 1rem;
        color: var(--color-letras-claro);
        text-decoration: none;
    }

    aside i {
        font-size: 2rem;
        text-align: center;
    }

    aside i svg {
        width: 18px;
        fill: var(--color-principal);
    }

    aside .logout {
        position: absolute;
        bottom: 20px;
    }
    aside .boton {
        padding: 8px 13px;
        background-color: var(--color-principal);
        color: var(--color-letras-claro);
        border: none;
        border-radius: 10px;
        box-shadow: 0px 2px 8px var(--color-letras-oscuro);
    }
</style>