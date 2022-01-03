<?php

/*Fonction TAG */

function tag($tag, $content = null, $attributs = array(), $after = "\n", $before = "")
{
    $attributs_string = '';
    foreach ($attributs as $name => $value) {
        $attributs_string .= " $name=$value";
    }
    if ($content)     return "$before<$tag$attributs_string>$content</$tag>$after";
    else             return "<$tag$attributs_string />$after";
}

function br() {
    return tag("br/");
}

function html($body, $head)
{
    return '<head>' . $head . '</head><body>' . $body . '</body>';
}

/* Fonction P */
function p($content, $attributs = array())
{
    return tag('p', $content, $attributs);
}

/* Fonction lien */
function a($content, $href = null, $attributs = array())
{
    if ($href == null) {
        $href = $_SERVER['PHP_SELF'];
    }
    $attributs['href'] = $href;
    return tag('a', $content, $attributs);
}

////////////////////////
//Fonction formulaire///
///////////////////////////////////////////////////////////////////////////////////////

/*Fonction FORMULAIRE */
function form($content, $action = '#', $method = 'POST', $attributs = array())
{
    if ($action == null) {
        $action = $_SERVER['PHP_SELF'];
    }
    $attributs['action'] = $action;
    $attributs['method'] = $method;
    return tag('form', $content, $attributs);
}

/* Fonction LABEL */
function label($for, $content, $attributs = array())
{
    $attributs['for'] = $for;
    return tag('label', $content, $attributs);
}

/* Fonction INPUT */
function input($name, $value = null, $type = 'TEXT', $attributs = array())
{
    $attributs['name'] = $name;
    $attributs['type'] = $type;
    if (!empty($value))    $attributs['value'] = $value;
    return tag('input', null, $attributs);
}

/* Fonction SELECT */
function select($name, $value, $options = array(), $attributs = array(), $empty = false)
{ //$empty signifique si l'on veut voir appraitre le champ vide comme option
    $attributs['name'] = $name; //créer un attribut name=$name dans la balise select.
    //Stocke la liste des options du select
    $options_str = '';
    if ($empty == true) {
        $options_str = tag('option', '--Vide--'); //Option par défaut qui met une option Vide dans l'onglet
    }
    foreach ($options as $opt => $val) { //Parcours tableau option avec opt(indice actuel)=>val(valeur case actuelle))
        $attrs = null; //Reinitialise les attributs à chaque pas de foreach. $attrs correspond aux attributs de chaque balise option contenues dans le select.
        $attrs['value'] = $opt;    //Valeur de chaque option du select (ex Monsieur, Madame, Mademoiselle)
        if ($opt == $value) {
            $attrs['selected'] = 'selected'; //Met la selection choisie dans les parametres en préselection.
        }
        $options_str .= tag('option', $val, $attrs);
    }
    return tag('select', $options_str, $attributs);
}

/*Fonction SUBMIT */
function submit($name, $value = 'Envoyer', $attributs = array())
{
    return input($name, $value, 'submit', $attributs);
}

/*Fonction BUTTON*/
function button($name, $value, $content, $type = 'submit', $attributs = array())
{
    $attributs['name'] = $name;
    $attributs['value'] = $value;
    $attributs['type'] = $type;
    return tag('button', $content, $attributs);
}
////////////////////////////////////////////////////////////////////////////////////


///////////////////////////
///Creation de tableau/////
/////////////////////////////////////////////////////////////////////////////////////
function hcell($content, $attributs = array())
{
    return tag('th', $content, $attributs);
}

function cell($content, $attributs = array())
{
    return tag('td', $content, $attributs);
}

function row($content, $attributs = array())
{
    return tag('tr', $content, $attributs);
}

function table($content, $attributs = array())
{
    return tag('table', $content, $attributs);
}
////////////////////////////////////////////////////////////////////////////////////////	

function tableau($array){
    $rows='';
    // echo, print_r, var_dump = verification de fonction
    foreach($array as $row){
        $cells='';
        $head='';
        foreach($row as $key=>$value){
            $head.="<th>".$key."</th>\n";
        }
        foreach($row as $value){
            $cells.="<td>".$value."</td>\n";
        }
        $rows.="<tr>".$cells."</tr>\n";
    }

    $table='<table>'.$head.$rows.'</table>';
    return($table);
}