<?php
    require_once __DIR__ . "/" . "../../infrastructure/constants.php";
    require_once __DIR__ . "/" . "../../components/manager.php";
    require_once __DIR__ . "/" . "../../infrastructure/session_manager.php";
    require_once __DIR__ . "/" . "../../infrastructure/scaffold_style.php";    
    require_once __DIR__ . "/" . "../../infrastructure/form_builder.php";
    //
    $sessionManager = new SessionManager();
    //
    $allowedToRender = false;
    $authenticated = $sessionManager->session_is_authenticated() && $sessionManager->session_is_admin();
    $success = $_GET["success"] ?? false;
    if($authenticated) {
        $allowedToRender = true;
    }
    if(!$allowedToRender) {
        if(!$authenticated) {
            header("Location: ../login.php");
        }
        else {
            header("Location: ../notfound.php");
        }
        return;
    } else {
        $errors = $_GET["errors"] ?? null;
        if($errors != null) {
            $errors = json_decode($errors, true);
        }
?>
<html>
    <head>
        <title>Criar Novo Software | <?php echo APP_NAME ?></title>
        <?php scaffold_style() ?>
        <style>
        </style>
    </head>
    <body>
        <?php require_component("header"); ?>
        <section class="software flex flex-column align-center justify-center" style="flex: 1;">
            <?php
                form_build(
                    null,
                    "Criar software",
                    $errors,
                    $success,
                    true,
                    "../../api/softwares/create.php",
                    "post",
                    "flex flex-column",
                    "",
                    [
                        [
                            "name" => "name",
                            "text" => "Nome",
                            "type" => "text",
                            "placeholder" => "Nome do software",
                        ],
                        [
                            "name" => "color",
                            "text" => "Cor",
                            "type" => "color",
                            "placeholder" => "Cor predominante no logo",
                        ],
                        [
                            "name" => "logo",
                            "text" => "Imagem",
                            "type" => "url",
                            "placeholder" => "URL da imagem transparente do logo",
                        ],
                        [
                            "name" => "description",
                            "text" => "Descrição",
                            "type" => "text",
                            "tag" => "textarea",
                            "placeholder" => "Descrição do software",
                        ],
                    ],
                    [
                        [
                            "text" => "Criar",
                            "classes" => "primary",
                        ],
                    ]);
            ?>
        </section>
    </body>
</html>
<?php
    }
?>