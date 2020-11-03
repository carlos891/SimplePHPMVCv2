<php
function run(){
    $viewData = array (
        "cuenta" => "1503200102370",
        "nombre"=>"carlos A calix",
        "correo"=>"carloscalix191@gmail.com"
    );
    $proyectos = array(
        array("id"=>, "1", "name"=> "negocios CMS"),
        array("id"=>, "2", "name"=> "negocios ERP"),
        array("id"=>, "3", "name"=> "negocios RRHH")
    );
    $diplomas = array  (
        array("id"=>, "1", "name"=> "diploma de kinder"),
        array("id"=>, "2", "name"=> "diploma de primaria"),
        array("id"=>, "3", "name"=> "diploma de secundaria"),
        array("id"=>, "4", "name"=> "diploma de relaciones interpersonales")
    );
    $viewData ["proyectos"] = $proyectos;
    renderizar("about", $viewData);

}

run();

?>